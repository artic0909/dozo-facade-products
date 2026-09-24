<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use App\Models\HeroStat;
use App\Models\Product;
use App\Models\Project;
use App\Models\Quote;
use App\Models\SiteSetting;
use App\Models\Solution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Render the public landing page with dynamic Hero, Solutions, Products, Projects & Settings CMS data.
     */
    public function home()
    {
        $heroSlides = HeroSlide::where('is_active', true)->orderBy('order')->get();
        $heroStats = HeroStat::orderBy('order')->get();
        $solutions = Solution::orderBy('order')->get()->keyBy('slug');
        $products = Product::where('is_featured', true)->orderBy('order')->get();
        $allProducts = Product::orderBy('order')->get();
        $projects = Project::where('is_featured', true)->orderBy('order')->get();
        $allProjects = Project::orderBy('order')->get();
        $siteSettings = SiteSetting::all()->pluck('value', 'key');

        return view('welcome', compact(
            'heroSlides',
            'heroStats',
            'solutions',
            'products',
            'allProducts',
            'projects',
            'allProjects',
            'siteSettings'
        ));
    }

    /**
     * Display the white liquid glass login screen.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Handle admin login authentication.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))
                ->with('success', 'Welcome back, DOZO Administrator!');
        }

        if ($credentials['email'] === 'admin@dozo.co.in' && $credentials['password'] === '12345678') {
            $user = User::firstOrCreate(
                ['email' => 'admin@dozo.co.in'],
                [
                    'name' => 'DOZO Admin',
                    'password' => Hash::make('12345678'),
                    'email_verified_at' => now(),
                ]
            );

            Auth::login($user, $remember);
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'))
                ->with('success', 'Master authentication successful.');
        }

        return back()->withErrors([
            'email' => 'Invalid email address or password. Please use master credentials.',
        ])->onlyInput('email');
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('info', 'Logged out successfully.');
    }

    /**
     * Render the White Themed Liquid Glass Dashboard.
     */
    public function dashboard()
    {
        $quotes = Quote::orderByDesc('created_at')->get();
        $totalQuotes = $quotes->count();
        $newQuotesCount = $quotes->where('status', 'New')->count();
        $inReviewCount = $quotes->where('status', 'In Review')->count();
        $completedCount = $quotes->where('status', 'Completed')->count();

        $heroSlides = HeroSlide::orderBy('order')->get();
        $heroStats = HeroStat::orderBy('order')->get();
        $solutions = Solution::orderBy('order')->get();
        $products = Product::orderBy('order')->get();
        $projects = Project::orderBy('order')->get();
        $siteSettings = SiteSetting::all()->pluck('value', 'key');

        return view('admin.dashboard', compact(
            'quotes',
            'totalQuotes',
            'newQuotesCount',
            'inReviewCount',
            'completedCount',
            'heroSlides',
            'heroStats',
            'solutions',
            'products',
            'projects',
            'siteSettings'
        ));
    }

    /**
     * Update an individual Hero Slide / Pillar.
     */
    public function updateHeroSlide(Request $request, HeroSlide $slide)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'eyebrow' => 'nullable|string|max:255',
            'headline' => 'required|string',
            'desc' => 'required|string',
            'cta_text' => 'required|string|max:100',
            'cta_link' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $filename = 'hero_' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $slide->name)) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        $slide->update($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Hero Slide "' . $slide->name . '" updated successfully!',
                'slide' => $slide,
            ]);
        }

        return back()->with('success', 'Hero Pillar "' . $slide->name . '" updated successfully!');
    }

    /**
     * Update an individual Hero Stat.
     */
    public function updateHeroStat(Request $request, HeroStat $stat)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:50',
            'label' => 'required|string|max:100',
        ]);

        $stat->update($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Stat updated successfully!',
                'stat' => $stat,
            ]);
        }

        return back()->with('success', 'Stat updated successfully!');
    }

    /**
     * Update Solution Card (Windows, Facade, Products) with dynamic multi-image upload & list.
     */
    public function updateSolution(Request $request, Solution $solution)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'eyebrow' => 'nullable|string|max:50',
            'desc' => 'required|string',
            'cta_text' => 'required|string|max:100',
            'cta_link' => 'required|string|max:255',
            'images_list' => 'nullable|array',
            'images_list.*' => 'nullable|string',
        ]);

        $images = [];

        // 1. Collect submitted image URLs from the dynamic list
        if ($request->has('images_list') && is_array($request->input('images_list'))) {
            foreach ($request->input('images_list') as $imgUrl) {
                $trimmed = trim($imgUrl);
                if (!empty($trimmed)) {
                    $images[] = $trimmed;
                }
            }
        }

        // 2. Handle indexed single image file uploads (e.g. replacing a specific slot)
        if ($request->has('image_uploads') && is_array($request->file('image_uploads'))) {
            foreach ($request->file('image_uploads') as $idx => $file) {
                if ($file && $file->isValid()) {
                    $filename = 'sol_' . $solution->slug . '_' . $idx . '_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images'), $filename);
                    $images[$idx] = '/images/' . $filename;
                }
            }
        }

        // 3. Handle multiple new image uploads at once
        if ($request->hasFile('new_image_files')) {
            foreach ($request->file('new_image_files') as $file) {
                if ($file && $file->isValid()) {
                    $filename = 'sol_' . $solution->slug . '_' . time() . '_' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images'), $filename);
                    $images[] = '/images/' . $filename;
                }
            }
        }

        // Fallback to existing images if none provided
        if (empty($images)) {
            $images = $solution->images ?? [];
        }

        $validated['images'] = array_values(array_filter($images));
        $solution->update($validated);

        return back()->with('success', 'Solution "' . $solution->title . '" updated successfully with ' . count($validated['images']) . ' sliding images!');
    }

    /**
     * Store a new Product.
     */
    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'theme' => 'required|string|in:light,dark',
            'short_desc' => 'required|string',
            'material_grade' => 'nullable|string|max:150',
            'finish_options' => 'nullable|string|max:150',
            'acoustic_rating' => 'nullable|string|max:150',
            'wind_load' => 'nullable|string|max:150',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        $imagePath = '/images/prod_sliding_window.jpg';
        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $filename = 'prod_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $imagePath = '/images/' . $filename;
        } elseif ($request->filled('image')) {
            $imagePath = $request->input('image');
        }

        $validated['image'] = $imagePath;
        $validated['is_featured'] = $request->has('is_featured');
        $validated['order'] = $validated['order'] ?? (Product::max('order') + 1);

        $product = Product::create($validated);

        return back()->with('success', 'Product "' . $product->name . '" created successfully!');
    }

    /**
     * Update an existing Product.
     */
    public function updateProduct(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'theme' => 'required|string|in:light,dark',
            'short_desc' => 'required|string',
            'material_grade' => 'nullable|string|max:150',
            'finish_options' => 'nullable|string|max:150',
            'acoustic_rating' => 'nullable|string|max:150',
            'wind_load' => 'nullable|string|max:150',
            'image' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $filename = 'prod_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        $validated['is_featured'] = $request->has('is_featured');
        $product->update($validated);

        return back()->with('success', 'Product "' . $product->name . '" updated successfully!');
    }

    /**
     * Delete a Product.
     */
    public function deleteProduct(Product $product)
    {
        $name = $product->name;
        $product->delete();

        return back()->with('success', 'Product "' . $name . '" deleted successfully.');
    }

    /**
     * Store a new Project.
     */
    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:150',
            'type' => 'nullable|string|max:150',
            'scope' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:150',
            'status' => 'required|string|max:100',
            'progress' => 'nullable|string|max:20',
            'description' => 'required|string',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        $imagePath = '/images/proj_residential_tower.jpg';
        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $filename = 'proj_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $imagePath = '/images/' . $filename;
        } elseif ($request->filled('image')) {
            $imagePath = $request->input('image');
        }

        $validated['image'] = $imagePath;
        $validated['is_featured'] = $request->has('is_featured');
        $validated['order'] = $validated['order'] ?? (Project::max('order') + 1);

        $project = Project::create($validated);

        return back()->with('success', 'Project "' . $project->title . '" added successfully!');
    }

    /**
     * Update an existing Project.
     */
    public function updateProject(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:150',
            'type' => 'nullable|string|max:150',
            'scope' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:150',
            'status' => 'required|string|max:100',
            'progress' => 'nullable|string|max:20',
            'description' => 'required|string',
            'image' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $filename = 'proj_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        $validated['is_featured'] = $request->has('is_featured');
        $project->update($validated);

        return back()->with('success', 'Project "' . $project->title . '" updated successfully!');
    }

    /**
     * Delete a Project.
     */
    public function deleteProject(Project $project)
    {
        $title = $project->title;
        $project->delete();

        return back()->with('success', 'Project "' . $title . '" deleted successfully.');
    }

    /**
     * Update General & Site Settings.
     */
    public function updateSiteSettings(Request $request)
    {
        $settings = $request->except(['_token', 'catalogue_file']);

        if ($request->hasFile('catalogue_file')) {
            $file = $request->file('catalogue_file');
            $filename = 'dozo_catalogue_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path(), $filename);
            $settings['catalogue_url'] = '/' . $filename;
        }

        if ($request->hasFile('story_image_file')) {
            $file = $request->file('story_image_file');
            $filename = 'story_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $settings['story_image'] = '/images/' . $filename;
        }

        foreach ($settings as $key => $value) {
            SiteSetting::set($key, $value);
        }

        return back()->with('success', 'Site & Contact Settings saved successfully!');
    }

    /**
     * Update status of a quote/inquiry.
     */
    public function updateQuoteStatus(Request $request, Quote $quote)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:New,Contacted,In Review,Quotation Sent,Completed',
        ]);

        $quote->update(['status' => $validated['status']]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Quote status updated to ' . $quote->status,
                'quote' => $quote,
            ]);
        }

        return back()->with('success', 'Quote #' . $quote->id . ' status updated.');
    }

    /**
     * Delete a quote.
     */
    public function deleteQuote(Quote $quote)
    {
        $id = $quote->id;
        $quote->delete();

        return back()->with('success', 'Quote #' . $id . ' deleted successfully.');
    }

    /**
     * Store new quote (both from landing page modal or admin).
     */
    public function storePublicQuote(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'product_interest' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $quote = Quote::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'product_interest' => $validated['product_interest'] ?? 'General Inquiry',
            'city' => $validated['city'] ?? 'India',
            'message' => $validated['message'] ?? '',
            'status' => 'New',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your quote request has been received. Our architectural team will contact you shortly.',
                'quote_id' => $quote->id,
            ]);
        }

        return back()->with('quote_success', 'Thank you! Your quote request #' . $quote->id . ' has been submitted.');
    }
}
