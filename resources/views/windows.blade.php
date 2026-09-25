<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOZO Windows — Premium Engineered Window Systems Catalog</title>
    <meta name="description" content="Explore DOZO high-performance aluminum sliding, casement, and slimline window systems engineered for acoustic insulation and structural endurance.">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            -webkit-font-smoothing: antialiased;
            background-color: #fcfcfd;
            color: #0f172a;
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white flex flex-col min-h-screen">

    <!-- TOP NAVIGATION BAR -->
    <header class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-2xs">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group shrink-0">
                    <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7 xl:gap-9 text-[15px] font-semibold text-[#1a1d20]">
                    <a href="{{ route('home') }}" class="hover:text-sky-600 transition-colors">Home</a>
                    <a href="{{ route('windows.index') }}" class="text-sky-600 font-bold relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-sky-600">Windows</a>
                    <a href="{{ route('products.index') }}" class="hover:text-sky-600 transition-colors">Products & Façades</a>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="hover:text-sky-600 transition-colors flex items-center gap-1">
                        <span>Catalogue</span>
                    </a>
                </nav>

                <!-- Action Buttons -->
                <div class="hidden lg:flex items-center gap-3.5">
                    <button type="button" onclick="openSearchModal()" class="w-9 h-9 rounded-full flex items-center justify-center text-gray-800 hover:text-black hover:bg-black/5 transition-colors" title="Search">
                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <button type="button" onclick="openQuoteModal()" class="bg-[#1b1e23] hover:bg-black text-white text-[13px] font-bold px-6 py-2.5 rounded-full transition-all duration-200 shadow-md hover:scale-[1.02] active:scale-[0.98]">
                        Get a Quote
                    </button>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center gap-1.5 lg:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="p-2 rounded-lg text-gray-900 hover:bg-gray-100 transition-colors">
                        <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-b border-gray-200 px-6 py-4 shadow-lg">
            <div class="flex flex-col gap-3 text-sm font-semibold text-gray-900">
                <a href="{{ route('home') }}" class="py-1.5 border-b border-gray-100">Home</a>
                <a href="{{ route('windows.index') }}" class="py-1.5 border-b border-gray-100 text-sky-600 font-bold">DOZO Windows</a>
                <a href="{{ route('products.index') }}" class="py-1.5 border-b border-gray-100">DOZO Products & Façades</a>
                <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="py-1.5 border-b border-gray-100">Download Catalogue</a>
                <div class="pt-2">
                    <button type="button" onclick="toggleMobileMenu(); openQuoteModal();" class="w-full bg-[#1b1e23] text-white py-3 rounded-xl font-bold text-center text-sm shadow-md">
                        Get a Quote &rarr;
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- BREADCRUMB & HERO HEADER -->
    <section class="bg-gradient-to-b from-slate-50 via-white to-transparent py-10 sm:py-14 border-b border-gray-100">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center gap-2 text-xs font-semibold text-gray-500 mb-5">
                <a href="{{ route('home') }}" class="hover:text-black transition-colors">Home</a>
                <span class="text-gray-300">/</span>
                <a href="{{ route('windows.index') }}" class="{{ empty($selectedCategory) ? 'text-sky-600 font-bold' : 'hover:text-black transition-colors' }}">DOZO Windows</a>
                @if(!empty($selectedCategory))
                    <span class="text-gray-300">/</span>
                    <span class="text-sky-600 font-bold">{{ $selectedCategory->name }}</span>
                @endif
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider mb-3 border border-sky-100">
                        <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                        <span>Architectural Window Systems</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0f172a] tracking-tight">
                        DOZO Window Systems
                    </h1>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 max-w-2xl leading-relaxed">
                        Acoustically isolated, thermally broken, and weather-tight sliding and casement window systems crafted for luxury residential and commercial architecture.
                    </p>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <div class="px-5 py-3 rounded-2xl bg-white border border-gray-200/90 shadow-2xs">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-gray-400 block">Total Live Systems</span>
                        <span class="text-2xl font-black text-slate-900 font-mono">{{ $products->count() }} Systems</span>
                    </div>
                </div>
            </div>

            <!-- Dynamic Category Filter Pills Bar -->
            <div class="flex items-center gap-2 overflow-x-auto pt-8 pb-1 text-xs">
                <a href="{{ route('windows.index') }}" class="px-4 py-2 rounded-xl {{ empty($selectedCategory) ? 'bg-[#0f172a] text-white' : 'bg-white text-gray-700 hover:bg-gray-50 border border-gray-200' }} font-bold transition-all shrink-0">
                    All Windows ({{ $totalCount }})
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('windows.index', $cat->slug) }}" class="px-4 py-2 rounded-xl {{ !empty($selectedCategory) && $selectedCategory->id === $cat->id ? 'bg-sky-600 text-white shadow-xs' : 'bg-white text-gray-700 hover:bg-gray-50 border border-gray-200' }} font-bold transition-all shrink-0 flex items-center gap-2">
                        <span>{{ $cat->name }}</span>
                        <span class="px-1.5 py-0.2 rounded-md {{ !empty($selectedCategory) && $selectedCategory->id === $cat->id ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-600' }} font-mono text-[10px] font-bold">{{ $cat->products_count }}</span>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    <!-- WINDOW PRODUCTS GRID -->
    <main class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($products as $prod)
                @php
                    $isDark = ($prod->theme === 'dark');
                @endphp
                <div class="group flex flex-col {{ $isDark ? 'bg-[#161e27] border-gray-800 text-white' : 'bg-white border-gray-200/90 text-gray-900' }} border rounded-none overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300"
                     onclick="openProductModal('{{ addslashes($prod->name) }}', '{{ addslashes($prod->short_desc) }}', '{{ addslashes($prod->material_grade) }}', '{{ addslashes($prod->finish_options) }}', '{{ addslashes($prod->acoustic_rating) }}', '{{ addslashes($prod->wind_load) }}')">
                    
                    <div class="aspect-[4/3.2] w-full rounded-none overflow-hidden {{ $isDark ? 'bg-[#0d131a]' : 'bg-[#f0f2f5]' }} relative">
                        <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
                        @if($prod->is_featured)
                            <span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-black/60 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider">
                                Featured
                            </span>
                        @endif
                    </div>

                    <div class="p-4 flex items-center justify-between {{ $isDark ? 'bg-[#161e27] border-gray-800' : 'bg-white border-gray-100' }} border-t rounded-none">
                        <div class="min-w-0 flex-1">
                            <span class="text-sm sm:text-[15px] font-bold truncate block {{ $isDark ? 'text-white' : 'text-[#1a1d20]' }}">{{ $prod->name }}</span>
                            @if($prod->productCategory)
                                <span class="text-[11px] {{ $isDark ? 'text-sky-400' : 'text-sky-600' }} font-medium uppercase tracking-wider truncate block mt-0.5">{{ $prod->productCategory->name }}</span>
                            @endif
                        </div>
                        <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full {{ $isDark ? 'bg-white/10 border border-white/20 text-white' : 'bg-black text-white' }} flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>

                    <!-- Specs Snippet Footer -->
                    <div class="px-4 py-2.5 text-[11px] font-mono border-t {{ $isDark ? 'border-gray-800/80 bg-black/20 text-gray-300' : 'border-gray-50 bg-gray-50/60 text-gray-500' }} flex items-center justify-between">
                        <span>{{ $prod->acoustic_rating ?? 'Acoustic Rated' }}</span>
                        <span>{{ $prod->wind_load ?? 'Engineered' }}</span>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-16 text-center text-gray-400 bg-white border border-dashed border-gray-200 rounded-3xl">
                    <p class="text-base font-bold text-gray-600">No window systems found in this category.</p>
                    <a href="{{ route('windows.index') }}" class="inline-block mt-3 px-4 py-2 rounded-xl bg-slate-900 text-white text-xs font-bold">
                        View All Windows
                    </a>
                </div>
            @endforelse
        </div>
    </main>

    <!-- ARCHITECTURAL CONSULTATION BANNER -->
    <section class="py-12 bg-[#0f172a] text-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 p-8 rounded-3xl bg-white/5 border border-white/10">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-sky-400 block mb-1">Custom Engineering</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Need Custom Window Profiles or Structural Sizing?</h3>
                    <p class="text-xs sm:text-sm text-gray-300 mt-1 max-w-xl">DOZO specializes in tailored architectural extrusions, custom acoustic glass units, and large-span sliding patio systems.</p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button type="button" onclick="openQuoteModal()" class="px-6 py-3 rounded-full bg-sky-600 hover:bg-sky-500 text-white text-xs sm:text-sm font-bold shadow-lg transition-all">
                        Request Engineering Quote
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL FOOTER -->
    <footer class="bg-[#1a1d20] text-white pt-12 pb-8 border-t border-gray-800">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pb-8 border-b border-gray-800 text-xs text-gray-400">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="DOZO" class="h-8 w-auto brightness-0 invert">
                    <span>&copy; {{ date('Y') }} DOZO Building Envelope Solutions. All rights reserved.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    <a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">DOZO Windows</a>
                    <a href="{{ route('products.index') }}" class="hover:text-white transition-colors">DOZO Products</a>
                    <a href="{{ route('admin.login') }}" class="hover:text-white transition-colors">Admin CMS</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE MODAL: PRODUCT DETAIL -->
    <div id="productModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-gray-100 relative">
            <button type="button" onclick="closeProductModal()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            
            <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">Specification & Overview</div>
            <h3 id="modalProductTitle" class="text-2xl font-extrabold text-gray-900 mb-2">Product Title</h3>
            <p id="modalProductDesc" class="text-sm text-gray-600 leading-relaxed mb-5">Product details description.</p>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 mb-5 space-y-2">
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Material Grade:</span>
                    <span id="modalProductMaterial" class="font-semibold text-gray-800">Architectural T6 Aluminum</span>
                </div>
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Finish Options:</span>
                    <span id="modalProductFinish" class="font-semibold text-gray-800">PVDF Coating / Anodized</span>
                </div>
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Acoustic Rating:</span>
                    <span id="modalProductAcoustic" class="font-semibold text-gray-800">Up to 42 dB Isolation</span>
                </div>
                <div class="flex justify-between text-xs py-1">
                    <span class="text-gray-500">Wind Load:</span>
                    <span id="modalProductWind" class="font-semibold text-gray-800">Engineered to 3.5 kPa</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="button" onclick="closeProductModal(); openQuoteModal();" class="flex-1 bg-[#1b1e23] hover:bg-black text-white font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center">
                    Get Quote
                </button>
                <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="flex-1 border border-gray-300 hover:bg-gray-50 text-gray-800 font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center">
                    Download Specs
                </a>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: GET A QUOTE -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-gray-100 relative">
            <button type="button" onclick="closeQuoteModal()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">Architectural Inquiries</div>
            <h3 class="text-2xl font-extrabold text-gray-900 mb-2">Request Specification & Quote</h3>
            <p class="text-xs text-gray-500 mb-6">Submit your project details for DOZO window systems pricing.</p>

            <form id="publicQuoteForm" onsubmit="handleQuoteSubmit(event)" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name *</label>
                        <input type="text" name="name" required placeholder="e.g. Rahul Sharma" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Phone Number *</label>
                        <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Work Email *</label>
                    <input type="email" name="email" required placeholder="name@company.com" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Project Brief / Quantities</label>
                    <textarea name="message" rows="3" placeholder="Tell us about the window dimensions, glass type, or architectural scope..." class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>
                <button id="quoteSubmitBtn" type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-3 rounded-xl transition-all shadow-md text-sm">
                    Submit Inquiry &rarr;
                </button>
            </form>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: SEARCH -->
    <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-start justify-center p-4 pt-20">
        <div class="bg-white rounded-2xl max-w-lg w-full p-5 shadow-2xl border border-gray-100 relative">
            <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input id="searchInput" type="text" placeholder="Search window systems..." class="w-full text-sm focus:outline-none text-gray-800 placeholder-gray-400">
                <button type="button" onclick="closeSearchModal()" class="text-xs font-semibold text-gray-500 hover:text-black bg-gray-100 px-2 py-1 rounded-md">ESC</button>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }

        function openQuoteModal() {
            document.getElementById('quoteModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeQuoteModal() {
            document.getElementById('quoteModal').classList.add('hidden');
            document.body.style.overflow = '';
        }

        function handleQuoteSubmit(e) {
            e.preventDefault();
            const form = document.getElementById('publicQuoteForm');
            const submitBtn = document.getElementById('quoteSubmitBtn');
            submitBtn.disabled = true;
            submitBtn.innerText = 'Submitting...';

            const formData = new FormData(form);

            fetch('/quotes', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')?.value || '',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                alert(data.message || 'Thank you! Your quote request has been received.');
                form.reset();
                closeQuoteModal();
            })
            .catch(err => {
                console.error(err);
                alert('Thank you! Your quote request has been received.');
                closeQuoteModal();
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Submit Inquiry &rarr;';
            });
        }

        function openProductModal(title, desc, material, finish, acoustic, wind) {
            document.getElementById('modalProductTitle').innerText = title || 'Product Specification';
            document.getElementById('modalProductDesc').innerText = desc || '';
            document.getElementById('modalProductMaterial').innerText = material || 'Architectural T6 Aluminum';
            document.getElementById('modalProductFinish').innerText = finish || 'PVDF Coating / Anodized';
            document.getElementById('modalProductAcoustic').innerText = acoustic || 'Up to 42 dB Isolation';
            document.getElementById('modalProductWind').innerText = wind || 'Engineered to 3.5 kPa';
            document.getElementById('productModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeProductModal() {
            document.getElementById('productModal').classList.add('hidden');
            document.body.style.overflow = '';
        }

        function openSearchModal() {
            document.getElementById('searchModal').classList.remove('hidden');
            document.getElementById('searchInput').focus();
        }
        function closeSearchModal() {
            document.getElementById('searchModal').classList.add('hidden');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeProductModal();
                closeSearchModal();
            }
        });
    </script>
</body>
</html>
