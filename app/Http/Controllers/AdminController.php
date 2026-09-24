<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use App\Models\HeroStat;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Render the public landing page with dynamic Hero CMS content.
     */
    public function home()
    {
        $heroSlides = HeroSlide::where('is_active', true)->orderBy('order')->get();
        $heroStats = HeroStat::orderBy('order')->get();

        return view('welcome', compact('heroSlides', 'heroStats'));
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

        // Sample products inventory data
        $products = [
            [
                'id' => 1,
                'name' => 'Sliding Window System',
                'category' => 'DOZO Windows',
                'image' => '/images/prod_sliding_window.jpg',
                'views' => 1420,
                'inquiries' => 38,
                'status' => 'Active',
                'rating' => '4.9/5',
                'specs' => 'Multi-Track Aluminium, Dual Acoustic Seal, German Hardware',
            ],
            [
                'id' => 2,
                'name' => 'Casement Window System',
                'category' => 'DOZO Windows',
                'image' => '/images/prod_casement_window.jpg',
                'views' => 1180,
                'inquiries' => 29,
                'status' => 'Active',
                'rating' => '4.8/5',
                'specs' => 'Side-Hung Multipoint Locking, 42dB Sound Reduction',
            ],
            [
                'id' => 3,
                'name' => 'Unitized Glass Facade',
                'category' => 'DOZO Façades',
                'image' => '/images/prod_unitized_facade.jpg',
                'views' => 2890,
                'inquiries' => 54,
                'status' => 'Active',
                'rating' => '5.0/5',
                'specs' => 'Factory Pre-Glazed Unitized Curtain Wall, High Wind Load',
            ],
            [
                'id' => 4,
                'name' => 'Architectural Perforated Panel',
                'category' => 'DOZO Façades',
                'image' => '/images/prod_perforated_panel.jpg',
                'views' => 1940,
                'inquiries' => 42,
                'status' => 'Active',
                'rating' => '4.9/5',
                'specs' => 'CNC Geometric Laser Cut Solid Aluminium 3mm/4mm',
            ],
            [
                'id' => 5,
                'name' => 'Thermal Break Slimline Doors',
                'category' => 'DOZO Windows',
                'image' => '/images/solution_windows_3.jpg',
                'views' => 860,
                'inquiries' => 19,
                'status' => 'Active',
                'rating' => '4.8/5',
                'specs' => 'Minimal Sightline 20mm Interlock, Double Low-E Glass',
            ],
            [
                'id' => 6,
                'name' => 'Architectural Louvers & Sunshades',
                'category' => 'DOZO Façades',
                'image' => '/images/solution_facade_4.jpg',
                'views' => 740,
                'inquiries' => 15,
                'status' => 'Active',
                'rating' => '4.7/5',
                'specs' => 'Extruded Aerofoil Blades, Integrated Solar Shading',
            ],
        ];

        // Sample projects portfolio data
        $projects = [
            [
                'id' => 1,
                'title' => 'Residential Tower Kolkata',
                'location' => 'New Town, Kolkata',
                'type' => 'Residential High-Rise (32 Floors)',
                'scope' => '14,000 sq.m Double Glazed Envelope + Casements',
                'image' => '/images/proj_residential_tower.jpg',
                'status' => 'Under Construction',
                'progress' => '82%',
                'client' => 'Roy Group Architects',
            ],
            [
                'id' => 2,
                'title' => 'Commercial Complex Bangalore',
                'location' => 'Outer Ring Road, Bangalore',
                'type' => 'Tech Park & Commercial Hub',
                'scope' => 'Unitized Structural Glazing & Solar Shading',
                'image' => '/images/proj_commercial_complex.jpg',
                'status' => 'Completed & Handed Over',
                'progress' => '100%',
                'client' => 'Prestige Infrastructure',
            ],
            [
                'id' => 3,
                'title' => 'IT Park Hyderabad',
                'location' => 'HITEC City, Hyderabad',
                'type' => 'Corporate Headquarter Campus',
                'scope' => 'Aluminium Composite Cladding & Fixed Glazing',
                'image' => '/images/proj_it_park.jpg',
                'status' => 'Phase 2 Installation',
                'progress' => '65%',
                'client' => 'Cyber Towers Corp',
            ],
            [
                'id' => 4,
                'title' => 'Luxury Beachfront Residence Goa',
                'location' => 'Candolim, Goa',
                'type' => 'Ultra-Luxury Private Villa',
                'scope' => 'Heavy-Duty Slim Sliding Doors & Marine Anodized Frames',
                'image' => '/images/proj_luxury_residence.jpg',
                'status' => 'Completed',
                'progress' => '100%',
                'client' => 'Private Client',
            ],
        ];

        return view('admin.dashboard', compact(
            'quotes',
            'totalQuotes',
            'newQuotesCount',
            'inReviewCount',
            'completedCount',
            'heroSlides',
            'heroStats',
            'products',
            'projects'
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
            $filename = 'hero_' . strtolower($slide->name) . '_' . time() . '.' . $file->getClientOriginalExtension();
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
