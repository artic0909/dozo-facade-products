<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DOZO Façades — Architectural Building Envelope Solutions | 6063-T6 Aluminum & 3.0 kPa Wind Tested</title>
    <meta name="description" content="DOZO Façades delivers integrated architectural building envelopes: unitized curtain walls, perforated metal panels, louvers & solar shading. Engineered with 6063-T6 aluminum, 3.0 kPa wind load resistance, DURACOAT 65-80μm coating. AMC available.">
    <meta name="keywords" content="DOZO facade, unitized curtain wall, perforated panel facade, architectural louvers, building envelope India, 6063-T6 facade aluminum, solar shading louvers, exterior cladding, high-rise facade engineering, facade AMC">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DOZO Façades — Architectural Building Envelope Solutions">
    <meta property="og:description" content="Unitized curtain walls, perforated panels & louvers engineered with 6063-T6 aluminum alloy for 3.0 kPa wind pressure resistance and long-term durability.">
    <meta property="og:image" content="{{ url('/images/solution_facade.jpg') }}">
    <meta property="og:site_name" content="DOZO Windows & Façades">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DOZO Façades — Architectural Envelope Engineering">
    <meta name="twitter:description" content="Complete building envelope solutions combining thermal efficiency, 3.0 kPa structural capacity, and timeless luxury aesthetics.">
    <meta name="twitter:image" content="{{ url('/images/solution_facade.jpg') }}">

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
            'areaServed' => 'IN'
          ]
        ],
        [
          '@type' => 'Service',
          'name' => 'DOZO Complete Building Envelope & Façade Solutions',
          'provider' => [
            '@type' => 'Organization',
            'name' => 'DOZO Windows & Façades'
          ],
          'serviceType' => 'Architectural Façade Engineering & Fenestration Contracting',
          'areaServed' => 'India',
          'description' => 'Integrated building envelopes engineered with 6063-T6 architectural grade aluminum, tested for 3.0 kPa wind pressure, offering thermal efficiency, acoustic comfort, and sustainable recyclable fabrication.',
          'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Façade Systems',
            'itemListElement' => [
              ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Unitized Curtain Walls & Cladding']],
              ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Architectural Perforated Panels']],
              ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Louvers & Solar Shading Systems']],
              ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Flashings & Weatherproofing Trims']],
              ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Custom Architectural Fabrication & AMC']]
            ]
          ]
        ],
        [
          '@type' => 'FAQPage',
          'mainEntity' => [
            [
              '@type' => 'Question',
              'name' => 'What aluminum alloy is used in DOZO Façade Systems?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO uses 6063-T6 Architectural Grade Aluminum Alloy (97–99% Aluminum, 0.45–0.90% Magnesium, 0.20–0.60% Silicon, and trace elements) delivering 110-120 MPa Tensile Strength and 160-240 MPa Yield Strength with 25-Year warranty.'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What is the wind load capacity of DOZO Façades?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO Façade Systems are engineered for wind load capacities up to 3.0 kPa (3000 Pa), making them suitable for high-rise buildings, luxury residential towers, commercial complexes, and coastal developments.'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What surface coating is applied to DOZO Façade elements?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO utilizes DURACOAT Super Durable Powder Coating (65–80 Microns) with a 15-Year warranty, offering maximum resistance against UV degradation, weathering, and corrosion.'
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
        
        .accent-blue-line {
            display: inline-block;
            width: 38px;
            height: 2px;
            background-color: #7dd3fc;
            border-radius: 9999px;
            vertical-align: middle;
            margin-left: 10px;
        }

        .card-hover-zoom {
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-hover-zoom:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 28px -8px rgba(0, 0, 0, 0.09);
        }

        .img-zoom {
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .group:hover .img-zoom {
            transform: scale(1.04);
        }

        /* Hero Responsive Viewport Height */
        .hero-container {
            background-color: #fbfbfb;
            position: relative;
            min-height: 100vh;
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        @media (min-width: 1024px) {
            .hero-container {
                height: 100vh;
                height: 100dvh;
                min-height: 580px;
            }
        }

        .hero-building-bg {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        @media (min-width: 1024px) {
            .hero-building-bg {
                width: 55%;
                max-width: 860px;
                left: auto;
                right: 0;
            }
            .hero-building-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center center;
                -webkit-mask-image: linear-gradient(90deg, transparent 0%, rgba(0, 0, 0, 0.15) 12%, rgba(0, 0, 0, 0.8) 35%, black 60%);
                mask-image: linear-gradient(90deg, transparent 0%, rgba(0, 0, 0, 0.15) 12%, rgba(0, 0, 0, 0.8) 35%, black 60%);
                image-rendering: -webkit-optimize-contrast;
                transform: translateZ(0);
            }
        }

        @media (min-width: 1440px) {
            .hero-building-bg {
                width: 50%;
                max-width: 960px;
            }
        }

        @media (max-width: 1023px) {
            .hero-building-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center center;
                opacity: 0.25;
            }
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white">

    <!-- HERO SECTION WITH INTEGRATED HEADER & 100% VIEWPORT HEIGHT (EXACT WELCOME PAGE DESIGN & DYNAMIC FAÇADE CMS DATA) -->
    <div class="hero-container w-full border-b border-gray-100">
        <!-- Dynamic Interactive Carousel Background Images with smooth crossfade -->
        <div class="hero-building-bg">
            @if(isset($facadeSlides) && $facadeSlides->count())
                @foreach($facadeSlides as $idx => $slide)
                    <div id="heroBg{{ $idx }}" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out {{ $idx === 0 ? 'opacity-100' : 'opacity-0 pointer-events-none' }}">
                        <img src="{{ $slide->image }}" alt="{{ $slide->name }} - DOZO Façade Architecture" class="w-full h-full">
                    </div>
                @endforeach
            @else
                <div id="heroBg0" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100">
                    <img src="/images/solution_facade.jpg" alt="Façade Cladding - DOZO Architecture" class="w-full h-full">
                </div>
            @endif
        </div>

        <!-- TOP NAVIGATION BAR -->
        <header class="relative z-30 w-full shrink-0 pt-3 sm:pt-4 pb-2">
            <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-20">
                    <!-- Brand Logo (Enlarged) -->
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group shrink-0">
                        <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 md:h-14 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.02]">
                    </a>

                    <!-- Desktop Navigation Links (Façade Active) -->
                    <nav class="hidden lg:flex items-center gap-7 xl:gap-9 text-[15px] xl:text-[16px] font-semibold text-[#1a1d20]">
                        <a href="{{ route('home') }}" class="hover:text-sky-600 transition-colors">Home</a>
                        <a href="{{ route('facade.index') }}" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Façade</a>
                        <a href="{{ route('windows.index') }}" class="hover:text-sky-600 transition-colors">Windows</a>
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
                    <a href="{{ route('facade.index') }}" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">DOZO Façades</a>
                    <a href="{{ route('windows.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Windows</a>
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

        <!-- HERO MAIN BODY WITH INTERACTIVE CAROUSEL CONTENT (DYNAMIC FAÇADE CMS DATA) -->
        <div id="home" class="relative z-10 max-w-[1340px] w-full mx-auto px-4 sm:px-6 lg:px-8 py-2 sm:py-4 flex-1 flex flex-col justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Hero Left: Dynamic Carousel Typography -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 mb-1.5 sm:mb-2.5">
                        <span id="heroEyebrow" class="text-[10.5px] sm:text-[11.5px] font-bold tracking-[0.16em] uppercase text-gray-400 transition-opacity duration-300">
                            {{ isset($facadeSlides) && $facadeSlides->first() ? $facadeSlides->first()->eyebrow : 'Unitized Curtain Walls & Cladding' }}
                        </span>
                    </div>

                    <!-- Exact Stacked Headline Typography -->
                    @php
                        $firstHeadline = isset($facadeSlides) && $facadeSlides->first() ? $facadeSlides->first()->headline : "DOZO\nFAÇADES\nFOR ARCHITECTURAL\nEXCELLENCE";
                        $firstLines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $firstHeadline))));
                    @endphp
                    <h1 id="heroHeadline" class="text-[32px] sm:text-[44px] lg:text-[min(4vw,54px)] tracking-[-0.035em] leading-[1.03] text-[#1a1d20] mb-2 sm:mb-3 uppercase transition-opacity duration-300">
                        @foreach($firstLines as $i => $line)
                            <span class="{{ $i < 2 ? 'font-black block' : 'font-light block text-[#25282d]' }}">{{ $line }}</span>
                        @endforeach
                    </h1>

                    <p id="heroDesc" class="text-gray-500 text-xs sm:text-[13.5px] lg:text-[14px] leading-relaxed max-w-md mb-4 sm:mb-5 transition-opacity duration-300">
                        {{ isset($facadeSlides) && $facadeSlides->first() ? $facadeSlides->first()->desc : 'Architectural freedom with precision and durability. Complete building envelope solutions engineered for thermal mastery and acoustic comfort.' }}
                    </p>

                    <!-- Dynamic CTA Button -->
                    <div class="flex items-center gap-3">
                        <a id="heroCta" href="{{ isset($facadeSlides) && $facadeSlides->first() ? $facadeSlides->first()->cta_link : '#contact' }}" onclick="{{ (isset($facadeSlides) && $facadeSlides->first() && $facadeSlides->first()->cta_link === '#contact') ? 'openQuoteModal(); return false;' : '' }}" class="inline-flex items-center gap-2.5 bg-[#1b1e23] hover:bg-black text-white text-xs sm:text-[12.5px] font-semibold px-5 sm:px-6 py-2.5 rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:gap-3.5 cursor-pointer">
                            <span id="heroCtaText">{{ isset($facadeSlides) && $facadeSlides->first() ? $facadeSlides->first()->cta_text : 'Request Façade Consultation' }}</span>
                            <span class="text-sm">&rarr;</span>
                        </a>
                    </div>

                    <!-- Mobile Carousel Points Strip -->
                    <div class="flex lg:hidden items-center gap-2 mt-4 overflow-x-auto pb-1 scrollbar-none">
                        @if(isset($facadeSlides) && $facadeSlides->count())
                            @foreach($facadeSlides as $idx => $slide)
                                <button type="button" onclick="setHeroSlide({{ $idx }})" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-bold {{ $idx === 0 ? 'bg-black text-white' : 'bg-gray-200/80 text-gray-700' }} shrink-0" data-idx="{{ $idx }}">
                                    {{ $slide->name }}
                                </button>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Hero Right: Interactive 5 Pillars Carousel Menu (Façade Badges) -->
                <div class="lg:col-span-5 hidden lg:flex flex-col justify-between items-end h-[280px] xl:h-[320px] text-right pr-4 z-20">
                    <!-- Clickable Carousel Points -->
                    <div class="space-y-1 drop-shadow-md">
                        @if(isset($facadeSlides) && $facadeSlides->count())
                            @foreach($facadeSlides as $idx => $slide)
                                <button type="button" onclick="setHeroSlide({{ $idx }})" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 {{ $idx === 0 ? 'text-white font-bold' : 'text-white/70 hover:text-white font-medium' }}" data-index="{{ $idx }}">
                                    <span class="inline-block pb-0.5 border-b {{ $idx === 0 ? 'border-white' : 'border-transparent' }}">{{ $slide->name }}</span>
                                </button>
                            @endforeach
                        @endif
                    </div>

                    <!-- Bottom Right Badge -->
                    <div class="text-white/90 font-medium text-[11.5px] sm:text-[12px] leading-tight drop-shadow-md pointer-events-none">
                        <div>Façade Engineering</div>
                        <div>Meets Performance</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- HERO BOTTOM STATS ROW (STAYS FIXED / DYNAMIC CMS) -->
        <div class="relative z-10 w-full shrink-0 bg-white/40 lg:bg-transparent backdrop-blur-xs lg:backdrop-blur-none border-t border-gray-200/50 py-3 sm:py-3.5">
            <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-start sm:justify-between lg:justify-start gap-4 sm:gap-6 lg:gap-10 text-left">
                    
                    @if(isset($heroStats) && $heroStats->count())
                        @foreach($heroStats as $idx => $stat)
                            <div class="flex items-center gap-6 lg:gap-10">
                                <div>
                                    <div class="text-xl sm:text-2xl font-black text-[#1a1d20] tracking-tight">{{ $stat->number }}</div>
                                    <div class="text-[10.5px] text-gray-500 font-medium leading-tight mt-0.5">{{ $stat->label }}</div>
                                </div>
                                @if(!$loop->last)
                                    <span class="hidden sm:inline-block w-px h-7 bg-gray-300/80"></span>
                                @endif
                            </div>
                        @endforeach
                    @else
                        <!-- Stat 1 -->
                        <div class="flex items-center gap-6 lg:gap-10">
                            <div>
                                <div class="text-xl sm:text-2xl font-black text-[#1a1d20] tracking-tight">25+</div>
                                <div class="text-[10.5px] text-gray-500 font-medium leading-tight mt-0.5">Years of Experience</div>
                            </div>
                            <span class="hidden sm:inline-block w-px h-7 bg-gray-300/80"></span>
                        </div>

                        <!-- Stat 2 -->
                        <div class="flex items-center gap-6 lg:gap-10">
                            <div>
                                <div class="text-xl sm:text-2xl font-black text-[#1a1d20] tracking-tight">500+</div>
                                <div class="text-[10.5px] text-gray-500 font-medium leading-tight mt-0.5">Projects Delivered</div>
                            </div>
                            <span class="hidden sm:inline-block w-px h-7 bg-gray-300/80"></span>
                        </div>

                        <!-- Stat 3 -->
                        <div class="flex items-center gap-6 lg:gap-10">
                            <div>
                                <div class="text-xl sm:text-2xl font-black text-[#1a1d20] tracking-tight">Premium</div>
                                <div class="text-[10.5px] text-gray-500 font-medium leading-tight mt-0.5">Quality Materials</div>
                            </div>
                            <span class="hidden sm:inline-block w-px h-7 bg-gray-300/80"></span>
                        </div>

                        <!-- Stat 4 -->
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-[#1a1d20] tracking-tight">Pan India</div>
                            <div class="text-[10.5px] text-gray-500 font-medium leading-tight mt-0.5">Presence</div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER / CALL TO ACTION BANNER (DYNAMIC CMS & RICH SEO) -->
    @include('partials.footer')


    <!-- INTERACTIVE MODAL: GET A QUOTE -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeQuoteModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeQuoteModal()">
            <div class="bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full p-5 sm:p-7 md:p-8 shadow-2xl border border-gray-100 relative my-auto max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeQuoteModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-1.5 sm:p-2 rounded-full transition-colors z-10" aria-label="Close modal">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
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
                                <option value="DOZO Façade Systems" selected>DOZO Façade Systems</option>
                                <option value="Both Windows & Façade">Both Windows & Façade</option>
                                <option value="DOZO Windows">DOZO Windows</option>
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
                        <textarea name="message" rows="2" placeholder="Tell us about the facade area, glass specs, or architectural drawings..." class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                    </div>

                    <button id="quoteSubmitBtn" type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-2.5 sm:py-3 rounded-xl transition-all shadow-md text-sm cursor-pointer">
                        Submit Inquiry &rarr;
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: SEARCH -->
    <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm p-3 sm:p-4 pt-12 sm:pt-20" onclick="if(event.target === this) closeSearchModal()">
        <div class="max-w-lg mx-auto w-full">
            <div class="bg-white rounded-2xl w-full p-4 sm:p-5 shadow-2xl border border-gray-100 relative">
                <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input id="searchInput" type="text" placeholder="Search facade systems, curtain walls, cladding..." class="w-full text-sm focus:outline-none text-gray-800 placeholder-gray-400">
                    <button type="button" onclick="closeSearchModal()" class="text-xs font-semibold text-gray-500 hover:text-black bg-gray-100 px-2 py-1 rounded-md">
                        ESC
                    </button>
                </div>
                <div class="mt-3 space-y-2 text-xs sm:text-sm text-gray-600">
                    <div class="p-2 rounded-lg hover:bg-gray-50 cursor-pointer" onclick="closeSearchModal(); location.href='{{ route('facade.index') }}';">
                        <div class="font-bold text-gray-800">Unitized Glass & Perforated Façade</div>
                        <div class="text-[11px] text-gray-400">Architectural cladding, sun shades, commercial curtain walls</div>
                    </div>
                    <div class="p-2 rounded-lg hover:bg-gray-50 cursor-pointer" onclick="closeSearchModal(); location.href='{{ route('windows.index') }}';">
                        <div class="font-bold text-gray-800">DOZO Sliding & Casement Windows</div>
                        <div class="text-[11px] text-gray-400">Thermal insulation, acoustic reduction, weather resistant systems</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
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
            const originalText = submitBtn.innerHTML;
            
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
                alert(data.message || 'Thank you! Your quote inquiry has been submitted. Our facade engineering team will contact you shortly.');
                form.reset();
                closeQuoteModal();
            })
            .catch(err => {
                console.error(err);
                alert('Thank you! Your inquiry has been received. Our team will contact you shortly.');
                closeQuoteModal();
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        }

        function openSearchModal() {
            document.getElementById('searchModal').classList.remove('hidden');
            document.getElementById('searchInput').focus();
        }
        function closeSearchModal() {
            document.getElementById('searchModal').classList.add('hidden');
        }

        @php
            $facadeSlidesJson = (isset($facadeSlides) && $facadeSlides->count()) ? $facadeSlides->map(function($s) {
                $lines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $s->headline))));
                $formattedHeadline = '';
                foreach($lines as $i => $line) {
                    $class = $i < 2 ? 'font-black block' : 'font-light block text-[#25282d]';
                    $formattedHeadline .= '<span class="' . $class . '">' . e($line) . '</span>';
                }
                return [
                    'name' => $s->name,
                    'eyebrow' => $s->eyebrow,
                    'headline' => $formattedHeadline,
                    'desc' => nl2br(e($s->desc)),
                    'ctaText' => $s->cta_text,
                    'ctaLink' => $s->cta_link,
                    'image' => $s->image
                ];
            })->values() : null;
        @endphp

        // Façade 5-Pillar Carousel Controller (Dynamic CMS)
        const heroSlides = {!! $facadeSlidesJson ? json_encode($facadeSlidesJson) : json_encode([]) !!};

        let currentHeroIndex = 0;
        let heroTimer = null;

        function setHeroSlide(idx) {
            currentHeroIndex = idx;
            const slide = heroSlides[idx];
            if (!slide) return;

            // 1. Update Background Layers
            for (let i = 0; i < 5; i++) {
                const bgEl = document.getElementById('heroBg' + i);
                if (bgEl) {
                    if (i === idx) {
                        bgEl.classList.remove('opacity-0', 'pointer-events-none');
                        bgEl.classList.add('opacity-100');
                    } else {
                        bgEl.classList.remove('opacity-100');
                        bgEl.classList.add('opacity-0', 'pointer-events-none');
                    }
                }
            }

            // 2. Update Desktop Point Buttons
            const desktopBtns = document.querySelectorAll('.hero-point-btn');
            desktopBtns.forEach((btn, i) => {
                const span = btn.querySelector('span');
                if (i === idx) {
                    btn.className = 'hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white font-bold cursor-pointer';
                    if (span) span.className = 'inline-block pb-0.5 border-b-2 border-white';
                } else {
                    btn.className = 'hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white/70 hover:text-white font-medium cursor-pointer';
                    if (span) span.className = 'inline-block pb-0.5 border-b-2 border-transparent';
                }
            });

            // 3. Update Mobile Point Buttons
            const mobBtns = document.querySelectorAll('.mob-hero-btn');
            mobBtns.forEach((btn, i) => {
                if (i === idx) {
                    btn.className = 'mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-bold bg-black text-white shrink-0 shadow-xs';
                } else {
                    btn.className = 'mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-medium bg-gray-200/80 text-gray-700 shrink-0';
                }
            });

            // 4. Smooth Typography Transitions
            const eyebrowEl = document.getElementById('heroEyebrow');
            const headlineEl = document.getElementById('heroHeadline');
            const descEl = document.getElementById('heroDesc');
            const ctaTextEl = document.getElementById('heroCtaText');
            const ctaLinkEl = document.getElementById('heroCta');

            if (eyebrowEl) eyebrowEl.style.opacity = '0.2';
            if (headlineEl) headlineEl.style.opacity = '0.2';
            if (descEl) descEl.style.opacity = '0.2';

            setTimeout(() => {
                if (eyebrowEl) {
                    eyebrowEl.innerText = slide.eyebrow;
                    eyebrowEl.style.opacity = '1';
                }
                if (headlineEl) {
                    headlineEl.innerHTML = slide.headline;
                    headlineEl.style.opacity = '1';
                }
                if (descEl) {
                    descEl.innerHTML = slide.desc;
                    descEl.style.opacity = '1';
                }
                if (ctaTextEl) ctaTextEl.innerText = slide.ctaText;
                if (ctaLinkEl) {
                    ctaLinkEl.href = slide.ctaLink || '#contact';
                    ctaLinkEl.onclick = (slide.ctaLink === '#contact') ? function(e) { e.preventDefault(); openQuoteModal(); } : null;
                }
            }, 180);

            // Reset auto-advance timer on interaction
            resetHeroTimer();
        }

        function nextHeroSlide() {
            let nextIdx = (currentHeroIndex + 1) % heroSlides.length;
            setHeroSlide(nextIdx);
        }

        function resetHeroTimer() {
            if (heroTimer) clearInterval(heroTimer);
            heroTimer = setInterval(nextHeroSlide, 5500);
        }

        // Start carousel autoplay on load
        resetHeroTimer();

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeSearchModal();
            }
        });
    </script>
</body>
</html>
