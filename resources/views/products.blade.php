<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary SEO Metadata -->
    <title>DOZO Architectural Products — Façade Systems, Windows & Building Envelopes</title>
    <meta name="title" content="DOZO Architectural Products — Façade Systems, Windows & Building Envelopes">
    <meta name="description" content="Explore DOZO's precision architectural catalogue: 6063-T6 aluminum unitized curtain walls, acoustic casement & sliding windows, DURACOAT powder-coated cladding, and insulated glass systems (4mm–24mm). Wind tested to 3.0 kPa.">
    <meta name="keywords" content="DOZO architectural products, aluminum facade catalog, unitized curtain wall systems, high performance windows, 6063-T6 aluminum alloy, 3.0 kPa wind load, DURACOAT powder coating, acoustic glass 45dB, sub frame window system, AMC building envelope">
    <meta name="author" content="DOZO Windows & Façades">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DOZO Architectural Products — Façade Systems, Windows & Building Envelopes">
    <meta property="og:description" content="Explore DOZO's precision architectural catalogue: 6063-T6 aluminum unitized curtain walls, acoustic windows, DURACOAT powder coating, and 4mm–24mm glass fitting. Tested to 3.0 kPa wind load.">
    <meta property="og:image" content="{{ url('/logo.png') }}">
    <meta property="og:site_name" content="DOZO Windows & Façade">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="DOZO Architectural Products — Façade Systems & High-Rise Windows">
    <meta property="twitter:description" content="Precision engineered building envelope systems: 6063-T6 aluminum, 3.0 kPa wind resistance, 0.30 kPa water tightness, 20-45 dB acoustic cut-off.">
    <meta property="twitter:image" content="{{ url('/logo.png') }}">

    <link rel="icon" type="image/png" href="/favicon.png?v=2">
    <link rel="shortcut icon" type="image/png" href="/favicon.png?v=2">
    <link rel="apple-touch-icon" href="/favicon.png?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Structured Data (JSON-LD) for Products Collection & OfferCatalog -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@graph' => [
        [
          '@type' => 'CollectionPage',
          '@id' => url()->current() . '#webpage',
          'url' => url()->current(),
          'name' => 'DOZO Architectural Products — Façade Systems & Windows Catalogue',
          'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => url('/') . '#website',
            'name' => 'DOZO Windows & Façades',
            'url' => url('/')
          ],
          'description' => 'Comprehensive catalogue of DOZO architectural building envelope solutions, high performance windows, unitized curtain walls, and exterior cladding.',
          'breadcrumb' => [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
              [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/')
              ],
              [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Products',
                'item' => url()->current()
              ]
            ]
          ]
        ],
        [
          '@type' => 'OfferCatalog',
          'name' => 'DOZO Architectural Building Envelope Solutions',
          'itemListElement' => [
            [
              '@type' => 'OfferCatalog',
              'name' => 'High-Performance Window Systems',
              'itemListElement' => [
                [
                  '@type' => 'Product',
                  'name' => 'DOZO Slimline Sliding & Casement Windows',
                  'description' => 'Factory fabricated aluminum windows tested to 3.0 kPa wind load and 0.30 kPa water tightness. Compatible with 4mm to 24mm glass.',
                  'material' => '6063-T6 Architectural Grade Aluminum Alloy',
                  'warranty' => '25 Years on Aluminum, 15 Years on Powder Coating, 5 Years on Hardware'
                ]
              ]
            ],
            [
              '@type' => 'OfferCatalog',
              'name' => 'Architectural Façade & Cladding Systems',
              'itemListElement' => [
                [
                  '@type' => 'Product',
                  'name' => 'DOZO Unitized Curtain Wall & Perforated Metal Panels',
                  'description' => 'Engineered facade solutions with DURACOAT 65–80μm powder coating, sub-frame amended integration, and thermal insulation.',
                  'material' => '6063-T6 Aluminum with Super Durable Architectural Coating'
                ]
              ]
            ]
          ]
        ],
        [
          '@type' => 'FAQPage',
          'mainEntity' => [
            [
              '@type' => 'Question',
              'name' => 'What glass thicknesses and configurations are supported by DOZO products?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO products accommodate glass thicknesses ranging from 4mm up to 24mm, supporting Single Glazing Units (SGU), Laminated DGU with PVB Interlayer, and Insulated Double Glazing Units (DGU) with Low-E coatings for optimal acoustic (20-45 dB noise cut-off) and thermal performance (10-12°C heat reduction).'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What are the structural performance ratings of DOZO systems?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO products are wind pressure tested up to 3.0 kPa (3000 Pa) and water penetration tested up to 0.30 kPa (300 Pa), manufactured with architectural grade 6063-T6 aluminum alloy possessing tensile strength of 110-120 MPa and yield strength of 160-240 MPa.'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What warranties and maintenance services are provided?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO provides a 25-year warranty on aluminum materials, 15-year warranty on DURACOAT powder coating, and 5-year warranty on all moving hardware, supported by comprehensive Annual Maintenance Contracts (AMC).'
              ]
            ]
          ]
        ]
      ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

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
                    <a href="{{ route('facade.index') }}" class="hover:text-sky-600 transition-colors">Façade</a>
                    <a href="{{ route('windows.index') }}" class="hover:text-sky-600 transition-colors">Windows</a>
                    <a href="{{ route('products.index') }}" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Products</a>
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
                <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">Home</a>
                <a href="{{ route('facade.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Façades</a>
                <a href="{{ route('windows.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Windows</a>
                <a href="{{ route('products.index') }}" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">DOZO Products</a>
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
                <a href="{{ route('products.index') }}" class="{{ empty($selectedCategory) ? 'text-sky-600 font-bold' : 'hover:text-black transition-colors' }}">DOZO Products</a>
                @if(!empty($selectedCategory))
                    <span class="text-gray-300">/</span>
                    <span class="text-sky-600 font-bold">{{ $selectedCategory->name }}</span>
                @endif
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0f172a] tracking-tight">
                        DOZO Perforation Products
                    </h1>
                </div>
            </div>

        </div>
    </section>

    <!-- PRODUCTS SHOWCASE GRID (ORIGINAL CLEAN STYLE) -->
    <main class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($products as $prod)
                <a href="{{ route('product.details', $prod->slug ?: $prod->id) }}" class="group flex flex-col bg-white rounded-none overflow-hidden">
                    
                    <div class="aspect-[16/11] w-full rounded-none overflow-hidden bg-[#f0f2f5] relative">
                        <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
                        @if($prod->is_featured)
                            <span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-black/60 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider">
                                Featured
                            </span>
                        @endif
                    </div>

                    <div class="pt-3 pb-1">
                        <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">{{ $prod->name }}</h4>
                        <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">{{ $prod->productCategory->name ?? $prod->category ?? 'Architectural Envelope System' }}</p>
                    </div>
                </a>
            @empty
                <div class="col-span-full py-16 text-center text-gray-400 bg-white border border-dashed border-gray-200 rounded-3xl">
                    <p class="text-base font-bold text-gray-600">No products found in this category.</p>
                    <a href="{{ route('products.index') }}" class="inline-block mt-3 px-4 py-2 rounded-xl bg-slate-900 text-white text-xs font-bold">
                        View All Products
                    </a>
                </div>
            @endforelse
        </div>
    </main>



    <!-- FOOTER / CALL TO ACTION BANNER (DYNAMIC CMS & RICH SEO) -->
    @include('partials.footer')

    <!-- INTERACTIVE MODAL: GET A QUOTE -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeQuoteModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeQuoteModal()">
            <div class="bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full p-5 sm:p-7 md:p-8 shadow-2xl border border-gray-100 relative my-auto max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeQuoteModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-1.5 sm:p-2 rounded-full transition-colors z-10" aria-label="Close modal">
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
                            <option value="DOZO Façade Systems">DOZO Façade Systems</option>
                            <option value="DOZO Windows">DOZO Windows</option>
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

                <button id="quoteSubmitBtn" type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-2.5 sm:py-3 rounded-xl transition-all shadow-md text-sm cursor-pointer">
                    Submit Inquiry &rarr;
                </button>
            </form>
        </div>
    </div>
    </div>

    <!-- INTERACTIVE MODAL: PRODUCT DETAIL -->
    <div id="productModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeProductModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeProductModal()">
            <div class="bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full p-5 sm:p-7 md:p-8 shadow-2xl border border-gray-100 relative my-auto max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeProductModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-1.5 sm:p-2 rounded-full transition-colors z-10" aria-label="Close modal">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                
                <div class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-indigo-600 mb-0.5 sm:mb-1">Specification &amp; Engineering Specs</div>
                <h3 id="modalProductTitle" class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-2 leading-tight">Product Title</h3>
                <p id="modalProductDesc" class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-4 sm:mb-5">Product details description.</p>

                <div class="bg-gray-50 rounded-2xl p-3.5 sm:p-4 border border-gray-100 mb-4 sm:mb-5 space-y-2">
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
                        <span id="modalProductAcoustic" class="font-semibold text-gray-800">Up to 45 dB Isolation</span>
                    </div>
                    <div class="flex justify-between text-xs py-1">
                        <span class="text-gray-500">Wind Load:</span>
                        <span id="modalProductWind" class="font-semibold text-gray-800">Engineered to 5.0 kPa</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button type="button" onclick="closeProductModal(); openQuoteModal();" class="flex-1 bg-[#1b1e23] hover:bg-black text-white font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center cursor-pointer">
                        Get Quote
                    </button>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="flex-1 border border-gray-300 hover:bg-gray-50 text-gray-800 font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center">
                        Download Specs
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: SEARCH -->
    <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 pt-12 sm:pt-20" onclick="if(event.target === this) closeSearchModal()">
        <div class="max-w-lg mx-auto w-full">
            <div class="bg-white rounded-2xl w-full p-4 sm:p-5 shadow-2xl border border-gray-100 relative">
                <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input id="searchInput" type="text" placeholder="Search façade & product systems..." class="w-full text-sm focus:outline-none text-gray-800 placeholder-gray-400">
                    <button type="button" onclick="closeSearchModal()" class="text-xs font-semibold text-gray-500 hover:text-black bg-gray-100 px-2 py-1 rounded-md">ESC</button>
                </div>
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
            document.getElementById('modalProductAcoustic').innerText = acoustic || 'Up to 45 dB Isolation';
            document.getElementById('modalProductWind').innerText = wind || 'Engineered to 5.0 kPa';
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
