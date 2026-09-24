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
        <header class="relative z-30 w-full shrink-0 pt-2 sm:pt-4 pb-1">
            <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-18">
                    <!-- Brand Logo -->
                    <a href="/" class="flex items-center gap-2 group shrink-0">
                        <img src="/logo.png" alt="DOZO Windows & Facades" class="h-8 sm:h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.02]">
                    </a>

                    <!-- Desktop Navigation Links -->
                    <nav class="hidden lg:flex items-center gap-7 xl:gap-8 text-[13.5px] xl:text-[14px] font-medium text-gray-700">
                        <a href="#home" class="text-black font-semibold hover:text-black transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black">Home</a>
                        <a href="#windows" class="hover:text-black transition-colors">Windows</a>
                        <a href="#facade" class="hover:text-black transition-colors">Facade</a>
                        <a href="#about" class="hover:text-black transition-colors">About Us</a>
                        <a href="#projects" class="hover:text-black transition-colors">Projects</a>
                        <a href="/catelogue.pdf" target="_blank" class="hover:text-black transition-colors flex items-center gap-1">
                            Downloads
                        </a>
                        <a href="#contact" class="hover:text-black transition-colors">Contact</a>
                    </nav>

                    <!-- Action / Search Buttons -->
                    <div class="hidden lg:flex items-center gap-3.5">
                        <button type="button" onclick="openSearchModal()" class="w-8.5 h-8.5 rounded-full flex items-center justify-center text-gray-700 hover:text-black hover:bg-black/5 transition-colors" title="Search">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                        <button type="button" onclick="openQuoteModal()" class="bg-[#1b1e23] hover:bg-black text-white text-[12.5px] font-semibold px-5 py-2 rounded-full transition-all duration-200 shadow-sm hover:scale-[1.02] active:scale-[0.98]">
                            Get a Quote
                        </button>
                    </div>

                    <!-- Mobile Hamburger Button -->
                    <div class="flex items-center gap-1.5 lg:hidden">
                        <button type="button" onclick="toggleMobileMenu()" class="p-2 rounded-lg text-gray-800 hover:bg-white/60 transition-colors focus:outline-none" aria-label="Toggle navigation menu">
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
                <div class="flex flex-col gap-3 text-[14px] font-medium text-gray-800">
                    <a href="#home" onclick="toggleMobileMenu()" class="text-black font-bold py-1 border-b border-gray-100">Home</a>
                    <a href="#windows" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100">Windows</a>
                    <a href="#facade" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100">Facade</a>
                    <a href="#about" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100">About Us</a>
                    <a href="#projects" onclick="toggleMobileMenu()" class="py-1 border-b border-gray-100">Projects</a>
                    <a href="/catelogue.pdf" target="_blank" class="py-1 border-b border-gray-100 flex items-center justify-between">
                        <span>Downloads (Catalogue)</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                    <a href="#contact" onclick="toggleMobileMenu()" class="py-1">Contact</a>
                    
                    <div class="pt-1 flex flex-col gap-2">
                        <button type="button" onclick="toggleMobileMenu(); openQuoteModal();" class="w-full bg-[#1b1e23] text-white py-2.5 rounded-xl font-semibold text-center text-xs shadow-sm">
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
    <section id="featured-products" class="py-10 sm:py-12 bg-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <h2 class="text-lg sm:text-xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        FEATURED PRODUCTS
                    </h2>
                    <span class="w-8 sm:w-10 h-[2px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="#featured-products" class="text-xs sm:text-[13px] font-medium text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All Products</span>
                    <span class="text-[#3b82f6] text-sm">&rarr;</span>
                </a>
            </div>

            <!-- 6 Product Cards Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
                
                <!-- 1. Sliding Window -->
                <div class="group flex flex-col bg-white border border-gray-200/80 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Sliding Window', 'Premium multi-track sliding aluminum window system engineered for ultra-smooth operation, expansive glass views, and superior weather tightness.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_sliding_window.jpg" alt="Sliding Window" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-white">
                        <span class="text-xs sm:text-[12px] font-bold text-[#1a1d20] truncate">Sliding Window</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 2. Casement Window -->
                <div class="group flex flex-col bg-white border border-gray-200/80 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Casement Window', 'High-performance side-hung casement window with multipoint locking mechanism, acoustic insulation gaskets, and optimal airflow ventilation.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_casement_window.jpg" alt="Casement Window" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-white">
                        <span class="text-xs sm:text-[12px] font-bold text-[#1a1d20] truncate">Casement Window</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 3. Fixed Window -->
                <div class="group flex flex-col bg-white border border-gray-200/80 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Fixed Window', 'Minimalist architectural fixed glass picture window designed to maximize daylight penetration while ensuring exceptional thermal and energy efficiency.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_fixed_window.jpg" alt="Fixed Window" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-white">
                        <span class="text-xs sm:text-[12px] font-bold text-[#1a1d20] truncate">Fixed Window</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 4. Unitized Glass Facade -->
                <div class="group flex flex-col bg-[#161e27] border border-gray-800 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Unitized Glass Facade', 'Factory pre-fabricated unitized curtain wall system delivering rapid on-site installation, seismic performance, and high structural reliability for commercial skyscrapers.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#0d131a]">
                        <img src="/images/prod_unitized_facade.jpg" alt="Unitized Glass Facade" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-[#161e27] text-white">
                        <span class="text-xs sm:text-[12px] font-bold text-white truncate">Unitized Glass Facade</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black/60 border border-white/20 text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 5. Metal Cladding Panel -->
                <div class="group flex flex-col bg-white border border-gray-200/80 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Metal Cladding Panel', 'Architectural solid aluminum and composite cladding panels featuring customized coatings, non-combustible cores, and crisp geometric detailing.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/prod_metal_cladding.jpg" alt="Metal Cladding Panel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-white">
                        <span class="text-xs sm:text-[12px] font-bold text-[#1a1d20] truncate">Metal Cladding Panel</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- 6. Perforated Panel -->
                <div class="group flex flex-col bg-[#161e27] border border-gray-800 overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300" onclick="openProductModal('Perforated Panel', 'Precision CNC perforated metallic panels designed for solar shading, dynamic light diffusion, and bespoke artistic facade patterns.')">
                    <div class="aspect-square w-full overflow-hidden bg-[#0d131a]">
                        <img src="/images/prod_perforated_panel.jpg" alt="Perforated Panel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-2.5 sm:p-3 flex items-center justify-between bg-[#161e27] text-white">
                        <span class="text-xs sm:text-[12px] font-bold text-white truncate">Perforated Panel</span>
                        <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 rounded-full bg-black/60 border border-white/20 text-white flex items-center justify-center shrink-0 ml-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS SECTION -->
    <section id="projects" class="py-10 sm:py-12 bg-white">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title Header -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <h2 class="text-lg sm:text-xl font-bold tracking-tight text-[#1a1d20] uppercase">
                        FEATURED PROJECTS
                    </h2>
                    <span class="w-8 sm:w-10 h-[2px] bg-[#3b82f6] inline-block"></span>
                </div>
                <a href="#projects" class="text-xs sm:text-[13px] font-medium text-gray-700 hover:text-black flex items-center gap-1.5 transition-colors">
                    <span>View All Projects</span>
                    <span class="text-[#3b82f6] text-sm">&rarr;</span>
                </a>
            </div>

            <!-- 5 Project Cards Grid in a Row -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5 sm:gap-4 lg:gap-5">
                
                <!-- Project 1: Residential Tower Kolkata -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Residential Tower, Kolkata', 'Luxury residential high-rise featuring custom acoustic DOZO casement windows and panoramic glass facades designed for urban sound isolation.')">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/proj_residential_tower.jpg" alt="Residential Tower Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-2.5 pb-1">
                        <h4 class="text-xs sm:text-[13px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">Residential Tower</h4>
                        <p class="text-[11px] text-gray-500 font-normal mt-0.5">Kolkata</p>
                    </div>
                </div>

                <!-- Project 2: Commercial Complex Bangalore (Accent Blue Title) -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Commercial Complex, Bangalore', 'State-of-the-art commercial tech hub envelope engineered with unitized double-glazed facade panels and integrated solar shading louvers.')">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/proj_commercial_complex.jpg" alt="Commercial Complex Bangalore" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-2.5 pb-1">
                        <h4 class="text-xs sm:text-[13px] font-bold text-[#3b82f6] leading-snug">Commercial Complex</h4>
                        <p class="text-[11px] text-gray-500 font-normal mt-0.5">Bangalore</p>
                    </div>
                </div>

                <!-- Project 3: IT Park Hyderabad -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('IT Park, Hyderabad', 'Expansive IT campus building with solid aluminum cladding panels and high-efficiency thermal fixed glass systems.')">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/proj_it_park.jpg" alt="IT Park Hyderabad" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-2.5 pb-1">
                        <h4 class="text-xs sm:text-[13px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">IT Park</h4>
                        <p class="text-[11px] text-gray-500 font-normal mt-0.5">Hyderabad</p>
                    </div>
                </div>

                <!-- Project 4: Luxury Residence Goa -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Luxury Residence, Goa', 'Coastal luxury villa equipped with weather-resistant heavy-duty sliding glass doors and minimalist slim-profile frame geometry.')">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/proj_luxury_residence.jpg" alt="Luxury Residence Goa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-2.5 pb-1">
                        <h4 class="text-xs sm:text-[13px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">Luxury Residence</h4>
                        <p class="text-[11px] text-gray-500 font-normal mt-0.5">Goa</p>
                    </div>
                </div>

                <!-- Project 5: Institutional Building Delhi -->
                <div class="group flex flex-col bg-white overflow-hidden cursor-pointer" onclick="openProductModal('Institutional Building, Delhi', 'Prestigious institutional architecture featuring custom stone & perforated metal facade cladding with high wind-load engineering.')">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#f0f2f5]">
                        <img src="/images/proj_institutional_delhi.jpg" alt="Institutional Building Delhi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="pt-2.5 pb-1">
                        <h4 class="text-xs sm:text-[13px] font-bold text-[#1a1d20] leading-snug group-hover:text-sky-600 transition-colors">Institutional Building</h4>
                        <p class="text-[11px] text-gray-500 font-normal mt-0.5">Delhi</p>
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
    <footer id="contact" class="hidden sm:block bg-[#1b1e23] text-white pt-8 pb-10 mt-6">
        <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Main CTA Container -->
            <div class="flex items-center justify-between gap-6 pb-6 border-b border-gray-800/80">
                
                <!-- Left: DOZO Logo -->
                <div class="flex items-center gap-3 shrink-0">
                    <div class="bg-white/10 p-2 rounded-xl backdrop-blur-xs">
                        <img src="/logo.png" alt="DOZO" class="h-9 w-auto invert brightness-200">
                    </div>
                </div>

                <!-- Center: Catchphrase -->
                <div class="flex-1 max-w-xl">
                    <h3 class="text-lg font-bold tracking-tight text-white">
                        Let's Build Something Exceptional Together
                    </h3>
                    <p class="text-xs text-gray-400 mt-0.5">
                        Get in touch for your next project.
                    </p>
                </div>

                <!-- Right: Contact CTA Button -->
                <div class="shrink-0 flex items-center gap-3">
                    <button type="button" onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-[#1b1e23] text-xs font-bold px-6 py-2.5 rounded-full transition-all duration-200 shadow-sm flex items-center gap-1.5">
                        <span>Contact Us</span>
                        <span>&rarr;</span>
                    </button>
                </div>

            </div>

            <!-- Bottom Sub-Footer Links -->
            <div class="pt-6 flex items-center justify-between text-[11px] text-gray-500">
                <p>&copy; {{ date('Y') }} DOZO Façade & Windows. All rights reserved.</p>
                <div class="flex items-center gap-5">
                    <a href="#windows" class="hover:text-gray-300 transition-colors">Windows Division</a>
                    <a href="#facade" class="hover:text-gray-300 transition-colors">Façade Engineering</a>
                    <a href="/catelogue.pdf" target="_blank" class="hover:text-gray-300 transition-colors">Technical Catalog</a>
                    <a href="#about" class="hover:text-gray-300 transition-colors">About Us</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile Footer -->
    <footer class="sm:hidden bg-[#1b1e23] text-white p-6 mt-4">
        <div class="text-left mb-4">
            <h3 class="text-base font-bold text-white">Let's Build Together</h3>
            <p class="text-xs text-gray-400 mt-0.5">Get in touch for your project.</p>
        </div>

        <div class="flex flex-col gap-2.5">
            <button type="button" onclick="openQuoteModal()" class="w-full bg-white text-[#1b1e23] text-xs font-bold py-3 rounded-xl text-center flex items-center justify-center gap-1.5 shadow-sm">
                <span>Get a Quote</span>
                <span>&rarr;</span>
            </button>
            <a href="tel:+919876543210" class="w-full border border-gray-700 bg-white/5 text-gray-200 text-xs font-semibold py-3 rounded-xl text-center flex items-center justify-center gap-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Call Now</span>
            </a>
        </div>

        <div class="text-center text-[10px] text-gray-500 mt-6">
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
