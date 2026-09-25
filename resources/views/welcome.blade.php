<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOZO - Windows &amp; Façades &amp; Perforation Products | Architectural Building Envelope Solutions | 3.0 kPa Wind &amp; Acoustic Tested</title>
    <meta name="description" content="DOZO Windows &amp; Façades delivers integrated building envelope solutions. 3.0 kPa wind load tested, 0.30 kPa water tested, 20-45 dB acoustic cutoff, 10-12°C heat reduction. 6063-T6 aluminum, sub-frame system, DURACOAT 15-yr coating, 25-yr aluminium warranty. AMC available.">
    <meta name="keywords" content="DOZO windows, DOZO facade, architectural building envelopes, aluminum sliding windows, unitized curtain wall, 6063-T6 aluminum, sub-frame window system, acoustic glass windows, DURACOAT powder coating, facade contractor India, window AMC">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DOZO - Windows &amp; Façades | Architectural Building Envelope Solutions">
    <meta property="og:description" content="Precision engineered aluminum windows and unitized facades. 3.0 kPa wind tested, 20-45 dB noise cut-off, 25-year aluminium warranty with patented sub-frame amended system.">
    <meta property="og:image" content="{{ url('/logo.png') }}">
    <meta property="og:site_name" content="DOZO Windows &amp; Façades">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DOZO - Windows &amp; Façades | Engineering Architectural Excellence">
    <meta name="twitter:description" content="Integrated building envelope solutions combining thermal efficiency, 3.0 kPa structural capacity, and timeless luxury aesthetics.">
    <meta name="twitter:image" content="{{ url('/logo.png') }}">

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
          'telephone' => '+91-98765-43210',
          'email' => 'info@dozo.co.in',
          'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'IN'
          ]
        ],
        [
          '@type' => 'WebSite',
          '@id' => url('/') . '/#website',
          'url' => url('/'),
          'name' => 'DOZO Windows & Façades',
          'publisher' => [
            '@id' => url('/') . '/#organization'
          ]
        ],
        [
          '@type' => 'FAQPage',
          'mainEntity' => [
            [
              '@type' => 'Question',
              'name' => 'What are the core technical capabilities of DOZO Windows and Façades?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO systems fulfill key architectural criteria: AIR (wind pressure tested up to 3.0 kPa), WATER (tested up to 0.30 kPa for lifetime leak proofing), SOUND (noise cutoff of 20-45 dB), and THERMAL (10-12°C heat reduction with foam-filled profiles and Low-E glazing).'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What aluminum material and warranties does DOZO offer?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DOZO uses 6063-T6 Architectural Grade Aluminum with a 25-Year warranty, DURACOAT Super Durable Powder Coating (65-80 Microns) with a 15-Year warranty, 5-Year warranty on hardware, and available AMC (Annual Maintenance Contracts).'
              ]
            ],
            [
              '@type' => 'Question',
              'name' => 'What is the DOZO Sub-Frame amended system?',
              'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'The DOZO Sub-Frame is installed before civil masonry and plaster work to protect finishes, guarantee vertical alignment and squareness, enhance wind load transfer up to 3.0 kPa, and ensure a lifetime leak-proof seal.'
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

    <!-- HERO SECTION WITH INTEGRATED HEADER & 100% VIEWPORT HEIGHT -->
    <div class="hero-container w-full border-b border-gray-100">
        <!-- 5 Interactive Carousel Background Images with smooth crossfade -->
        <div class="hero-building-bg">
            @if(isset($heroSlides) && $heroSlides->count())
                @foreach($heroSlides as $idx => $slide)
                    <div id="heroBg{{ $idx }}" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out {{ $idx === 0 ? 'opacity-100' : 'opacity-0 pointer-events-none' }}">
                        <img src="{{ $slide->image }}" alt="{{ $slide->name }} - DOZO Architecture" class="w-full h-full">
                    </div>
                @endforeach
            @else
                <div id="heroBg0" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100">
                    <img src="/images/hero_building.jpg" alt="Design - DOZO Architecture" class="w-full h-full">
                </div>
                <div id="heroBg1" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
                    <img src="/images/hero_engineer.jpg" alt="Engineer - DOZO Façades" class="w-full h-full">
                </div>
                <div id="heroBg2" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
                    <img src="/images/hero_fabricate.jpg" alt="Fabricate - DOZO Precision" class="w-full h-full">
                </div>
                <div id="heroBg3" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
                    <img src="/images/hero_install.jpg" alt="Install - DOZO Turnkey" class="w-full h-full">
                </div>
                <div id="heroBg4" class="hero-bg-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
                    <img src="/images/hero_support.jpg" alt="Support - DOZO Care" class="w-full h-full">
                </div>
            @endif
        </div>

        <!-- TOP NAVIGATION BAR -->
        <header class="relative z-30 w-full shrink-0 pt-3 sm:pt-4 pb-2">
            <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-20">
                    <!-- Brand Logo (Enlarged) -->
                    <a href="/" class="flex items-center gap-2 group shrink-0">
                        <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 md:h-14 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.02]">
                    </a>

                    <!-- Desktop Navigation Links (More Prominent & Highly Visible) -->
                    <nav class="hidden lg:flex items-center gap-7 xl:gap-9 text-[15px] xl:text-[16px] font-semibold text-[#1a1d20]">
                        <a href="{{ route('home') }}" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Home</a>
                        <a href="{{ route('facade.index') }}" class="hover:text-sky-600 transition-colors">Façade</a>
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
                    <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">Home</a>
                    <a href="{{ route('facade.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Façades</a>
                    <a href="{{ route('windows.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Windows</a>
                    <a href="{{ route('products.index') }}" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">DOZO Products</a>
                    <a href="{{ $siteSettings['catalogue_url'] ?? '/catelogue.pdf' }}" target="_blank" class="py-1 border-b border-gray-100 flex items-center justify-between hover:text-sky-600">
                        <span>Downloads (Catalogue)</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                    <!-- <a href="#contact" onclick="toggleMobileMenu()" class="py-1 hover:text-sky-600">Contact</a> -->
                    
                    <div class="pt-2 flex flex-col gap-2">
                        <button type="button" onclick="toggleMobileMenu(); openQuoteModal();" class="w-full bg-[#1b1e23] text-white py-3 rounded-xl font-bold text-center text-sm shadow-md">
                            Get a Quote &rarr;
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- HERO MAIN BODY WITH INTERACTIVE CAROUSEL CONTENT -->
        <div id="home" class="relative z-10 max-w-[1340px] w-full mx-auto px-4 sm:px-6 lg:px-8 py-2 sm:py-4 flex-1 flex flex-col justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Hero Left: Dynamic Carousel Typography -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 mb-1.5 sm:mb-2.5">
                        <span id="heroEyebrow" class="text-[10.5px] sm:text-[11.5px] font-bold tracking-[0.16em] uppercase text-gray-400 transition-opacity duration-300">
                            {{ isset($heroSlides) && $heroSlides->first() ? $heroSlides->first()->eyebrow : 'Build A Better Tomorrow' }}
                        </span>
                    </div>

                    <!-- Exact Stacked Headline -->
                    <h1 id="heroHeadline" class="text-[32px] sm:text-[44px] lg:text-[min(4vw,54px)] tracking-[-0.035em] leading-[1.03] text-[#1a1d20] mb-2 sm:mb-3 uppercase transition-opacity duration-300">
                        <span class="font-black block">WINDOWS</span>
                        <span class="font-black block">FAÇADES</span>
                        <span class="font-light block text-[#25282d]">FOR A BRIGHTER</span>
                        <span class="font-light block text-[#25282d]">WORLD</span>
                    </h1>

                    <p id="heroDesc" class="text-gray-500 text-xs sm:text-[13.5px] lg:text-[14px] leading-relaxed max-w-md mb-4 sm:mb-5 transition-opacity duration-300">
                        {{ isset($heroSlides) && $heroSlides->first() ? $heroSlides->first()->desc : "Innovative. Sustainable. Elegant.\nComplete Building Envelope Solutions." }}
                    </p>

                    <!-- Dynamic CTA Button -->
                    <div class="flex items-center gap-3">
                        <a id="heroCta" href="{{ isset($heroSlides) && $heroSlides->first() ? $heroSlides->first()->cta_link : '#solutions' }}" class="inline-flex items-center gap-2.5 bg-[#1b1e23] hover:bg-black text-white text-xs sm:text-[12.5px] font-semibold px-5 sm:px-6 py-2.5 rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:gap-3.5">
                            <span id="heroCtaText">{{ isset($heroSlides) && $heroSlides->first() ? $heroSlides->first()->cta_text : 'Explore Our Solutions' }}</span>
                            <span class="text-sm">&rarr;</span>
                        </a>
                    </div>

                    <!-- Mobile Carousel Points Strip -->
                    <div class="flex lg:hidden items-center gap-2 mt-4 overflow-x-auto pb-1 scrollbar-none">
                        @if(isset($heroSlides) && $heroSlides->count())
                            @foreach($heroSlides as $idx => $slide)
                                <button type="button" onclick="setHeroSlide({{ $idx }})" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-bold {{ $idx === 0 ? 'bg-black text-white' : 'bg-gray-200/80 text-gray-700' }} shrink-0" data-idx="{{ $idx }}">{{ $slide->name }}</button>
                            @endforeach
                        @else
                            <button type="button" onclick="setHeroSlide(0)" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-bold bg-black text-white shrink-0" data-idx="0">Design</button>
                            <button type="button" onclick="setHeroSlide(1)" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-medium bg-gray-200/80 text-gray-700 shrink-0" data-idx="1">Engineer</button>
                            <button type="button" onclick="setHeroSlide(2)" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-medium bg-gray-200/80 text-gray-700 shrink-0" data-idx="2">Fabricate</button>
                            <button type="button" onclick="setHeroSlide(3)" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-medium bg-gray-200/80 text-gray-700 shrink-0" data-idx="3">Install</button>
                            <button type="button" onclick="setHeroSlide(4)" class="mob-hero-btn px-2.5 py-1 rounded-full text-[11px] font-medium bg-gray-200/80 text-gray-700 shrink-0" data-idx="4">Support</button>
                        @endif
                    </div>
                </div>

                <!-- Hero Right: Interactive 5 Pillars Carousel Menu (Design, Engineer, Fabricate, Install, Support) -->
                <div class="lg:col-span-5 hidden lg:flex flex-col justify-between items-end h-[280px] xl:h-[320px] text-right pr-4 z-20">
                    <!-- Clickable Carousel Points -->
                    <div class="space-y-1 drop-shadow-md">
                        @if(isset($heroSlides) && $heroSlides->count())
                            @foreach($heroSlides as $idx => $slide)
                                <button type="button" onclick="setHeroSlide({{ $idx }})" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 {{ $idx === 0 ? 'text-white font-bold' : 'text-white/70 hover:text-white font-medium' }}" data-index="{{ $idx }}">
                                    <span class="inline-block pb-0.5 border-b {{ $idx === 0 ? 'border-white' : 'border-transparent' }}">{{ $slide->name }}</span>
                                </button>
                            @endforeach
                        @else
                            <button type="button" onclick="setHeroSlide(0)" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white font-bold" data-index="0">
                                <span class="inline-block pb-0.5 border-b border-white">Design</span>
                            </button>
                            <button type="button" onclick="setHeroSlide(1)" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white/70 hover:text-white font-medium" data-index="1">
                                <span class="inline-block pb-0.5 border-b border-transparent">Engineer</span>
                            </button>
                            <button type="button" onclick="setHeroSlide(2)" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white/70 hover:text-white font-medium" data-index="2">
                                <span class="inline-block pb-0.5 border-b border-transparent">Fabricate</span>
                            </button>
                            <button type="button" onclick="setHeroSlide(3)" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white/70 hover:text-white font-medium" data-index="3">
                                <span class="inline-block pb-0.5 border-b border-transparent">Install</span>
                            </button>
                            <button type="button" onclick="setHeroSlide(4)" class="hero-point-btn block w-full text-right text-[13px] sm:text-[14px] transition-all duration-300 text-white/70 hover:text-white font-medium" data-index="4">
                                <span class="inline-block pb-0.5 border-b border-transparent">Support</span>
                            </button>
                        @endif
                    </div>

                    <!-- Bottom Right Badge -->
                    <div class="text-white/90 font-medium text-[11.5px] sm:text-[12px] leading-tight drop-shadow-md pointer-events-none">
                        <div>Architecture</div>
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

    <!-- OUR SOLUTIONS SECTION -->
    <section id="solutions" class="py-12 sm:py-16 bg-white border-y border-gray-100">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        OUR SOLUTIONS
                    </h2>
                    <span class="accent-blue-line"></span>
                </div>
                <p class="text-xs sm:text-sm text-gray-500 font-normal">
                    Two Divisions. One Vision.
                </p>
            </div>

            <!-- Two Division Cards Grid with Automatic Sideways Image Sliding -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
                
                <!-- DIVISION 1: DOZO WINDOWS -->
                <div id="windows" class="flex flex-col rounded-none">
                    <!-- Image Card with Horizontal Auto-Sliding Reel (No Border Radius) -->
                    <div class="relative h-[320px] sm:h-[390px] w-full rounded-none overflow-hidden group shadow-xs">
                        @php
                            $winImages = (isset($solutions) && isset($solutions['windows']) && is_array($solutions['windows']->images)) ? $solutions['windows']->images : [
                                '/images/solution_windows.jpg',
                                '/images/solution_windows_2.jpg',
                                '/images/solution_windows_3.jpg',
                                '/images/solution_windows_4.jpg',
                            ];
                            $winCount = max(1, count($winImages));
                        @endphp
                        <!-- Horizontal Slider Track -->
                        <div id="windowsSliderTrack" class="flex h-full rounded-none transition-transform duration-700 ease-out" style="width: {{ $winCount * 100 }}%;">
                            @foreach($winImages as $wImg)
                                <div class="h-full shrink-0 relative rounded-none" style="width: {{ 100 / $winCount }}%;">
                                    <img src="{{ $wImg }}" alt="DOZO Windows Luxury Living" class="w-full h-full object-cover object-center rounded-none">
                                </div>
                            @endforeach
                        </div>

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/10 pointer-events-none z-10 rounded-none"></div>

                        <!-- Text Overlay at Bottom Left -->
                        <div class="absolute bottom-6 left-6 right-6 text-white z-20">
                            <div class="text-[11px] font-bold tracking-[0.14em] uppercase text-white/90 mb-0.5">
                                {{ isset($solutions['windows']) ? $solutions['windows']->eyebrow : 'DOZO' }}
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2 leading-tight">
                                {{ isset($solutions['windows']) ? $solutions['windows']->title : 'Windows' }}
                            </h3>
                            <p class="text-xs sm:text-[13px] text-gray-200 font-normal max-w-sm mb-4 leading-relaxed">
                                {{ isset($solutions['windows']) ? $solutions['windows']->desc : 'Engineered for comfort, performance and modern living.' }}
                            </p>
                            <a href="{{ isset($solutions['windows']) && $solutions['windows']->cta_link && $solutions['windows']->cta_link !== '#featured-products' ? $solutions['windows']->cta_link : route('windows.index') }}" class="inline-flex items-center gap-2 border border-white/60 bg-black/30 hover:bg-white text-white hover:text-black backdrop-blur-xs text-xs font-semibold px-4 py-1.5 rounded-full transition-all duration-200 shadow-sm">
                                <span>{{ isset($solutions['windows']) ? $solutions['windows']->cta_text : 'Explore Windows' }}</span>
                                <span class="text-sm">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- 5 Feature Badges Row -->
                    <div class="pt-5 pb-2 bg-white">
                        <div class="grid grid-cols-5 gap-1 text-center">
                            <!-- Feature 1: Thermal Insulation -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18c-3.866 0-7 3.134-7 7 0 2.5 1.5 4.5 3.5 6m3.5-13c3.866 0 7 3.134 7 7 0 2.5-1.5 4.5-3.5 6M8.5 16l3.5 5 3.5-5"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7a3 3 0 0 1 6 0"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Thermal<br>Insulation</span>
                            </div>

                            <!-- Feature 2: Sound Reduction -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5L6 9H2v6h4l5 4V5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.54 8.46a5 5 0 0 1 0 7.07m3.53-10.6a10 10 0 0 1 0 14.14"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Sound<br>Reduction</span>
                            </div>

                            <!-- Feature 3: Weather Resistance -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 0 0 4 4h10a4 4 0 1 0-.1-7.999 5 5 0 0 0-9.8 1.999A4 4 0 0 0 3 15z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v2m3-2v2m3-2v2"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Weather<br>Resistance</span>
                            </div>

                            <!-- Feature 4: Sleek Design -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <rect x="3" y="3" width="18" height="18" rx="1.5"/>
                                        <rect x="6" y="6" width="12" height="12" rx="0.5" stroke-width="1.2"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Sleek<br>Design</span>
                            </div>

                            <!-- Feature 5: Long Lasting -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Long<br>Lasting</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DIVISION 2: DOZO FACADE -->
                <div id="facade" class="flex flex-col rounded-none">
                    <!-- Image Card with Horizontal Auto-Sliding Reel (No Border Radius) -->
                    <div class="relative h-[320px] sm:h-[390px] w-full rounded-none overflow-hidden group shadow-xs">
                        @php
                            $facImages = (isset($solutions) && isset($solutions['facade']) && is_array($solutions['facade']->images)) ? $solutions['facade']->images : [
                                '/images/solution_facade.jpg',
                                '/images/solution_facade_2.jpg',
                                '/images/solution_facade_3.jpg',
                                '/images/solution_facade_4.jpg',
                            ];
                            $facCount = max(1, count($facImages));
                        @endphp
                        <!-- Horizontal Slider Track -->
                        <div id="facadeSliderTrack" class="flex h-full rounded-none transition-transform duration-700 ease-out" style="width: {{ $facCount * 100 }}%;">
                            @foreach($facImages as $fImg)
                                <div class="h-full shrink-0 relative rounded-none" style="width: {{ 100 / $facCount }}%;">
                                    <img src="{{ $fImg }}" alt="DOZO Façade Architecture" class="w-full h-full object-cover object-center rounded-none">
                                </div>
                            @endforeach
                        </div>

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/10 pointer-events-none z-10 rounded-none"></div>

                        <!-- Text Overlay at Bottom Left -->
                        <div class="absolute bottom-6 left-6 right-6 text-white z-20">
                            <div class="text-[11px] font-bold tracking-[0.14em] uppercase text-white/90 mb-0.5">
                                {{ isset($solutions['facade']) ? $solutions['facade']->eyebrow : 'DOZO' }}
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2 leading-tight">
                                {{ isset($solutions['facade']) ? $solutions['facade']->title : 'Façade' }}
                            </h3>
                            <p class="text-xs sm:text-[13px] text-gray-200 font-normal max-w-sm mb-4 leading-relaxed">
                                {{ isset($solutions['facade']) ? $solutions['facade']->desc : 'Architectural freedom with precision and durability.' }}
                            </p>
                            <a href="{{ isset($solutions['facade']) && $solutions['facade']->cta_link && $solutions['facade']->cta_link !== '#featured-products' ? $solutions['facade']->cta_link : route('facade.index') }}" class="inline-flex items-center gap-2 border border-white/60 bg-black/30 hover:bg-white text-white hover:text-black backdrop-blur-xs text-xs font-semibold px-4 py-1.5 rounded-full transition-all duration-200 shadow-sm">
                                <span>{{ isset($solutions['facade']) ? $solutions['facade']->cta_text : 'Explore Facade' }}</span>
                                <span class="text-sm">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- 5 Feature Badges Row -->
                    <div class="pt-5 pb-2 bg-white">
                        <div class="grid grid-cols-5 gap-1 text-center">
                            <!-- Feature 1: Façade Cladding -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <rect x="3" y="3" width="18" height="18" rx="1.5"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 3v18M13 3v18M18 3v18M3 8h18M3 13h18M3 18h18" stroke-dasharray="1 2"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Façade<br>Cladding</span>
                            </div>

                            <!-- Feature 2: Architectural Panels -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l9 5-9 5-9-5 9-5zM3 7v10l9 5 9-5V7M12 12v10"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 9.5l5 2.8 5-2.8" stroke-dasharray="1 2"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Architectural<br>Panels</span>
                            </div>

                            <!-- Feature 3: Louvers & Sun Shades -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6l16-3M4 11l16-3M4 16l16-3M4 21l16-3"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Louvers &<br>Sun Shades</span>
                            </div>

                            <!-- Feature 4: Flashings & Accessories -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2L2 7l10 5 10-5-10-5zM2 12l10 5 10-5M2 17l10 5 10-5"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Flashings &<br>Accessories</span>
                            </div>

                            <!-- Feature 5: Custom Fabrication -->
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 flex items-center justify-center text-sky-600 mb-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                        <circle cx="12" cy="11" r="3"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5v1M12 13.5v1M8.5 11h1M14.5 11h1"/>
                                    </svg>
                                </div>
                                <span class="text-[11px] font-medium text-gray-700 leading-tight">Custom<br>Fabrication</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- DIVISION 3 / FULL-WIDTH CAROUSEL: DOZO PRODUCTS -->
            <div id="products-division" class="w-full flex flex-col rounded-none mt-8 lg:mt-10">
                <!-- Image Card with Horizontal Auto-Sliding Reel (No Border Radius) -->
                <div class="relative h-[320px] sm:h-[400px] w-full rounded-none overflow-hidden group shadow-xs">
                    @php
                        $prodImages = (isset($solutions) && isset($solutions['products']) && is_array($solutions['products']->images)) ? $solutions['products']->images : [
                            '/images/hero_building.jpg',
                            '/images/prod_sliding_window.jpg',
                            '/images/proj_residential_tower.jpg',
                            '/images/solution_windows_3.jpg',
                        ];
                        $prodCount = max(1, count($prodImages));
                    @endphp
                    <!-- Horizontal Slider Track -->
                    <div id="productsSliderTrack" class="flex h-full rounded-none transition-transform duration-700 ease-out" style="width: {{ $prodCount * 100 }}%;">
                        @foreach($prodImages as $pImg)
                            <div class="h-full shrink-0 relative rounded-none" style="width: {{ 100 / $prodCount }}%;">
                                <img src="{{ $pImg }}" alt="DOZO Full Width Products Reel" class="w-full h-full object-cover object-center rounded-none">
                            </div>
                        @endforeach
                    </div>

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/10 pointer-events-none z-10 rounded-none"></div>

                    <!-- Text Overlay at Bottom Left -->
                    <div class="absolute bottom-6 left-6 right-6 text-white z-20">
                        <div class="text-[11px] font-bold tracking-[0.14em] uppercase text-white/90 mb-0.5">
                            {{ isset($solutions['products']) ? $solutions['products']->eyebrow : 'DOZO' }}
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2 leading-tight">
                            {{ isset($solutions['products']) ? $solutions['products']->title : 'Products' }}
                        </h3>
                        <p class="text-xs sm:text-[13px] text-gray-200 font-normal max-w-xl mb-4 leading-relaxed">
                            {{ isset($solutions['products']) ? $solutions['products']->desc : 'Comprehensive portfolio of premium aluminum windows, high-performance façade systems, and bespoke architectural solutions.' }}
                        </p>
                        <a href="{{ isset($solutions['products']) ? $solutions['products']->cta_link : '#featured-products' }}" class="inline-flex items-center gap-2 border border-white/60 bg-black/30 hover:bg-white text-white hover:text-black backdrop-blur-xs text-xs font-semibold px-4 py-1.5 rounded-full transition-all duration-200 shadow-sm">
                            <span>{{ isset($solutions['products']) ? $solutions['products']->cta_text : 'Explore Products' }}</span>
                            <span class="text-sm">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DOZO WINDOWS SECTION -->
    <section id="featured-products" class="py-12 sm:py-16 bg-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        DOZO WINDOWS
                    </h2>
                    <span class="w-10 sm:w-12 h-[2.5px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="{{ route('windows.index') }}" class="text-xs sm:text-sm font-semibold text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All</span>
                    <span class="text-[#3b82f6] text-base">&rarr;</span>
                </a>
            </div>

            <!-- Dynamic 4 Big Product Cards in One Row (Zero Border Radius) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @if(isset($windowProducts) && $windowProducts->count())
                    @foreach($windowProducts as $prod)
                        @php
                            $isDark = ($prod->theme === 'dark');
                        @endphp
                        <div class="group flex flex-col {{ $isDark ? 'bg-[#161e27] border-gray-800 text-white' : 'bg-white border-gray-200/90 text-gray-900' }} border rounded-none overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300"
                             onclick="openProductModal('{{ addslashes($prod->name) }}', '{{ addslashes($prod->short_desc) }}', '{{ addslashes($prod->material_grade) }}', '{{ addslashes($prod->finish_options) }}', '{{ addslashes($prod->acoustic_rating) }}', '{{ addslashes($prod->wind_load) }}')">
                            <div class="aspect-[4/3.2] w-full rounded-none overflow-hidden {{ $isDark ? 'bg-[#0d131a]' : 'bg-[#f0f2f5]' }}">
                                <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
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
                        </div>
                    @endforeach
                @else
                    <!-- Fallback Static Cards -->
                    <div class="group flex flex-col bg-white border border-gray-200/90 rounded-none overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300" onclick="openProductModal('Sliding Window System', 'Premium multi-track sliding aluminum window system engineered for ultra-smooth operation, expansive glass views, and superior weather tightness.')">
                        <div class="aspect-[4/3.2] w-full rounded-none overflow-hidden bg-[#f0f2f5]">
                            <img src="/images/prod_sliding_window.jpg" alt="Sliding Window" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 flex items-center justify-between bg-white border-t border-gray-100 rounded-none">
                            <span class="text-sm sm:text-[15px] font-bold text-[#1a1d20] truncate">Sliding Window</span>
                            <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- DOZO PRODUCTS SECTION -->
    <section id="projects" class="py-12 sm:py-16 bg-white border-t border-gray-100">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        DOZO PRODUCTS
                    </h2>
                    <span class="w-10 sm:w-12 h-[2.5px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="{{ route('products.index') }}" class="text-xs sm:text-sm font-semibold text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All</span>
                    <span class="text-[#3b82f6] text-base">&rarr;</span>
                </a>
            </div>

            <!-- Dynamic 4 Big Product Cards in One Row (Zero Border Radius - Original Clean Showcase Style) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @if(isset($dozoProducts) && $dozoProducts->count())
                    @foreach($dozoProducts as $prod)
                        <div class="group flex flex-col bg-white rounded-none overflow-hidden cursor-pointer" onclick="openProductModal('{{ addslashes($prod->name) }}', '{{ addslashes($prod->short_desc) }}', '{{ addslashes($prod->material_grade) }}', '{{ addslashes($prod->finish_options) }}', '{{ addslashes($prod->acoustic_rating) }}', '{{ addslashes($prod->wind_load) }}')">
                            <div class="aspect-[16/11] w-full rounded-none overflow-hidden bg-[#f0f2f5]">
                                <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="pt-3 pb-1">
                                <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">{{ $prod->name }}</h4>
                                <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">{{ $prod->productCategory->name ?? $prod->category ?? 'Architectural System' }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback Static Product Card -->
                    <div class="group flex flex-col bg-white rounded-none overflow-hidden cursor-pointer" onclick="openProductModal('Unitized Glass Façade', 'Engineered architectural unitized curtain wall glazing systems.')">
                        <div class="aspect-[16/11] w-full rounded-none overflow-hidden bg-[#f0f2f5]">
                            <img src="/images/prod_unitized_facade.jpg" alt="Unitized Glass Facade" class="w-full h-full object-cover rounded-none group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="pt-3 pb-1">
                            <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20]">Unitized Glass Façade</h4>
                            <p class="text-xs sm:text-[13px] text-gray-500 mt-0.5">Commercial Curtain Wall</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE DOZO & STORY VIDEO SECTION -->
    <section id="about" class="py-10 sm:py-12 bg-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center gap-3 mb-8">
                <h2 class="text-lg sm:text-xl font-bold tracking-tight text-[#1a1d20] uppercase">
                    WHY CHOOSE DOZO
                </h2>
                <span class="w-8 sm:w-10 h-[2px] bg-[#3b82f6] inline-block"></span>
            </div>

            <!-- Two-Column Layout: 6 Icons + Video Banner -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-6 items-center">
                
                <!-- Left: 6 Icons Grid (exact shapes as reference) -->
                <div class="lg:col-span-7">
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-3 sm:gap-2 text-center">
                        
                        <!-- 1. Premium Quality -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.5l7 3.5v6c0 5-3.5 8.8-7 10.5-3.5-1.7-7-5.5-7-10.5V6l7-3.5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7l4 3-2 4h-4l-2-4 4-3z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Premium<br>Quality</span>
                        </div>

                        <!-- 2. Innovative Solutions -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C8 7.5 6 11 6 15a6 6 0 0 0 12 0c0-4-2-7.5-6-12z"/>
                                    <circle cx="10" cy="13" r="0.75" fill="currentColor"/>
                                    <circle cx="14" cy="13" r="0.75" fill="currentColor"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 15.5a2.5 2.5 0 0 0 5 0"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Innovative<br>Solutions</span>
                        </div>

                        <!-- 3. Energy Efficient -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C7.5 7.5 5.5 11 5.5 15a6.5 6.5 0 0 0 13 0c0-4-2-7.5-6.5-12z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5v9.5M12 11.5l3.5-2.5M12 14.5l-3.5-2.5"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Energy<br>Efficient</span>
                        </div>

                        <!-- 4. Aesthetic Design -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.5l7 3.5v6c0 5-3.5 8.8-7 10.5-3.5-1.7-7-5.5-7-10.5V6l7-3.5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.5v17.5M5.5 8.5L12 13l6.5-4.5"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Aesthetic<br>Design</span>
                        </div>

                        <!-- 5. Expert Installation -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Expert<br>Installation</span>
                        </div>

                        <!-- 6. Dedicated Support -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 flex items-center justify-center text-gray-700 mb-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.3">
                                    <circle cx="12" cy="12" r="8.5"/>
                                    <circle cx="12" cy="12" r="4"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-800 leading-tight">Dedicated<br>Support</span>
                        </div>

                    </div>
                </div>

                <!-- Right: "Turning Architectural Visions into Reality" Story Card -->
                <div class="lg:col-span-5">
                    <div class="relative h-[170px] sm:h-[185px] overflow-hidden bg-[#161e27] text-white shadow-md group cursor-pointer" onclick="openVideoModal()">
                        <img src="/images/story_banner.jpg" alt="Turning Architectural Visions into Reality" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>

                        <div class="absolute inset-0 p-5 sm:p-6 flex flex-col justify-center">
                            <h3 class="text-base sm:text-lg lg:text-[19px] font-bold tracking-tight text-white mb-4 max-w-xs leading-snug">
                                Turning<br>
                                Architectural Visions<br>
                                into Reality
                            </h3>
                            
                            <div class="inline-flex items-center gap-2.5 text-white group-hover:text-gray-200 transition-colors">
                                <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white text-black flex items-center justify-center shadow-md shrink-0">
                                    <svg class="w-3 sm:w-3.5 h-3 sm:h-3.5 fill-black ml-0.5" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </span>
                                <span class="text-xs sm:text-[12.5px] font-semibold text-white tracking-wide">Watch Our Story</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- MOBILE FEATURED PROJECT -->
    <section class="sm:hidden py-6 bg-white border-y border-gray-100">
        <div class="max-w-[1340px] mx-auto px-4">
            
            <h3 class="text-sm font-bold text-sky-700 mb-3">Featured Project</h3>

            <div class="rounded-none overflow-hidden border border-gray-100 bg-white shadow-sm">
                <div class="h-48 rounded-none overflow-hidden">
                    <img id="mobProjImg" src="/images/proj_commercial_complex.jpg" alt="Commercial Complex Bangalore" class="w-full h-full object-cover rounded-none">
                </div>
                <div class="p-4 text-center">
                    <h4 id="mobProjTitle" class="text-sm font-bold text-gray-900">Commercial Complex</h4>
                    <p id="mobProjLoc" class="text-[11px] text-gray-500 mt-0.5">Bangalore</p>
                    
                    <!-- Carousel Dots -->
                    <div class="flex items-center justify-center gap-1.5 mt-2.5 mb-3.5">
                        <button onclick="changeMobProject(0)" class="w-1.5 h-1.5 rounded-full bg-[#0284c7] m-dot" aria-label="1"></button>
                        <button onclick="changeMobProject(1)" class="w-1.5 h-1.5 rounded-full bg-gray-300 m-dot" aria-label="2"></button>
                        <button onclick="changeMobProject(2)" class="w-1.5 h-1.5 rounded-full bg-gray-300 m-dot" aria-label="3"></button>
                        <button onclick="changeMobProject(3)" class="w-1.5 h-1.5 rounded-full bg-gray-300 m-dot" aria-label="4"></button>
                        <button onclick="changeMobProject(4)" class="w-1.5 h-1.5 rounded-full bg-gray-300 m-dot" aria-label="5"></button>
                    </div>

                    <a href="#projects" class="block w-full bg-[#1b1e23] text-white text-xs font-semibold py-2.5 rounded-none text-center">
                        View All Projects &rarr;
                    </a>
                </div>
            </div>

        </div>
    </section>

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
                                <option value="Both Windows & Façade" selected>Both Windows & Façade</option>
                                <option value="DOZO Windows">DOZO Windows</option>
                                <option value="DOZO Façade Systems">DOZO Façade Systems</option>
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
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                
                <div class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-sky-600 mb-0.5 sm:mb-1">Specification &amp; Overview</div>
                <h3 id="modalProductTitle" class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-2 leading-tight">Product Title</h3>
                <p id="modalProductDesc" class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-4 sm:mb-5">Product details description.</p>

                <div class="bg-gray-50 rounded-2xl p-3.5 sm:p-4 border border-gray-100 mb-4 sm:mb-5 space-y-2">
                    <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                        <span class="text-gray-500">Material / Type:</span>
                        <span id="modalProductMaterial" class="font-semibold text-gray-800">Architectural T6 Aluminum</span>
                    </div>
                    <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                        <span class="text-gray-500">Finish / Scope:</span>
                        <span id="modalProductFinish" class="font-semibold text-gray-800">PVDF Coating / Anodized</span>
                    </div>
                    <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                        <span class="text-gray-500">Acoustic / Status:</span>
                        <span id="modalProductAcoustic" class="font-semibold text-gray-800">Up to 42 dB Isolation</span>
                    </div>
                    <div class="flex justify-between text-xs py-1">
                        <span class="text-gray-500">Wind Load / Progress:</span>
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

    <!-- INTERACTIVE MODAL: VIDEO STORY -->
    <div id="videoModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/80 backdrop-blur-md p-3 sm:p-4 md:p-6" onclick="if(event.target === this) closeVideoModal()">
        <div class="min-h-full flex items-center justify-center py-4 sm:py-6" onclick="if(event.target === this) closeVideoModal()">
            <div class="bg-black rounded-2xl sm:rounded-3xl max-w-2xl w-full p-3 sm:p-5 md:p-6 shadow-2xl relative border border-gray-800 my-auto" onclick="event.stopPropagation()">
                <button type="button" onclick="closeVideoModal()" class="absolute -top-3 -right-3 text-white bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition-colors z-20" aria-label="Close modal">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <div class="aspect-video w-full rounded-xl sm:rounded-2xl overflow-hidden bg-gray-950 flex items-center justify-center">
                    @if(!empty($siteSettings['story_video_url']))
                        <iframe class="w-full h-full" src="{{ $siteSettings['story_video_url'] }}" title="DOZO Architectural Story" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <div class="text-center p-6 text-white">
                            <div class="w-14 h-14 rounded-full bg-sky-500/20 text-sky-400 border border-sky-400/40 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 fill-current ml-1" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold mb-1">DOZO Architectural Story</h4>
                            <p class="text-xs text-gray-400 max-w-sm mx-auto">Discover how DOZO integrates cutting-edge engineering with sustainable facade architecture across India.</p>
                        </div>
                    @endif
                </div>
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
                    <input id="searchInput" type="text" placeholder="Search products, facade systems, projects..." class="w-full text-sm focus:outline-none text-gray-800 placeholder-gray-400">
                    <button type="button" onclick="closeSearchModal()" class="text-xs font-semibold text-gray-500 hover:text-black bg-gray-100 px-2 py-1 rounded-md">
                        ESC
                    </button>
                </div>
                <div class="mt-3 space-y-2 text-xs sm:text-sm text-gray-600">
                    <div class="p-2 rounded-lg hover:bg-gray-50 cursor-pointer" onclick="closeSearchModal(); location.href='#windows';">
                        <div class="font-bold text-gray-800">DOZO Sliding &amp; Casement Windows</div>
                        <div class="text-[11px] text-gray-400">Thermal insulation, acoustic reduction, weather resistant systems</div>
                    </div>
                    <div class="p-2 rounded-lg hover:bg-gray-50 cursor-pointer" onclick="closeSearchModal(); location.href='#facade';">
                        <div class="font-bold text-gray-800">Unitized Glass &amp; Perforated Façade</div>
                        <div class="text-[11px] text-gray-400">Architectural cladding, sun shades, commercial curtain walls</div>
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
                alert(data.message || 'Thank you! Your quote inquiry has been submitted. Our engineering team will contact you shortly.');
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

        function openVideoModal() {
            document.getElementById('videoModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeVideoModal() {
            document.getElementById('videoModal').classList.add('hidden');
            document.body.style.overflow = '';
        }

        function openSearchModal() {
            document.getElementById('searchModal').classList.remove('hidden');
            document.getElementById('searchInput').focus();
        }
        function closeSearchModal() {
            document.getElementById('searchModal').classList.add('hidden');
        }

        // Mobile Project Carousel
        const mobProjects = [
            { title: "Commercial Complex", location: "Bangalore", img: "/images/proj_commercial_complex.jpg" },
            { title: "Residential Tower", location: "Kolkata", img: "/images/proj_residential_tower.jpg" },
            { title: "IT Park", location: "Hyderabad", img: "/images/proj_it_park.jpg" },
            { title: "Luxury Residence", location: "Goa", img: "/images/proj_luxury_residence.jpg" },
            { title: "Institutional Building", location: "Delhi", img: "/images/proj_institutional_delhi.jpg" }
        ];

        function changeMobProject(idx) {
            const p = mobProjects[idx];
            if (!p) return;
            document.getElementById('mobProjTitle').innerText = p.title;
            document.getElementById('mobProjLoc').innerText = p.location;
            document.getElementById('mobProjImg').src = p.img;
            
            const dots = document.querySelectorAll('.m-dot');
            dots.forEach((dot, i) => {
                dot.className = i === idx ? 'w-1.5 h-1.5 rounded-full bg-[#0284c7] m-dot' : 'w-1.5 h-1.5 rounded-full bg-gray-300 m-dot';
            });
        }

        @php
            $heroSlidesJson = (isset($heroSlides) && $heroSlides->count()) ? $heroSlides->map(function($s) {
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

        // Hero 5-Pillar Carousel Controller (Dynamic CMS)
        const heroSlides = {!! $heroSlidesJson ? json_encode($heroSlidesJson) : json_encode([
            [
                'name' => 'Design',
                'eyebrow' => 'Build A Better Tomorrow',
                'headline' => '<span class="font-black block">WINDOWS</span><span class="font-black block">FAÇADES</span><span class="font-light block text-[#25282d]">FOR A BRIGHTER</span><span class="font-light block text-[#25282d]">WORLD</span>',
                'desc' => "Innovative. Sustainable. Elegant.<br>Complete Building Envelope Solutions.",
                'ctaText' => 'Explore Our Solutions',
                'ctaLink' => '#solutions'
            ],
            [
                'name' => 'Engineer',
                'eyebrow' => 'Structural Precision & Performance',
                'headline' => '<span class="font-black block">PRECISION</span><span class="font-black block">ENGINEERED</span><span class="font-light block text-[#25282d]">FOR STRUCTURAL</span><span class="font-light block text-[#25282d]">MASTERY</span>',
                'desc' => "High wind-load structural simulations, seismic resistance, acoustic damping, and advanced thermal boundary modeling.",
                'ctaText' => 'Discover Engineering Specs',
                'ctaLink' => '#facade'
            ],
            [
                'name' => 'Fabricate',
                'eyebrow' => 'Automated CNC Manufacturing',
                'headline' => '<span class="font-black block">ADVANCED</span><span class="font-black block">FABRICATION</span><span class="font-light block text-[#25282d]">TO EUROPEAN</span><span class="font-light block text-[#25282d]">STANDARDS</span>',
                'desc' => "State-of-the-art automated CNC milling, robotic corner crimping, and precision pre-glazed unitized curtain wall assembly.",
                'ctaText' => 'Explore Product Quality',
                'ctaLink' => '#featured-products'
            ],
            [
                'name' => 'Install',
                'eyebrow' => 'Turnkey Site Execution',
                'headline' => '<span class="font-black block">SEAMLESS</span><span class="font-black block">INSTALLATION</span><span class="font-light block text-[#25282d]">ON TIME &</span><span class="font-light block text-[#25282d]">ON BUDGET</span>',
                'desc' => "Certified facade engineers delivering zero-leakage, airtight fixing, and rigorous on-site quality assurance across India.",
                'ctaText' => 'View Featured Projects',
                'ctaLink' => '#projects'
            ],
            [
                'name' => 'Support',
                'eyebrow' => 'Lifelong Post-Handover Care',
                'headline' => '<span class="font-black block">DEDICATED</span><span class="font-black block">SUPPORT</span><span class="font-light block text-[#25282d]">WARRANTY &</span><span class="font-light block text-[#25282d]">MAINTENANCE</span>',
                'desc' => "Comprehensive multi-year warranty, regular architectural facade audits, and 24/7 responsive technical engineering support.",
                'ctaText' => 'Contact Our Engineers',
                'ctaLink' => '#contact'
            ]
        ]) !!};

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

            // 2. Update Desktop Point Buttons (Design, Engineer, Fabricate, Install, Support)
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
                if (ctaLinkEl) ctaLinkEl.href = slide.ctaLink;
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

        // DOZO Windows Sideways Auto-Slider
        let winSlideIdx = 0;
        let winTimer = null;

        function setWindowsSlide(idx) {
            winSlideIdx = idx;
            const track = document.getElementById('windowsSliderTrack');
            if (track && track.children.length > 0) {
                const step = 100 / track.children.length;
                track.style.transform = `translateX(-${idx * step}%)`;
            }
        }

        function autoAdvanceWindows() {
            const track = document.getElementById('windowsSliderTrack');
            const total = track ? track.children.length : 1;
            winSlideIdx = (winSlideIdx + 1) % total;
            setWindowsSlide(winSlideIdx);
        }

        winTimer = setInterval(autoAdvanceWindows, 4200);

        // DOZO Facade Sideways Auto-Slider (Staggered offset)
        let facSlideIdx = 0;
        let facTimer = null;

        function setFacadeSlide(idx) {
            facSlideIdx = idx;
            const track = document.getElementById('facadeSliderTrack');
            if (track && track.children.length > 0) {
                const step = 100 / track.children.length;
                track.style.transform = `translateX(-${idx * step}%)`;
            }
        }

        function autoAdvanceFacade() {
            const track = document.getElementById('facadeSliderTrack');
            const total = track ? track.children.length : 1;
            facSlideIdx = (facSlideIdx + 1) % total;
            setFacadeSlide(facSlideIdx);
        }

        // Delay initial start of facade slider so they alternate smoothly
        setTimeout(() => {
            facTimer = setInterval(autoAdvanceFacade, 4200);
        }, 2100);

        // DOZO Products Sideways Auto-Slider (Staggered offset)
        let prodSlideIdx = 0;
        let prodTimer = null;

        function setProductsSlide(idx) {
            prodSlideIdx = idx;
            const track = document.getElementById('productsSliderTrack');
            if (track && track.children.length > 0) {
                const step = 100 / track.children.length;
                track.style.transform = `translateX(-${idx * step}%)`;
            }
        }

        function autoAdvanceProducts() {
            const track = document.getElementById('productsSliderTrack');
            const total = track ? track.children.length : 1;
            prodSlideIdx = (prodSlideIdx + 1) % total;
            setProductsSlide(prodSlideIdx);
        }

        setTimeout(() => {
            prodTimer = setInterval(autoAdvanceProducts, 4200);
        }, 1050);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeProductModal();
                closeVideoModal();
                closeSearchModal();
            }
        });
    </script>
</body>
</html>
