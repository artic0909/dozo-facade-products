<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOZO Windows — Premium Engineered Aluminum Window Systems | 3.0 kPa Wind & 45dB Acoustic Tested</title>
    <meta name="description" content="Explore DOZO high-performance factory-made aluminum sliding & casement windows. Wind pressure tested to 3.0 kPa, 0.30 kPa water tightness, 20-45 dB acoustic cutoff, 10-12°C thermal heat reduction. 25-yr aluminium & 15-yr DURACOAT warranty. AMC available.">
    <meta name="keywords" content="DOZO windows, aluminum sliding windows, casement windows, acoustic window systems, thermal break windows, 6063-T6 aluminum, sub-frame window system, leak proof windows, double glazed DGU, laminated glass windows, architectural fenestration India, window AMC">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="product.group">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DOZO Windows — Premium Engineered Aluminum Window Systems">
    <meta property="og:description" content="Wind tested up to 3.0 kPa, 0.30 kPa water tested, 20-45 dB noise cut-off, 10-12°C heat reduction. 25-year aluminium warranty with sub-frame amended system.">
    <meta property="og:image" content="{{ url('/images/solution_windows.jpg') }}">
    <meta property="og:site_name" content="DOZO Windows & Façades">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DOZO Windows — Precision Fenestration & Architectural Glass">
    <meta name="twitter:description" content="Factory-made automatic sliding & casement windows engineered for luxury living with 3.0 kPa structural capacity.">
    <meta name="twitter:image" content="{{ url('/images/solution_windows.jpg') }}">

    <!-- JSON-LD Structured Data Schema -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@graph' => [
        [
          '@type' => 'Organization',
          '@id' => url('/') . '/#organization',
          'name' => 'DOZO Windows & Façades',
          'url' => url('/'),
          'logo' => url('/logo.png'),
          'description' => 'Premier manufacturer and engineering contractor of architectural aluminum windows and unitized facades in India.',
          'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+91-98765-43210',
            'contactType' => 'sales',
            'areaServed' => 'IN',
            'availableLanguage' => ['English', 'Hindi']
          ]
        ],
        [
          '@type' => 'Product',
          'name' => 'DOZO Engineered Aluminum Window Systems',
          'image' => url('/images/solution_windows.jpg'),
          'description' => 'High-performance factory-made aluminum window systems tested for 3.0 kPa wind pressure, 0.30 kPa water tightness, and up to 45 dB acoustic insulation with 4mm-24mm glass configurations.',
          'brand' => [
            '@type' => 'Brand',
            'name' => 'DOZO'
          ],
          'material' => '6063-T6 Architectural Grade Aluminum Alloy',
          'offers' => [
            '@type' => 'AggregateOffer',
            'priceCurrency' => 'INR',
            'availability' => 'https://schema.org/InStock'
          ],
          'additionalProperty' => [
            ['@type' => 'PropertyValue', 'name' => 'Wind Pressure Resistance', 'value' => '3.0 kPa (3000 Pa)'],
            ['@type' => 'PropertyValue', 'name' => 'Water Penetration Resistance', 'value' => '0.30 kPa (300 Pa)'],
            ['@type' => 'PropertyValue', 'name' => 'Acoustic Cutoff (NRC)', 'value' => '20 - 45 dB'],
            ['@type' => 'PropertyValue', 'name' => 'Thermal Heat Reduction', 'value' => '10 - 12°C'],
            ['@type' => 'PropertyValue', 'name' => 'Aluminium Warranty', 'value' => '25 Years'],
            ['@type' => 'PropertyValue', 'name' => 'Powder Coating Warranty', 'value' => '15 Years DURACOAT (65-80 Microns)'],
            ['@type' => 'PropertyValue', 'name' => 'Hardware Warranty', 'value' => '5 Years'],
            ['@type' => 'PropertyValue', 'name' => 'Sub-Frame System', 'value' => 'Included (Pre-plaster amended system)'],
            ['@type' => 'PropertyValue', 'name' => 'Glass Compatibility', 'value' => '4mm to 24mm (SGU, Laminated DGU, Insulated DGU)']
          ]
        ],
        [
          '@type' => 'FAQPage',
          'mainEntity' => [
            [
              '@type' => 'Question',
              'name' => 'What are the core technical performance ratings of DOZO Windows?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO Windows are tested for AIR (wind pressure tested up to 3.0 kPa / 3000 Pa), WATER (water penetration tested to 0.30 kPa / 300 Pa for lifetime leak proofing), SOUND (20-45 dB noise cutoff depending on glazing), and THERMAL (10-12°C heat reduction with foam-filled profiles).'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What is the DOZO Sub-Frame Amended System?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'The DOZO Sub-Frame is installed before masonry and plaster work. It provides precise vertical and square alignment, protects main window profiles during civil construction, ensures a lifetime leak-proof seal with silicone/PU sealants, and enables seamless future maintenance.'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What warranties and maintenance services are provided with DOZO Windows?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO provides a 25-Year warranty on 6063-T6 Aluminium material, a 15-Year warranty on DURACOAT Super Durable Powder Coating (65-80 Microns), a 5-Year warranty on hardware, and comprehensive AMC (Annual Maintenance Contracts).'
              ]
            ]
          ]
        ]
      ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="icon" type="image/png" href="/favicon.png?v=2">
    <link rel="shortcut icon" type="image/png" href="/favicon.png?v=2">
    <link rel="apple-touch-icon" href="/favicon.png?v=2">
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
                    <a href="{{ route('facade.index') }}" class="hover:text-sky-600 transition-colors">Façade</a>
                    <a href="{{ route('windows.index') }}" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Windows</a>
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
                <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">Home</a>
                <a href="{{ route('facade.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Façades</a>
                <a href="{{ route('windows.index') }}" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">DOZO Windows</a>
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

    <!-- TECHNICAL PERFORMANCE & ARCHITECTURAL ENGINEERING (BASIC & ADVANCED REQUIREMENTS FULFILLED) -->
    <section class="bg-white py-16 sm:py-20 border-t border-gray-200/80">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-12">
                <div class="inline-flex items-center gap-2 text-sky-600 text-xs font-bold uppercase tracking-wider mb-2">
                    <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                    <span>Engineered For Luxury Living & Structural Endurance</span>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#0f172a] tracking-tight leading-tight">
                    Basic & High-Performance Requirements Fulfilled by DOZO Windows
                </h2>
                <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                    In today's architectural landscape, windows define a building's identity, energy efficiency, acoustic comfort, and long-term asset value. Fully factory-made with automatic precision machinery and tested raw materials.
                </p>
            </div>

            <!-- 4 Pillar Core Performance Matrix: AIR / WATER / SOUND / THERMAL -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                
                <!-- AIR -->
                <div class="bg-slate-50 border border-slate-200/90 rounded-2xl p-6 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 text-sky-600 flex items-center justify-center font-black text-xl mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        AIR
                    </div>
                    <div class="text-2xl sm:text-3xl font-black text-[#0f172a] mb-1">3.0 kPa</div>
                    <div class="text-xs font-bold text-sky-700 uppercase tracking-wider mb-2">Wind Pressure Tested</div>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Engineered to withstand extreme cyclic wind pressures up to 3000 Pa, ideal for high-rise towers and coastal luxury residences.
                    </p>
                </div>

                <!-- WATER -->
                <div class="bg-slate-50 border border-slate-200/90 rounded-2xl p-6 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-600 flex items-center justify-center font-black text-xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        WATER
                    </div>
                    <div class="text-2xl sm:text-3xl font-black text-[#0f172a] mb-1">0.30 kPa</div>
                    <div class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-2">Water Tested (300 Pa)</div>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        100% leak-proof multi-chamber design with continuous EPDM gaskets and controlled drainage paths to prevent rainwater ingress.
                    </p>
                </div>

                <!-- SOUND -->
                <div class="bg-slate-50 border border-slate-200/90 rounded-2xl p-6 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center font-black text-xl mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        SOUND
                    </div>
                    <div class="text-2xl sm:text-3xl font-black text-[#0f172a] mb-1">20–45 dB</div>
                    <div class="text-xs font-bold text-indigo-700 uppercase tracking-wider mb-2">Acoustic Noise Cutoff</div>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Significant acoustic attenuation cuts external ambient traffic and urban noise by up to 75% depending on glass configuration.
                    </p>
                </div>

                <!-- THERMAL -->
                <div class="bg-slate-50 border border-slate-200/90 rounded-2xl p-6 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center font-black text-xl mb-4 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                        THERMAL
                    </div>
                    <div class="text-2xl sm:text-3xl font-black text-[#0f172a] mb-1">10–12°C</div>
                    <div class="text-xs font-bold text-amber-700 uppercase tracking-wider mb-2">Heat Reduction</div>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Foam-filled window profiles and thermal barriers reduce internal convection, lower U-values, and minimize AC load.
                    </p>
                </div>

            </div>

            <!-- MANUFACTURING QUALITY & WARRANTY SHIELD -->
            <div class="bg-gradient-to-br from-[#0f172a] to-[#1e293b] rounded-3xl p-8 sm:p-12 text-white shadow-xl mb-16 relative overflow-hidden">
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-6">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/20 text-sky-400 text-xs font-bold uppercase tracking-wider mb-3">
                            Fabrication Excellence & Confidence
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-3">
                            Quality & Tested Raw Materials with Industry-Leading Warranties
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-300 leading-relaxed mb-6">
                            Every DOZO window is fully factory-made with automatic precision CNC tooling, premium 6063-T6 architectural grade aluminum, and DURACOAT powder coating. Reasonable pricing with full project lifecycle AMC support.
                        </p>
                        <div class="flex flex-wrap items-center gap-3">
                            <button type="button" onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-gray-900 text-xs sm:text-sm font-bold px-6 py-2.5 rounded-full transition-all shadow-md">
                                Request Consultation & Quote &rarr;
                            </button>
                            <span class="text-xs text-sky-300 font-semibold px-3 py-2 rounded-xl bg-white/5 border border-white/10">
                                4mm–24mm Glass Fitting Range
                            </span>
                        </div>
                    </div>

                    <!-- Warranty Highlights Counter Grid -->
                    <div class="lg:col-span-6 grid grid-cols-3 gap-4 text-center">
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10">
                            <div class="text-2xl sm:text-4xl font-black text-sky-400">25</div>
                            <div class="text-[11px] sm:text-xs font-bold text-gray-200 mt-1 uppercase">Years Warranty</div>
                            <div class="text-[10px] text-gray-400 mt-0.5">Aluminium Material</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10">
                            <div class="text-2xl sm:text-4xl font-black text-amber-400">15</div>
                            <div class="text-[11px] sm:text-xs font-bold text-gray-200 mt-1 uppercase">Years Warranty</div>
                            <div class="text-[10px] text-gray-400 mt-0.5">DURACOAT (65-80μm)</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10">
                            <div class="text-2xl sm:text-4xl font-black text-emerald-400">5</div>
                            <div class="text-[11px] sm:text-xs font-bold text-gray-200 mt-1 uppercase">Years Warranty</div>
                            <div class="text-[10px] text-gray-400 mt-0.5">Hardware & Rollers</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DOZO SUB-FRAME AMENDED SYSTEM: 9 ENGINEERING ADVANTAGES -->
            <div class="mb-16">
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Patented Precision Methodology</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] mt-1">
                        DOZO Sub-Frame Amended System
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-500 mt-2">
                        Sub-frame installed before masonry and plaster work. Guarantees lifetime leak proofing, structural stability up to 3.0 kPa, and scratch-free construction.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">1</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Faster Site Installation</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">The sub-frame is fixed before masonry/plaster work. Main window frames install later without disturbing civil finishes.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">2</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Better Alignment & Squareness</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Provides a precise reference frame maintaining verticality and squareness essential for smooth sliding rollers.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">3</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Lifetime Leak-Proof Solution</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Prevents rainwater seepage at the wall-window junction and minimizes water infiltration throughout the building lifecycle.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">4</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Protection During Civil Works</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Main window frames are installed after heavy civil work, preventing cement, paint, or tool damage to finished aluminum profiles.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">5</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Improved Waterproof Sealing</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Creates a controlled perimeter interface allowing airtight sealing with silicone, PU sealants, and waterproof membranes.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">6</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Enhanced 3.0 kPa Structural Load</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Efficiently transfers wind pressure from window sashes to the RCC structure, crucial for high-rise towers.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">7</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Acoustic Perimeter Barrier</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Works alongside EPDM gaskets and wool pile seals to eliminate flanking sound transmission through perimeter gaps.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">8</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Reduced Site Tolerances</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Absorbs dimensional variations in RCC masonry openings to deliver consistent, factory-calibrated window operation.</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:border-sky-500 transition-all shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 font-bold text-sm flex items-center justify-center mb-3">9</div>
                        <h4 class="text-sm font-bold text-gray-900 mb-1">Easy Maintenance & Upgrades</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Window frames can be serviced, reglazed, or replaced while retaining the intact sub-frame, slashing lifecycle costs.</p>
                    </div>

                </div>
            </div>

            <!-- GLASS OPTIONS & GLAZING PERFORMANCE MATRIX -->
            <div class="bg-slate-50 border border-slate-200/90 rounded-3xl p-6 sm:p-10">
                <div class="max-w-2xl mb-8">
                    <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Acoustic & Solar Engineering</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] mt-1">
                        DOZO Glass & Glazing Performance Matrix (4mm–24mm)
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">
                        Customized glazing configurations engineered for daylight harvesting, solar heat gain coefficient (SHGC), and maximum sound insulation.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Single Glazing Unit -->
                    <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-2xs">
                        <div class="text-xs font-bold text-gray-400 uppercase">Option A</div>
                        <h4 class="text-lg font-extrabold text-gray-900 mt-0.5 mb-3">Single Glazing Unit (SGU)</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Visible Light (VLT):</span>
                                <span class="font-bold text-gray-800">87% – 88%</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Noise Reduction (NRC):</span>
                                <span class="font-bold text-gray-800">30% External Cut</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Thermal Heat Cut:</span>
                                <span class="font-bold text-gray-800">15% Reduction</span>
                            </div>
                            <div class="flex justify-between py-1.5">
                                <span class="text-gray-500">Glass Spec:</span>
                                <span class="font-bold text-sky-600">Single Toughened / Low-E</span>
                            </div>
                        </div>
                    </div>

                    <!-- Double Glazing Laminated DGU -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-sky-500 shadow-md relative">
                        <span class="absolute -top-3 right-4 px-2.5 py-0.5 rounded-full bg-sky-600 text-white text-[10px] font-bold uppercase">Popular Choice</span>
                        <div class="text-xs font-bold text-sky-600 uppercase">Option B1</div>
                        <h4 class="text-lg font-extrabold text-gray-900 mt-0.5 mb-3">Laminated DGU (PVB Interlayer)</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Visible Light (VLT):</span>
                                <span class="font-bold text-gray-800">87% – 88%</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Noise Reduction (NRC):</span>
                                <span class="font-bold text-sky-600">50% External Cut</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Thermal Heat Cut:</span>
                                <span class="font-bold text-sky-600">50% Weather Insulation</span>
                            </div>
                            <div class="flex justify-between py-1.5">
                                <span class="text-gray-500">Safety & Security:</span>
                                <span class="font-bold text-emerald-600">Shatterproof PVB Film</span>
                            </div>
                        </div>
                    </div>

                    <!-- Insulated DGU -->
                    <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-2xs">
                        <div class="text-xs font-bold text-indigo-600 uppercase">Option B2</div>
                        <h4 class="text-lg font-extrabold text-gray-900 mt-0.5 mb-3">Insulated DGU (Double Glazed)</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Visible Light (VLT):</span>
                                <span class="font-bold text-gray-800">78% – 80%</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Noise Reduction (NRC):</span>
                                <span class="font-bold text-indigo-600">75% Noise Cutoff (45dB)</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-100">
                                <span class="text-gray-500">Thermal Heat Cut:</span>
                                <span class="font-bold text-indigo-600">40%–50% Reduction</span>
                            </div>
                            <div class="flex justify-between py-1.5">
                                <span class="text-gray-500">Air Gap / Spacer:</span>
                                <span class="font-bold text-gray-800">Argon / Warm Edge Spacer</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- FULL 4-COLUMN RICH DARK FOOTER (EXACT HOMEPAGE STYLE) -->

    <!-- FOOTER / CALL TO ACTION BANNER (DYNAMIC CMS & RICH SEO) -->
    @include('partials.footer')


    <!-- INTERACTIVE MODAL: GET A QUOTE -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeQuoteModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeQuoteModal()">
            <div class="bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full p-5 sm:p-7 md:p-8 shadow-2xl border border-gray-100 relative my-auto max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeQuoteModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-1.5 sm:p-2 rounded-full transition-colors z-10" aria-label="Close modal">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                
                <div class="mb-4 sm:mb-5 pr-6 sm:pr-8">
                    <div class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-sky-600 mb-0.5 sm:mb-1">Inquiry Form</div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 leading-tight">Request a Consultation &amp; Quote</h3>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">Fill out the details below and our facade engineers will reach out to you within 24 hours.</p>
                </div>

                <form id="publicQuoteForm" onsubmit="handleQuoteSubmit(event)" class="space-y-3 sm:space-y-3.5">
                    @csrf
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="name" required placeholder="e.g. Rahul Sharma" class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-3.5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Email Address</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-3.5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Product Division</label>
                            <select name="product_interest" class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                                <option value="DOZO Windows" selected>DOZO Windows</option>
                                <option value="DOZO Façade Systems">DOZO Façade Systems</option>
                                <option value="Both Windows & Façade">Both Windows & Façade</option>
                                <option value="Perforated Panels & Cladding">Perforated Panels & Cladding</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Project Location</label>
                            <input type="text" name="city" placeholder="e.g. Mumbai / Bangalore" class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Project Brief</label>
                        <textarea name="message" rows="2" placeholder="Tell us about the project scale, glass type, or architectural specs..." class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
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
                
                <div class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-sky-600 mb-0.5 sm:mb-1">Specification &amp; Overview</div>
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
                        <span id="modalProductAcoustic" class="font-semibold text-gray-800">Up to 42 dB Isolation</span>
                    </div>
                    <div class="flex justify-between text-xs py-1">
                        <span class="text-gray-500">Wind Load:</span>
                        <span id="modalProductWind" class="font-semibold text-gray-800">Engineered to 3.5 kPa</span>
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
                    <input id="searchInput" type="text" placeholder="Search window systems..." class="w-full text-sm focus:outline-none text-gray-800 placeholder-gray-400">
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
