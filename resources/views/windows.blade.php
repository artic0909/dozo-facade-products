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
            background-color: #fbfbfb;
            color: #1a1a1a;
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white flex flex-col min-h-screen">

    <!-- TOP NAVIGATION BAR (EXACT HOMEPAGE STYLE) -->
    <header class="relative z-30 w-full shrink-0 pt-3 sm:pt-4 pb-2 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-2xs">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand Logo (Enlarged) -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group shrink-0">
                    <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 md:h-14 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.02]">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7 xl:gap-9 text-[15px] xl:text-[16px] font-semibold text-[#1a1d20]">
                    <a href="{{ route('home') }}" class="hover:text-sky-600 transition-colors">Home</a>
                    <a href="{{ route('windows.index') }}" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Windows</a>
                    <a href="{{ route('facade.index') }}" class="hover:text-sky-600 transition-colors">Façade</a>
                    <a href="{{ route('products.index') }}" class="hover:text-sky-600 transition-colors">Products</a>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="hover:text-sky-600 transition-colors flex items-center gap-1">
                        Catalogue
                    </a>
                </nav>

                <!-- Action / Search Buttons -->
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
                    <button type="button" onclick="toggleMobileMenu()" class="p-2 rounded-lg text-gray-900 hover:bg-white/60 transition-colors focus:outline-none" aria-label="Toggle navigation menu">
                        <svg id="menuIcon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="closeIcon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-b border-gray-200 px-6 py-4 shadow-lg">
            <div class="flex flex-col gap-3.5 text-[15px] font-semibold text-gray-900">
                <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">Home</a>
                <a href="{{ route('windows.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Windows</a>
                <a href="{{ route('facade.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Façades</a>
                <a href="{{ route('products.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Products</a>
                <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="py-1 border-b border-gray-100 flex items-center justify-between hover:text-sky-600">
                    <span>Downloads (Catalogue)</span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </a>
                
                <div class="pt-2 flex flex-col gap-2">
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
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0f172a] tracking-tight">
                        DOZO Windows
                    </h1>
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

    <!-- FULL 4-COLUMN RICH DARK FOOTER (EXACT HOMEPAGE STYLE) -->
    <!-- FOOTER / CALL TO ACTION BANNER (EXACT WELCOME PAGE STYLE) -->
    <!-- Desktop Footer -->
    <footer id="contact" class="hidden sm:block bg-[#161a1e] text-white pt-12 pb-10 mt-10 border-t border-gray-800">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Top CTA Banner Container -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-6 pb-10 border-b border-gray-800/90">
                <div class="max-w-2xl text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 text-sky-400 text-xs font-bold uppercase tracking-widest mb-1.5">
                        <span>●</span> Engineering Architectural Excellence
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white leading-tight">
                        Let's Build Something Exceptional Together
                    </h3>
                    <p class="text-sm text-gray-400 mt-1.5">
                        Connect with our building envelope specialists for custom facade engineering, technical specs, and project estimation.
                    </p>
                </div>

                <div class="shrink-0 flex items-center gap-3.5">
                    <button type="button" onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-[#161a1e] text-sm font-bold px-7 py-3 rounded-full transition-all duration-200 shadow-lg hover:shadow-xl hover:scale-105 flex items-center gap-2 cursor-pointer">
                        <span>Request a Quote</span>
                        <span class="text-base">&rarr;</span>
                    </button>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="border border-gray-700 hover:border-gray-500 bg-white/5 hover:bg-white/10 text-white text-sm font-semibold px-6 py-3 rounded-full transition-all duration-200 flex items-center gap-2">
                        <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        <span>Technical Catalogue</span>
                    </a>
                </div>
            </div>

            <!-- Main Multi-Column Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10 py-12 border-b border-gray-800/80">
                
                <!-- Col 1: Brand Info & Socials (Span 4) -->
                <div class="lg:col-span-4 flex flex-col justify-between">
                    <div>
                        <!-- Footer Logo in White Background Container -->
                        <a href="{{ route('home') }}" class="inline-flex items-center bg-white px-4 py-2 rounded-md mb-5 shadow-sm hover:opacity-95 transition-opacity">
                            <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 md:h-14 w-auto object-contain">
                        </a>
                        <p class="text-xs sm:text-[13px] text-gray-400 leading-relaxed mb-6 max-w-sm">
                            DOZO is India's premier manufacturer and contractor of high-performance architectural aluminum windows, unitized curtain wall facades, and bespoke metallic building envelopes.
                        </p>
                    </div>

                    <!-- Social Media Links -->
                    <div>
                        <div class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">Follow DOZO</div>
                        <div class="flex items-center gap-3">
                            <!-- LinkedIn -->
                            <a href="https://linkedin.com" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#0077b5] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="LinkedIn">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <!-- Instagram -->
                            <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#e1306c] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="Instagram">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="https://youtube.com" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#ff0000] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="YouTube">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="https://facebook.com" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#1877f2] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.595 0 9 1.582 9 4.615V8z"/>
                                </svg>
                            </a>
                            <!-- X (Twitter) -->
                            <a href="https://twitter.com" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-black text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="X (Twitter)">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <!-- WhatsApp Direct -->
                            <a href="https://wa.me/919876543210" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#25d366] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="WhatsApp">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Windows Solutions (Span 3) -->
                <div class="lg:col-span-3">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        DOZO Windows
                    </h4>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] text-gray-400">
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Sliding Window Systems</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Acoustic Casement Windows</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Fixed Picture Windows</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Tilt & Turn German Systems</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Minimalist Slimline Sliding Doors</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Thermal Break Energy Glazing</a></li>
                        <li><a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">Acoustic Sound Isolation Glass</a></li>
                    </ul>
                </div>

                <!-- Col 3: Façade Engineering (Span 3) -->
                <div class="lg:col-span-3">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Façade Systems
                    </h4>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] text-gray-400">
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Unitized Curtain Walls</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Semi-Unitized Structural Glazing</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Solid Aluminum & ACP Cladding</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">CNC Perforated Façades</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Aerodynamic Louvers & Fins</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Spider & Point-Fixed Glazing</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Custom Architectural Metalwork</a></li>
                    </ul>
                </div>

                <!-- Col 4: Quick Links & Contact Info (Span 2) -->
                <div class="lg:col-span-2">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Company & Info
                    </h4>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] text-gray-400 mb-6">
                        <li><a href="{{ route('home') }}#about" class="hover:text-white transition-colors">About DOZO</a></li>
                        <li><a href="{{ route('home') }}#projects" class="hover:text-white transition-colors">Featured Projects</a></li>
                        <li><a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="hover:text-white transition-colors flex items-center gap-1">Downloads (PDF)</a></li>
                        <li><a href="javascript:void(0)" onclick="openQuoteModal()" class="hover:text-white transition-colors">Get Consultation</a></li>
                        <li><a href="{{ route('home') }}#about" class="hover:text-white transition-colors">Quality Standards</a></li>
                    </ul>

                    <div class="text-xs text-gray-400 space-y-1.5 pt-2 border-t border-gray-800">
                        <div class="font-bold text-gray-200">Head Office</div>
                        <div>+91 98765 43210</div>
                        <div class="text-[11px] text-gray-500">info@dozofacades.com</div>
                        <div class="text-[11px] text-gray-500">Pan India Presence</div>
                    </div>
                </div>

            </div>

            <!-- Bottom Sub-Footer Bar -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} DOZO Façade Products Pvt. Ltd. All rights reserved. | ISO 9001:2015 Certified</p>
                <div class="flex items-center gap-6 text-gray-400">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="hover:text-white transition-colors">Technical Specs</a>
                    <a href="javascript:window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-white transition-colors">Back to Top &uarr;</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile Footer -->
    <footer class="sm:hidden bg-[#161a1e] text-white p-6 mt-6 border-t border-gray-800">
        <!-- Mobile Footer Logo in White Background Container -->
        <div class="mb-4 text-left">
            <a href="{{ route('home') }}" class="inline-flex items-center bg-white px-3.5 py-1.5 rounded-md mb-3 shadow-sm">
                <img src="/logo.png" alt="DOZO Windows & Facades" class="h-9 w-auto object-contain">
            </a>
            <h3 class="text-base font-bold text-white leading-snug">Precision Building Envelope Solutions</h3>
            <p class="text-xs text-gray-400 mt-1">High-performance windows and architectural facade systems across India.</p>
        </div>

        <!-- Social Media Icons Row for Mobile -->
        <div class="flex items-center gap-3 py-3 border-y border-gray-800 my-4">
            <a href="https://linkedin.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="LinkedIn">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="Instagram">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="https://youtube.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="YouTube">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <a href="https://wa.me/919876543210" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="WhatsApp">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            </a>
        </div>

        <!-- Quick Links in Mobile -->
        <div class="grid grid-cols-2 gap-2 text-xs text-gray-400 mb-5">
            <a href="{{ route('windows.index') }}" class="py-1">Windows Division</a>
            <a href="{{ route('products.index') }}" class="py-1">Façade Engineering</a>
            <a href="{{ route('products.index') }}" class="py-1">Featured Products</a>
            <a href="{{ route('home') }}#projects" class="py-1">Projects Portfolio</a>
            <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="py-1">Technical Catalogue</a>
            <a href="{{ route('home') }}#about" class="py-1">About Company</a>
        </div>

        <div class="flex flex-col gap-2.5">
            <button type="button" onclick="openQuoteModal()" class="w-full bg-white text-[#161a1e] text-xs font-bold py-3.5 rounded-xl text-center flex items-center justify-center gap-1.5 shadow-md">
                <span>Request a Quote</span>
                <span>&rarr;</span>
            </button>
            <a href="tel:+919876543210" class="w-full border border-gray-700 bg-white/5 text-gray-200 text-xs font-semibold py-3 rounded-xl text-center flex items-center justify-center gap-2">
                <svg class="w-3.5 h-3.5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Call Us (+91 98765 43210)</span>
            </a>
        </div>

        <div class="text-center text-[11px] text-gray-500 mt-6">
            &copy; {{ date('Y') }} DOZO. All rights reserved.
        </div>
    </footer>

    <!-- INTERACTIVE MODAL: GET A QUOTE -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-gray-100 relative">
            <button type="button" onclick="closeQuoteModal()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            
            <div class="mb-5">
                <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">Inquiry Form</div>
                <h3 class="text-2xl font-extrabold text-gray-900">Request a Consultation & Quote</h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Fill out the details below and our facade engineers will reach out to you within 24 hours.</p>
            </div>

            <form id="publicQuoteForm" onsubmit="handleQuoteSubmit(event)" class="space-y-3.5">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name" required placeholder="e.g. Rahul Sharma" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" required placeholder="name@company.com" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Product Division</label>
                        <select name="product_interest" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="DOZO Windows">DOZO Windows</option>
                            <option value="DOZO Façade Systems">DOZO Façade Systems</option>
                            <option value="Both Windows & Façade">Both Windows & Façade</option>
                            <option value="Perforated Panels & Cladding">Perforated Panels & Cladding</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Project Location</label>
                        <input type="text" name="city" placeholder="e.g. Mumbai / Bangalore" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Project Brief</label>
                    <textarea name="message" rows="3" placeholder="Tell us about the project scale, glass type, or architectural specs..." class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <button id="quoteSubmitBtn" type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-3 rounded-xl transition-all shadow-md text-sm">
                    Submit Inquiry &rarr;
                </button>
            </form>
        </div>
    </div>

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
