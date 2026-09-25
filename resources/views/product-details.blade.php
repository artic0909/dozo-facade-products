<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary SEO Metadata -->
    <title>{{ $product->name }} — DOZO Architectural {{ $product->type === 'windows' ? 'Windows' : 'Products & Façades' }}</title>
    <meta name="title" content="{{ $product->name }} — DOZO Architectural {{ $product->type === 'windows' ? 'Windows' : 'Products & Façades' }}">
    <meta name="description" content="{{ $product->short_desc ?: 'Explore ' . $product->name . ' by DOZO. 6063-T6 aluminum alloy, wind pressure tested to 3.0 kPa, acoustic cutoff 20-45 dB, DURACOAT powder coating, and factory precision.' }}">
    <meta name="keywords" content="{{ $product->name }}, DOZO {{ $product->type }}, architectural building envelope, aluminum window system, facade cladding, 3.0 kPa wind load, 6063-T6 aluminum">
    <meta name="author" content="DOZO Windows & Façades">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $product->name }} — DOZO Architectural Solutions">
    <meta property="og:description" content="{{ $product->short_desc ?: 'Engineered building envelope systems: 6063-T6 aluminum, 3.0 kPa wind load, 20-45 dB sound reduction, 25-yr warranty.' }}">
    <meta property="og:image" content="{{ $product->image ? url($product->image) : url('/logo.png') }}">
    <meta property="og:site_name" content="DOZO Windows & Façade">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $product->name }} — DOZO Architectural Solutions">
    <meta property="twitter:description" content="{{ $product->short_desc ?: 'Engineered building envelope systems: 6063-T6 aluminum, 3.0 kPa wind resistance, 25-yr warranty.' }}">
    <meta property="twitter:image" content="{{ $product->image ? url($product->image) : url('/logo.png') }}">

    <link rel="icon" type="image/png" href="/favicon.png?v=2">
    <link rel="shortcut icon" type="image/png" href="/favicon.png?v=2">
    <link rel="apple-touch-icon" href="/favicon.png?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Structured Data (JSON-LD) for Product -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'Product',
      'name' => $product->name,
      'image' => $product->image ? url($product->image) : url('/logo.png'),
      'description' => $product->short_desc ?: 'DOZO Architectural ' . $product->name . ' building envelope system.',
      'brand' => [
        '@type' => 'Brand',
        'name' => 'DOZO'
      ],
      'category' => $product->productCategory->name ?? ($product->type === 'windows' ? 'Windows' : 'Products'),
      'material' => $product->material_grade ?: '6063-T6 Architectural Grade Aluminum Alloy',
      'offers' => [
        '@type' => 'Offer',
        'url' => url()->current(),
        'priceCurrency' => 'INR',
        'price' => '0.00',
        'priceSpecification' => [
          '@type' => 'UnitPriceSpecification',
          'priceType' => 'https://schema.org/CustomQuote'
        ],
        'availability' => 'https://schema.org/InStock',
        'seller' => [
          '@type' => 'Organization',
          'name' => 'DOZO Windows & Façades'
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
        .tab-btn.active {
            color: #0284c7;
            border-bottom-color: #0284c7;
            background-color: #f0f9ff;
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white flex flex-col min-h-screen">

    <!-- TOP NAVIGATION BAR -->
    <header class="relative z-30 w-full shrink-0 pt-3 sm:pt-4 pb-2 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-2xs">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group shrink-0">
                    <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 md:h-14 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.02]">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7 xl:gap-9 text-[15px] xl:text-[16px] font-semibold text-[#1a1d20]">
                    <a href="{{ route('home') }}" class="hover:text-sky-600 transition-colors">Home</a>
                    <a href="{{ route('facade.index') }}" class="hover:text-sky-600 transition-colors">Façade</a>
                    <a href="{{ route('windows.index') }}" class="{{ $product->type === 'windows' ? 'text-black font-bold hover:text-sky-600 relative py-1 after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : 'hover:text-sky-600 transition-colors' }}">Windows</a>
                    <a href="{{ route('products.index') }}" class="{{ $product->type === 'products' ? 'text-black font-bold hover:text-sky-600 relative py-1 after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : 'hover:text-sky-600 transition-colors' }}">Products</a>
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
                    <button type="button" onclick="openQuoteModal('{{ addslashes($product->name) }}')" class="bg-[#1b1e23] hover:bg-black text-white text-[13px] font-bold px-6 py-2.5 rounded-full transition-all duration-200 shadow-md hover:scale-[1.02] active:scale-[0.98]">
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
                <a href="{{ route('products.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Products</a>
                <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="py-1 border-b border-gray-100 flex items-center justify-between hover:text-sky-600">
                    <span>Downloads (Catalogue)</span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </a>
                
                <div class="pt-2 flex flex-col gap-2">
                    <button type="button" onclick="toggleMobileMenu(); openQuoteModal('{{ addslashes($product->name) }}');" class="w-full bg-[#1b1e23] text-white py-3 rounded-xl font-bold text-center text-sm shadow-md">
                        Get a Quote &rarr;
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- BREADCRUMBS SECTION -->
    <div class="bg-slate-50 border-b border-gray-100 py-3.5 sm:py-4">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center flex-wrap gap-2 text-xs font-semibold text-gray-500">
                <a href="{{ route('home') }}" class="hover:text-black transition-colors">Home</a>
                <span class="text-gray-300">/</span>
                @if($product->type === 'windows')
                    <a href="{{ route('windows.index') }}" class="hover:text-black transition-colors">DOZO Windows</a>
                @else
                    <a href="{{ route('products.index') }}" class="hover:text-black transition-colors">DOZO Products</a>
                @endif
                @if($product->productCategory)
                    <span class="text-gray-300">/</span>
                    <a href="{{ $product->type === 'windows' ? route('windows.index', $product->productCategory->slug) : route('products.index', $product->productCategory->slug) }}" class="hover:text-black transition-colors">
                        {{ $product->productCategory->name }}
                    </a>
                @endif
                <span class="text-gray-300">/</span>
                <span class="text-sky-600 font-bold truncate max-w-[200px] sm:max-w-none">{{ $product->name }}</span>
            </nav>
        </div>
    </div>

    <!-- MAIN PRODUCT SHOWCASE CONTAINER -->
    <main class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 flex-1 w-full">
        
        <!-- Two Column Product Presentation -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Left Column: Product Visuals / High-Res Showcase (Span 6) -->
            <div class="lg:col-span-6 flex flex-col gap-4">
                
                <!-- Main Image Card (Full Uncut Image Display) -->
                <div class="relative w-full bg-white border border-gray-200/90 rounded-2xl sm:rounded-3xl shadow-xs flex items-center justify-center p-3 sm:p-5 md:p-6 min-h-[360px] sm:min-h-[480px]">
                    <img id="mainProductImage" src="{{ $product->image ?: '/images/hero_building.jpg' }}" alt="{{ $product->name }}" class="w-auto h-auto max-w-full max-h-[580px] object-contain mx-auto block rounded-lg">
                </div>

                <!-- 4 Quick Metric Highlight Cards Below Image -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3 text-center">
                    <div class="p-3 bg-white border border-gray-100 rounded-xl sm:rounded-2xl shadow-2xs">
                        <div class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-0.5">Wind Pressure</div>
                        <div class="text-sm sm:text-base font-extrabold text-[#0f172a]">3.0 kPa</div>
                        <div class="text-[10px] text-sky-600 font-medium mt-0.5">Tested Air & Wind</div>
                    </div>
                    <div class="p-3 bg-white border border-gray-100 rounded-xl sm:rounded-2xl shadow-2xs">
                        <div class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-0.5">Water Tightness</div>
                        <div class="text-sm sm:text-base font-extrabold text-[#0f172a]">0.30 kPa</div>
                        <div class="text-[10px] text-sky-600 font-medium mt-0.5">Static Water Tested</div>
                    </div>
                    <div class="p-3 bg-white border border-gray-100 rounded-xl sm:rounded-2xl shadow-2xs">
                        <div class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-0.5">Acoustic Cutoff</div>
                        <div class="text-sm sm:text-base font-extrabold text-[#0f172a]">20-45 dB</div>
                        <div class="text-[10px] text-sky-600 font-medium mt-0.5">Noise Reduction</div>
                    </div>
                    <div class="p-3 bg-white border border-gray-100 rounded-xl sm:rounded-2xl shadow-2xs">
                        <div class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-0.5">Thermal Comfort</div>
                        <div class="text-sm sm:text-base font-extrabold text-[#0f172a]">10-12°C</div>
                        <div class="text-[10px] text-sky-600 font-medium mt-0.5">Heat Reduction</div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Product Details, Specifications & Call to Action (Span 6) -->
            <div class="lg:col-span-6 flex flex-col">
                
                <!-- Category & Title -->
                <div class="mb-4">
                    @if($product->productCategory)
                        <span class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1.5 inline-block">
                            {{ $product->productCategory->name }}
                        </span>
                    @endif
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#0f172a] tracking-tight leading-tight mb-3">
                        {{ $product->name }}
                    </h1>
                    <div class="w-12 h-[3px] bg-sky-500 mb-4 rounded-full"></div>
                </div>

                <!-- Product Summary -->
                <div class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal mb-6">
                    {{ $product->short_desc ?: 'Engineered for architectural excellence, durability, and contemporary design. Manufactured with automated precision using architectural grade 6063-T6 aluminum alloy for exceptional structural performance, acoustic isolation, and weather resistance.' }}
                </div>

                <!-- Specifications Table / Matrix -->
                <div class="bg-white border border-gray-200/80 rounded-2xl sm:rounded-3xl p-5 sm:p-6 mb-8 shadow-xs">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        Technical Specifications & Attributes
                    </h3>

                    <dl class="divide-y divide-gray-100 text-xs sm:text-[13px]">
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Material Grade</dt>
                            <dd class="text-gray-600 sm:col-span-2">{{ $product->material_grade ?: '6063-T6 Architectural Aluminum (Tensile 110-120 MPa, Yield 160-240 MPa)' }}</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Finish & Coating</dt>
                            <dd class="text-gray-600 sm:col-span-2">{{ $product->finish_options ?: 'DURACOAT Powder Coating (65–80μm), Anodized (15–25μm), PVDF' }}</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Acoustic Cutoff</dt>
                            <dd class="text-gray-600 sm:col-span-2">{{ $product->acoustic_rating ?: '20 - 45 dB Sound/Noise Reduction (depending on glass selection)' }}</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Wind Load Testing</dt>
                            <dd class="text-gray-600 sm:col-span-2">{{ $product->wind_load ?: 'Tested up to 3.0 kPa (Wind Pressure Resistance)' }}</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Water Tightness</dt>
                            <dd class="text-gray-600 sm:col-span-2">0.30 kPa (300 Pa) Static Water Penetration Resistance</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Glass Compatibility</dt>
                            <dd class="text-gray-600 sm:col-span-2">4mm to 24mm (Single, Laminated PVB & Insulated Double Glazing Units)</dd>
                        </div>
                        <div class="py-2.5 sm:py-3 grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4">
                            <dt class="font-bold text-gray-900">Warranty Coverage</dt>
                            <dd class="text-gray-600 sm:col-span-2 font-medium text-emerald-700">25 Years Aluminium Material &bull; 15 Years Powder Coating &bull; 5 Years Hardware</dd>
                        </div>
                    </dl>
                </div>

                <!-- Action Button Group -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <button type="button" onclick="openQuoteModal('{{ addslashes($product->name) }}')" class="flex-1 bg-[#0f172a] hover:bg-black text-white text-sm font-bold py-3.5 px-6 rounded-xl sm:rounded-2xl transition-all duration-200 shadow-md hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2">
                        <span>Get Instant Quote</span>
                        <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>

                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="flex-1 bg-white hover:bg-gray-50 text-gray-800 border border-gray-300 text-sm font-bold py-3.5 px-6 rounded-xl sm:rounded-2xl transition-all duration-200 shadow-2xs flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        <span>Download Catalogue</span>
                    </a>
                </div>

                @if(!empty($siteSettings['phone_primary']))
                    <div class="mt-4 flex items-center justify-between p-3.5 bg-slate-50 border border-gray-200/70 rounded-xl text-xs text-gray-600">
                        <span>Need direct engineering support?</span>
                        <a href="tel:{{ $siteSettings['phone_primary'] }}" class="font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
                            <span>Call {{ $siteSettings['phone_primary'] }}</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                @endif

            </div>

        </div>



        <!-- RELATED ARCHITECTURAL PRODUCTS SECTION -->
        @if(isset($relatedProducts) && $relatedProducts->count())
            <section class="mt-14 sm:mt-20 border-t border-gray-200/80 pt-10 sm:pt-14">
                
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <h2 class="text-lg sm:text-xl font-extrabold text-[#0f172a] uppercase tracking-tight">
                            Related {{ $product->type === 'windows' ? 'DOZO Windows' : 'Architectural Products' }}
                        </h2>
                        <span class="w-8 sm:w-10 h-[2px] bg-[#3b82f6] inline-block"></span>
                    </div>

                    <a href="{{ $product->type === 'windows' ? route('windows.index') : route('products.index') }}" class="text-xs sm:text-sm font-semibold text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                        <span>View All</span>
                        <span class="text-[#3b82f6] text-base">&rarr;</span>
                    </a>
                </div>

                <!-- 4 Product Cards Grid (Each linking to its own product details page!) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($relatedProducts as $rel)
                        @php
                            $isDark = ($rel->theme === 'dark');
                        @endphp
                        <a href="{{ route('product.details', $rel->slug ?: $rel->id) }}" class="group flex flex-col {{ $isDark ? 'bg-[#161e27] border-gray-800 text-white' : 'bg-white border-gray-200/90 text-gray-900' }} border rounded-none overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="aspect-[4/3] w-full rounded-none overflow-hidden {{ $isDark ? 'bg-[#0d131a]' : 'bg-[#f0f2f5]' }} relative flex items-center justify-center p-3">
                                <img src="{{ $rel->image }}" alt="{{ $rel->name }}" class="max-w-full max-h-full w-auto h-auto object-contain rounded-none group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-4 flex items-center justify-between {{ $isDark ? 'bg-[#161e27] border-gray-800' : 'bg-white border-gray-100' }} border-t rounded-none">
                                <div class="min-w-0 flex-1">
                                    <span class="text-sm sm:text-[15px] font-bold truncate block {{ $isDark ? 'text-white' : 'text-[#1a1d20]' }} group-hover:text-sky-600 transition-colors">{{ $rel->name }}</span>
                                    @if($rel->productCategory)
                                        <span class="text-[11px] {{ $isDark ? 'text-sky-400' : 'text-sky-600' }} font-medium uppercase tracking-wider truncate block mt-0.5">{{ $rel->productCategory->name }}</span>
                                    @endif
                                </div>
                                <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full {{ $isDark ? 'bg-white/10 border border-white/20 text-white' : 'bg-black text-white' }} flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

            </section>
        @endif

    </main>

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- GET A QUOTE MODAL -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeQuoteModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeQuoteModal()">
            <div class="bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full p-5 sm:p-7 md:p-8 shadow-2xl border border-gray-100 relative my-auto max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeQuoteModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-1.5 sm:p-2 rounded-full transition-colors z-10" aria-label="Close modal">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="mb-5">
                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight">Request a Quote</h3>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">Direct from factory. 3.0 kPa wind & acoustic certified.</p>
                </div>
                <form action="{{ route('quotes.store') }}" method="POST" class="space-y-3.5">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Product</label>
                        <input id="modalProductName" type="text" name="product_name" value="{{ $product->name }}" class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm bg-gray-50 focus:bg-white focus:outline-none focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Name *</label>
                        <input type="text" name="name" required class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm focus:outline-none focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Phone *</label>
                        <input type="tel" name="phone" required class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm focus:outline-none focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Email *</label>
                        <input type="email" name="email" required class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm focus:outline-none focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Location</label>
                        <input type="text" name="location" class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm focus:outline-none focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Message</label>
                        <textarea name="message" rows="2" class="w-full px-3.5 py-2.5 rounded-xl border border-gray-200 text-xs sm:text-sm focus:outline-none focus:border-sky-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-3 rounded-xl transition-all duration-200 text-xs sm:text-sm shadow-md mt-2">
                        Submit Quote Request &rarr;
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- SEARCH MODAL -->
    <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-4" onclick="if(event.target === this) closeSearchModal()">
        <div class="min-h-full flex items-start justify-center pt-16 sm:pt-24" onclick="if(event.target === this) closeSearchModal()">
            <div class="bg-white rounded-2xl max-w-lg w-full p-4 sm:p-6 shadow-2xl border border-gray-100 relative" onclick="event.stopPropagation()">
                <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" id="siteSearchInput" placeholder="Search windows, façade systems, specs..." class="w-full text-sm font-medium focus:outline-none" oninput="handleSiteSearch(this.value)">
                    <button type="button" onclick="closeSearchModal()" class="text-xs text-gray-400 hover:text-black font-semibold">ESC</button>
                </div>
                <div id="searchResults" class="mt-3 max-h-60 overflow-y-auto divide-y divide-gray-100 text-xs">
                    <div class="py-2 text-gray-400 text-center">Type to search catalogue...</div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT CONTROLLERS -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            if (menu) {
                menu.classList.toggle('hidden');
                if (menuIcon && closeIcon) {
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                }
            }
        }

        function openQuoteModal(prodName = '') {
            const modal = document.getElementById('quoteModal');
            const prodInput = document.getElementById('modalProductName');
            if (prodInput && prodName) {
                prodInput.value = prodName;
            }
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeQuoteModal() {
            const modal = document.getElementById('quoteModal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        function openSearchModal() {
            const modal = document.getElementById('searchModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.getElementById('siteSearchInput')?.focus();
            }
        }

        function closeSearchModal() {
            const modal = document.getElementById('searchModal');
            if (modal) {
                modal.classList.add('hidden');
            }
        }

        function handleSiteSearch(val) {
            const res = document.getElementById('searchResults');
            if (!res) return;
            if (!val || val.length < 2) {
                res.innerHTML = '<div class="py-2 text-gray-400 text-center">Type to search catalogue...</div>';
                return;
            }
            const query = val.toLowerCase();
            const items = [
                { name: 'Sliding Window System', url: '/product/sliding-window-system', desc: 'DOZO Windows — Multi-Track Sliding' },
                { name: 'Casement Window System', url: '/product/casement-window-system', desc: 'DOZO Windows — Acoustic Casement' },
                { name: 'Unitized Glass Facade', url: '/product/unitized-glass-facade', desc: 'DOZO Products — Curtain Wall' },
                { name: 'Architectural Perforated Panel', url: '/product/architectural-perforated-panel', desc: 'DOZO Products — CNC Perforation' },
                { name: 'Thermal Break Slimline Doors', url: '/product/thermal-break-slimline-doors', desc: 'DOZO Windows — Slimline Doors' },
                { name: 'Architectural Louvers & Sunshades', url: '/product/architectural-louvers-sunshades', desc: 'DOZO Products — Sun Protection' }
            ];
            const filtered = items.filter(i => i.name.toLowerCase().includes(query) || i.desc.toLowerCase().includes(query));
            if (filtered.length === 0) {
                res.innerHTML = '<div class="py-3 text-gray-500 text-center">No matching products found.</div>';
                return;
            }
            res.innerHTML = filtered.map(i => `
                <a href="${i.url}" class="block py-2.5 px-2 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="font-bold text-gray-900">${i.name}</div>
                    <div class="text-[11px] text-gray-500">${i.desc}</div>
                </a>
            `).join('');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeSearchModal();
            }
        });
    </script>
</body>
</html>
