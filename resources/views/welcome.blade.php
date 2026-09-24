<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOZO - Windows & Façades | Architectural Building Envelope Solutions</title>
    <meta name="description" content="Innovative. Sustainable. Elegant. Complete Building Envelope Solutions with DOZO Windows and Architectural Façades.">

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

        /* Hero 100% Viewport Height */
        .hero-container {
            background-color: #fbfbfb;
            position: relative;
            height: 100vh;
            height: 100dvh;
            min-height: 580px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
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
            .hero-building-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: right bottom;
                -webkit-mask-image: linear-gradient(90deg, transparent 0%, transparent 26%, rgba(0, 0, 0, 0.45) 40%, rgba(0, 0, 0, 0.9) 55%, black 75%);
                mask-image: linear-gradient(90deg, transparent 0%, transparent 26%, rgba(0, 0, 0, 0.45) 40%, rgba(0, 0, 0, 0.9) 55%, black 75%);
            }
        }

        @media (max-width: 1023px) {
            .hero-building-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center bottom;
                opacity: 0.35;
            }
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white">

    <!-- HERO SECTION WITH INTEGRATED HEADER & 100% VIEWPORT HEIGHT -->
    <div class="hero-container w-full border-b border-gray-100">
        <!-- Full building background element with custom gradient mask -->
        <div class="hero-building-bg">
            <img src="/images/hero_building.jpg" alt="DOZO Windows & Facades Architecture" class="w-full h-full">
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
                        <a href="#home" class="text-black font-bold hover:text-sky-600 transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Home</a>
                        <a href="#windows" class="hover:text-sky-600 transition-colors">Windows</a>
                        <a href="#facade" class="hover:text-sky-600 transition-colors">Facade</a>
                        <a href="#about" class="hover:text-sky-600 transition-colors">About Us</a>
                        <a href="#projects" class="hover:text-sky-600 transition-colors">Projects</a>
                        <a href="/catelogue.pdf" target="_blank" class="hover:text-sky-600 transition-colors flex items-center gap-1">
                            Downloads
                        </a>
                        <a href="#contact" class="hover:text-sky-600 transition-colors">Contact</a>
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
                    <a href="#home" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">Home</a>
                    <a href="#windows" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">Windows</a>
                    <a href="#facade" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">Facade</a>
                    <a href="#about" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">About Us</a>
                    <a href="#projects" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100 hover:text-sky-600">Projects</a>
                    <a href="/catelogue.pdf" target="_blank" class="py-1 border-b border-gray-100 flex items-center justify-between hover:text-sky-600">
                        <span>Downloads (Catalogue)</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                    <a href="#contact" onclick="toggleMobileMenu()" class="py-1 hover:text-sky-600">Contact</a>
                    
                    <div class="pt-2 flex flex-col gap-2">
                        <button type="button" onclick="toggleMobileMenu(); openQuoteModal();" class="w-full bg-[#1b1e23] text-white py-3 rounded-xl font-bold text-center text-sm shadow-md">
                            Get a Quote &rarr;
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- HERO MAIN BODY -->
        <div id="home" class="relative z-10 max-w-[1340px] w-full mx-auto px-4 sm:px-6 lg:px-8 py-2 sm:py-4 flex-1 flex flex-col justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Hero Left: Typography -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 mb-1.5 sm:mb-2.5">
                        <span class="text-[10.5px] sm:text-[11.5px] font-bold tracking-[0.16em] uppercase text-gray-400">
                            Build A Better Tomorrow
                        </span>
                    </div>

                    <!-- Exact Stacked Headline -->
                    <h1 class="text-[32px] sm:text-[44px] lg:text-[min(4vw,54px)] tracking-[-0.035em] leading-[1.03] text-[#1a1d20] mb-2 sm:mb-3 uppercase">
                        <span class="font-black block">WINDOWS</span>
                        <span class="font-black block">FAÇADES</span>
                        <span class="font-light block text-[#25282d]">FOR A BRIGHTER</span>
                        <span class="font-light block text-[#25282d]">WORLD</span>
                    </h1>

                    <p class="text-gray-500 text-xs sm:text-[13.5px] lg:text-[14px] leading-relaxed max-w-md mb-4 sm:mb-5">
                        Innovative. Sustainable. Elegant.<br>
                        Complete Building Envelope Solutions.
                    </p>

                    <!-- CTA Button -->
                    <div>
                        <a href="#solutions" class="inline-flex items-center gap-2.5 bg-[#1b1e23] hover:bg-black text-white text-xs sm:text-[12.5px] font-semibold px-5 sm:px-6 py-2.5 rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:gap-3.5">
                            <span>Explore Our Solutions</span>
                            <span class="text-sm">&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Hero Right Overlay on Image: Process Pillars -->
                <div class="lg:col-span-5 hidden lg:flex flex-col justify-between items-end h-[280px] xl:h-[320px] pointer-events-none text-right pr-4">
                    <!-- Top Right Stack -->
                    <div class="text-white/90 font-medium text-xs sm:text-[13px] space-y-1 drop-shadow-md">
                        <div class="hover:text-white">Design</div>
                        <div class="hover:text-white">Engineer</div>
                        <div class="hover:text-white">Fabricate</div>
                        <div class="hover:text-white">Install</div>
                        <div class="hover:text-white pb-0.5 border-b border-white/60 inline-block">Support</div>
                    </div>

                    <!-- Bottom Right Badge -->
                    <div class="text-white/90 font-medium text-[11.5px] sm:text-[12px] leading-tight drop-shadow-md">
                        <div>Architecture</div>
                        <div>Meets Performance</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- HERO BOTTOM STATS ROW -->
        <div class="relative z-10 w-full shrink-0 bg-white/40 lg:bg-transparent backdrop-blur-xs lg:backdrop-blur-none border-t border-gray-200/50 py-3 sm:py-3.5">
            <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-start sm:justify-between lg:justify-start gap-4 sm:gap-6 lg:gap-10 text-left">
                    
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

            <!-- Two Division Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
                
                <!-- DIVISION 1: DOZO WINDOWS -->
                <div id="windows" class="flex flex-col">
                    <!-- Image Card with Overlay -->
                    <div class="relative h-[320px] sm:h-[390px] w-full overflow-hidden group">
                        <img 
                            src="/images/solution_windows.jpg" 
                            alt="DOZO Windows Interior" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent pointer-events-none"></div>

                        <!-- Text Overlay at Bottom Left -->
                        <div class="absolute bottom-6 left-6 right-6 text-white z-10">
                            <div class="text-[11px] font-bold tracking-[0.14em] uppercase text-white/90 mb-0.5">
                                DOZO
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2 leading-tight">
                                Windows
                            </h3>
                            <p class="text-xs sm:text-[13px] text-gray-200 font-normal max-w-sm mb-4 leading-relaxed">
                                Engineered for comfort, performance and modern living.
                            </p>
                            <a href="#featured-products" class="inline-flex items-center gap-2 border border-white/60 bg-black/30 hover:bg-white text-white hover:text-black backdrop-blur-xs text-xs font-semibold px-4 py-1.5 rounded-full transition-all duration-200">
                                <span>Explore Windows</span>
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
                <div id="facade" class="flex flex-col">
                    <!-- Image Card with Overlay -->
                    <div class="relative h-[320px] sm:h-[390px] w-full overflow-hidden group">
                        <img 
                            src="/images/solution_facade.jpg" 
                            alt="DOZO Façade Architecture" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent pointer-events-none"></div>

                        <!-- Text Overlay at Bottom Left -->
                        <div class="absolute bottom-6 left-6 right-6 text-white z-10">
                            <div class="text-[11px] font-bold tracking-[0.14em] uppercase text-white/90 mb-0.5">
                                DOZO
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2 leading-tight">
                                Facade
                            </h3>
                            <p class="text-xs sm:text-[13px] text-gray-200 font-normal max-w-sm mb-4 leading-relaxed">
                                Architectural freedom with precision and durability.
                            </p>
                            <a href="#featured-products" class="inline-flex items-center gap-2 border border-white/60 bg-black/30 hover:bg-white text-white hover:text-black backdrop-blur-xs text-xs font-semibold px-4 py-1.5 rounded-full transition-all duration-200">
                                <span>Explore Facade</span>
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
        </div>
    </section>

    <!-- FEATURED PRODUCTS SECTION -->
    <section id="featured-products" class="py-12 sm:py-16 bg-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        FEATURED PRODUCTS
                    </h2>
                    <span class="w-10 sm:w-12 h-[2.5px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="#featured-products" class="text-xs sm:text-sm font-semibold text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All Products</span>
                    <span class="text-[#3b82f6] text-base">&rarr;</span>
                </a>
            </div>

            <!-- 4 Big Product Cards in One Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- 1. Sliding Window -->
                <div class="group flex flex-col bg-white border border-gray-200/90 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 rounded-sm" onclick="openProductModal('Sliding Window System', 'Premium multi-track sliding aluminum window system engineered for ultra-smooth operation, expansive glass views, and superior weather tightness.')">
                    <div class="aspect-[4/3.2] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_sliding_window.jpg" alt="Sliding Window" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 flex items-center justify-between bg-white border-t border-gray-100">
                        <span class="text-sm sm:text-[15px] font-bold text-[#1a1d20] truncate">Sliding Window</span>
                        <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 2. Casement Window -->
                <div class="group flex flex-col bg-white border border-gray-200/90 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 rounded-sm" onclick="openProductModal('Casement Window System', 'High-performance side-hung casement window with multipoint locking mechanism, acoustic insulation gaskets, and optimal airflow ventilation.')">
                    <div class="aspect-[4/3.2] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_casement_window.jpg" alt="Casement Window" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 flex items-center justify-between bg-white border-t border-gray-100">
                        <span class="text-sm sm:text-[15px] font-bold text-[#1a1d20] truncate">Casement Window</span>
                        <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 3. Unitized Glass Facade -->
                <div class="group flex flex-col bg-[#161e27] border border-gray-800 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 rounded-sm" onclick="openProductModal('Unitized Glass Facade', 'Factory pre-fabricated unitized curtain wall system delivering rapid on-site installation, seismic performance, and high structural reliability for commercial skyscrapers.')">
                    <div class="aspect-[4/3.2] w-full overflow-hidden bg-[#0d131a]">
                        <img src="/images/prod_unitized_facade.jpg" alt="Unitized Glass Facade" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 flex items-center justify-between bg-[#161e27] text-white border-t border-gray-800">
                        <span class="text-sm sm:text-[15px] font-bold text-white truncate">Unitized Glass Facade</span>
                        <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/10 border border-white/20 text-white flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 4. Perforated Panel -->
                <div class="group flex flex-col bg-[#161e27] border border-gray-800 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 rounded-sm" onclick="openProductModal('Architectural Perforated Panel', 'Precision CNC perforated metallic panels designed for solar shading, dynamic light diffusion, and bespoke artistic facade patterns.')">
                    <div class="aspect-[4/3.2] w-full overflow-hidden bg-[#0d131a]">
                        <img src="/images/prod_perforated_panel.jpg" alt="Perforated Panel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 flex items-center justify-between bg-[#161e27] text-white border-t border-gray-800">
                        <span class="text-sm sm:text-[15px] font-bold text-white truncate">Perforated Panel</span>
                        <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/10 border border-white/20 text-white flex items-center justify-center shrink-0 ml-2 group-hover:bg-sky-600 transition-colors shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS SECTION -->
    <section id="projects" class="py-12 sm:py-16 bg-white border-t border-gray-100">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        FEATURED PROJECTS
                    </h2>
                    <span class="w-10 sm:w-12 h-[2.5px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="#projects" class="text-xs sm:text-sm font-semibold text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All Projects</span>
                    <span class="text-[#3b82f6] text-base">&rarr;</span>
                </a>
            </div>

            <!-- 4 Big Project Cards in One Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Project 1: Residential Tower Kolkata -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Residential Tower, Kolkata', 'Luxury residential high-rise featuring custom acoustic DOZO casement windows and panoramic glass facades designed for urban sound isolation.')">
                    <div class="aspect-[16/11] w-full overflow-hidden bg-[#f0f2f5] rounded-sm">
                        <img src="/images/proj_residential_tower.jpg" alt="Residential Tower Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-3 pb-1">
                        <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">Residential Tower</h4>
                        <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">Kolkata</p>
                    </div>
                </div>

                <!-- Project 2: Commercial Complex Bangalore (Accent Blue Title) -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Commercial Complex, Bangalore', 'State-of-the-art commercial tech hub envelope engineered with unitized double-glazed facade panels and integrated solar shading louvers.')">
                    <div class="aspect-[16/11] w-full overflow-hidden bg-[#f0f2f5] rounded-sm">
                        <img src="/images/proj_commercial_complex.jpg" alt="Commercial Complex Bangalore" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-3 pb-1">
                        <h4 class="text-sm sm:text-[15px] font-bold text-[#3b82f6] leading-snug group-hover:underline">Commercial Complex</h4>
                        <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">Bangalore</p>
                    </div>
                </div>

                <!-- Project 3: IT Park Hyderabad -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('IT Park, Hyderabad', 'Expansive IT campus building with solid aluminum cladding panels and high-efficiency thermal fixed glass systems.')">
                    <div class="aspect-[16/11] w-full overflow-hidden bg-[#f0f2f5] rounded-sm">
                        <img src="/images/proj_it_park.jpg" alt="IT Park Hyderabad" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-3 pb-1">
                        <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">IT Park</h4>
                        <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">Hyderabad</p>
                    </div>
                </div>

                <!-- Project 4: Luxury Residence Goa -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Luxury Residence, Goa', 'Coastal luxury villa equipped with weather-resistant heavy-duty sliding glass doors and minimalist slim-profile frame geometry.')">
                    <div class="aspect-[16/11] w-full overflow-hidden bg-[#f0f2f5] rounded-sm">
                        <img src="/images/proj_luxury_residence.jpg" alt="Luxury Residence Goa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-3 pb-1">
                        <h4 class="text-sm sm:text-[15px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">Luxury Residence</h4>
                        <p class="text-xs sm:text-[13px] text-gray-500 font-normal mt-0.5">Goa</p>
                    </div>
                </div>

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

            <div class="rounded-2xl overflow-hidden border border-gray-100 bg-white shadow-sm">
                <div class="h-48 overflow-hidden">
                    <img id="mobProjImg" src="/images/proj_commercial_complex.jpg" alt="Commercial Complex Bangalore" class="w-full h-full object-cover">
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

                    <a href="#projects" class="block w-full bg-[#1b1e23] text-white text-xs font-semibold py-2.5 rounded-xl text-center">
                        View All Projects &rarr;
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER / CALL TO ACTION BANNER -->
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
                    <button type="button" onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-[#161a1e] text-sm font-bold px-7 py-3 rounded-full transition-all duration-200 shadow-lg hover:shadow-xl hover:scale-105 flex items-center gap-2">
                        <span>Request a Quote</span>
                        <span class="text-base">&rarr;</span>
                    </button>
                    <a href="/catelogue.pdf" target="_blank" class="border border-gray-700 hover:border-gray-500 bg-white/5 hover:bg-white/10 text-white text-sm font-semibold px-6 py-3 rounded-full transition-all duration-200 flex items-center gap-2">
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
                        <!-- Enlarged Footer Logo -->
                        <a href="/" class="inline-block mb-4">
                            <img src="/logo.png" alt="DOZO Windows & Facades" class="h-12 sm:h-14 md:h-16 w-auto object-contain invert brightness-200">
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
                        <li><a href="#featured-products" onclick="openProductModal('Sliding Windows', 'Multi-track sliding systems with ultra-smooth heavy duty rollers.')" class="hover:text-white transition-colors">Sliding Window Systems</a></li>
                        <li><a href="#featured-products" onclick="openProductModal('Casement Windows', 'Side-hung acoustic casement windows with multipoint locks.')" class="hover:text-white transition-colors">Acoustic Casement Windows</a></li>
                        <li><a href="#featured-products" onclick="openProductModal('Fixed Picture Windows', 'Minimalist fixed panoramic glass systems.')" class="hover:text-white transition-colors">Fixed Picture Windows</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Tilt & Turn German Systems</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Minimalist Slimline Sliding Doors</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Thermal Break Energy Glazing</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Acoustic Sound Isolation Glass</a></li>
                    </ul>
                </div>

                <!-- Col 3: Façade Engineering (Span 3) -->
                <div class="lg:col-span-3">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Façade Systems
                    </h4>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] text-gray-400">
                        <li><a href="#featured-products" onclick="openProductModal('Unitized Glass Facade', 'Prefabricated unitized curtain wall systems for commercial towers.')" class="hover:text-white transition-colors">Unitized Curtain Walls</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Semi-Unitized Structural Glazing</a></li>
                        <li><a href="#featured-products" onclick="openProductModal('Metal Cladding Panel', 'Architectural solid aluminum and composite cladding.')" class="hover:text-white transition-colors">Solid Aluminum & ACP Cladding</a></li>
                        <li><a href="#featured-products" onclick="openProductModal('Perforated Panel', 'Precision CNC perforated metallic shading panels.')" class="hover:text-white transition-colors">CNC Perforated Façades</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Aerodynamic Louvers & Fins</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Spider & Point-Fixed Glazing</a></li>
                        <li><a href="#featured-products" class="hover:text-white transition-colors">Custom Architectural Metalwork</a></li>
                    </ul>
                </div>

                <!-- Col 4: Quick Links & Contact Info (Span 2) -->
                <div class="lg:col-span-2">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Company & Info
                    </h4>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] text-gray-400 mb-6">
                        <li><a href="#about" class="hover:text-white transition-colors">About DOZO</a></li>
                        <li><a href="#projects" class="hover:text-white transition-colors">Featured Projects</a></li>
                        <li><a href="/catelogue.pdf" target="_blank" class="hover:text-white transition-colors flex items-center gap-1">Downloads (PDF)</a></li>
                        <li><a href="#contact" onclick="openQuoteModal()" class="hover:text-white transition-colors">Get Consultation</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">Quality Standards</a></li>
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
                    <a href="#home" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#home" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="/catelogue.pdf" target="_blank" class="hover:text-white transition-colors">Technical Specs</a>
                    <a href="#home" class="hover:text-white transition-colors">Back to Top &uarr;</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile Footer -->
    <footer class="sm:hidden bg-[#161a1e] text-white p-6 mt-6 border-t border-gray-800">
        <!-- Enlarged Logo for Mobile -->
        <div class="mb-4 text-left">
            <a href="/" class="inline-block mb-3">
                <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 w-auto object-contain invert brightness-200">
            </a>
            <h3 class="text-base font-bold text-white leading-snug">Precision Building Envelope Solutions</h3>
            <p class="text-xs text-gray-400 mt-1">High-performance windows and architectural facade systems across India.</p>
        </div>

        <!-- Social Media Icons Row for Mobile -->
        <div class="flex items-center gap-3 py-3 border-y border-gray-800 my-4">
            <a href="https://linkedin.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="LinkedIn">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="Instagram">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="https://youtube.com" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="YouTube">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>
            <a href="https://wa.me/919876543210" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="WhatsApp">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
            </a>
        </div>

        <!-- Quick Links in Mobile -->
        <div class="grid grid-cols-2 gap-2 text-xs text-gray-400 mb-5">
            <a href="#windows" class="py-1">Windows Division</a>
            <a href="#facade" class="py-1">Façade Engineering</a>
            <a href="#featured-products" class="py-1">Featured Products</a>
            <a href="#projects" class="py-1">Projects Portfolio</a>
            <a href="/catelogue.pdf" target="_blank" class="py-1">Technical Catalogue</a>
            <a href="#about" class="py-1">About Company</a>
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
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            
            <div class="mb-5">
                <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">Inquiry Form</div>
                <h3 class="text-2xl font-extrabold text-gray-900">Request a Consultation & Quote</h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Fill out the details below and our facade engineers will reach out to you within 24 hours.</p>
            </div>

            <form onsubmit="handleQuoteSubmit(event)" class="space-y-3.5">
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name</label>
                    <input type="text" required placeholder="e.g. Rahul Sharma" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" required placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Email Address</label>
                        <input type="email" required placeholder="name@company.com" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Product Division</label>
                        <select class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option>Both Windows & Façade</option>
                            <option>DOZO Windows</option>
                            <option>DOZO Façade Systems</option>
                            <option>Perforated Panels & Cladding</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Project Location</label>
                        <input type="text" placeholder="e.g. Mumbai / Bangalore" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Project Brief</label>
                    <textarea rows="3" placeholder="Tell us about the project scale, glass type, or architectural specs..." class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <button type="submit" class="w-full bg-[#1b1e23] hover:bg-black text-white font-bold py-3 rounded-xl transition-all shadow-md text-sm">
                    Submit Inquiry &rarr;
                </button>
            </form>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: PRODUCT DETAIL -->
    <div id="productModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-gray-100 relative">
            <button type="button" onclick="closeProductModal()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            
            <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">Product Specification</div>
            <h3 id="modalProductTitle" class="text-2xl font-extrabold text-gray-900 mb-2">Product Title</h3>
            <p id="modalProductDesc" class="text-sm text-gray-600 leading-relaxed mb-5">Product details description.</p>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 mb-5 space-y-2">
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Material Grade:</span>
                    <span class="font-semibold text-gray-800">Architectural T6 Aluminum</span>
                </div>
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Finish Options:</span>
                    <span class="font-semibold text-gray-800">PVDF Coating / Anodized</span>
                </div>
                <div class="flex justify-between text-xs py-1 border-b border-gray-200/60">
                    <span class="text-gray-500">Acoustic Rating:</span>
                    <span class="font-semibold text-gray-800">Up to 42 dB Isolation</span>
                </div>
                <div class="flex justify-between text-xs py-1">
                    <span class="text-gray-500">Wind Load Resistance:</span>
                    <span class="font-semibold text-gray-800">Engineered to 3.5 kPa</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="button" onclick="closeProductModal(); openQuoteModal();" class="flex-1 bg-[#1b1e23] hover:bg-black text-white font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center">
                    Get Quote
                </button>
                <a href="/catelogue.pdf" target="_blank" class="flex-1 border border-gray-300 hover:bg-gray-50 text-gray-800 font-semibold py-2.5 rounded-xl text-xs sm:text-sm text-center">
                    Download Specs
                </a>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: VIDEO STORY -->
    <div id="videoModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="bg-black rounded-3xl max-w-2xl w-full p-4 sm:p-6 shadow-2xl relative border border-gray-800">
            <button type="button" onclick="closeVideoModal()" class="absolute -top-3 -right-3 text-white bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition-colors z-20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="aspect-video w-full rounded-2xl overflow-hidden bg-gray-950 flex items-center justify-center">
                <div class="text-center p-6 text-white">
                    <div class="w-14 h-14 rounded-full bg-sky-500/20 text-sky-400 border border-sky-400/40 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 fill-current ml-1" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-1">DOZO Architectural Story</h4>
                    <p class="text-xs text-gray-400 max-w-sm mx-auto">Discover how DOZO integrates cutting-edge engineering with sustainable facade architecture across India.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MODAL: SEARCH -->
    <div id="searchModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/60 backdrop-blur-sm flex items-start justify-center p-4 pt-20">
        <div class="bg-white rounded-2xl max-w-lg w-full p-5 shadow-2xl border border-gray-100 relative">
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
                    <div class="font-bold text-gray-800">DOZO Sliding & Casement Windows</div>
                    <div class="text-[11px] text-gray-400">Thermal insulation, acoustic reduction, weather resistant systems</div>
                </div>
                <div class="p-2 rounded-lg hover:bg-gray-50 cursor-pointer" onclick="closeSearchModal(); location.href='#facade';">
                    <div class="font-bold text-gray-800">Unitized Glass & Perforated Façade</div>
                    <div class="text-[11px] text-gray-400">Architectural cladding, sun shades, commercial curtain walls</div>
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
            alert('Thank you for contacting DOZO! Your inquiry has been submitted successfully. Our engineering team will contact you shortly.');
            closeQuoteModal();
        }

        function openProductModal(title, desc) {
            document.getElementById('modalProductTitle').innerText = title;
            document.getElementById('modalProductDesc').innerText = desc;
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
