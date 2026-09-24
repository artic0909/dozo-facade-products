<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DOZO Admin — Enterprise Operations & Dynamic CMS</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f4f6fa;
            background-image: 
                radial-gradient(at 10% 10%, rgba(186, 230, 253, 0.45) 0px, transparent 50%),
                radial-gradient(at 90% 15%, rgba(224, 231, 255, 0.5) 0px, transparent 50%),
                radial-gradient(at 50% 85%, rgba(240, 253, 250, 0.6) 0px, transparent 60%),
                radial-gradient(at 80% 80%, rgba(254, 243, 199, 0.35) 0px, transparent 50%);
            background-attachment: fixed;
            color: #1e293b;
            min-height: 100vh;
        }

        /* White Liquid Glass Card */
        .white-liquid-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 
                0 16px 36px -8px rgba(15, 23, 42, 0.05),
                0 0 0 1px rgba(226, 232, 240, 0.75),
                inset 0 1px 1px 0 rgba(255, 255, 255, 0.95);
        }

        .white-liquid-card-hover {
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .white-liquid-card-hover:hover {
            background: rgba(255, 255, 255, 0.96);
            transform: translateY(-2px);
            box-shadow: 
                0 22px 45px -10px rgba(15, 23, 42, 0.09),
                0 0 0 1px rgba(203, 213, 225, 0.85),
                inset 0 1px 1px 0 rgba(255, 255, 255, 1);
        }

        /* Top Header Navbar */
        .white-liquid-navbar {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.85);
            box-shadow: 0 4px 20px -4px rgba(0, 0, 0, 0.03);
        }

        .liquid-nav-btn {
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .liquid-nav-btn.active {
            background: #0f172a;
            color: #ffffff;
            box-shadow: 0 4px 12px -2px rgba(15, 23, 42, 0.25);
        }
        .liquid-nav-btn:not(.active):hover {
            background: rgba(255, 255, 255, 0.95);
            color: #0f172a;
        }

        /* Custom subtle scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(148, 163, 184, 0.4);
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(100, 116, 139, 0.6);
        }

        .modal-backdrop-blur {
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="h-full flex flex-col antialiased selection:bg-sky-500 selection:text-white">

    <!-- TOP WHITE LIQUID GLASS NAVBAR -->
    <header class="white-liquid-navbar sticky top-0 z-40 w-full px-4 sm:px-8 py-3">
        <div class="max-w-[1540px] mx-auto flex items-center justify-between gap-4">
            
            <!-- Left Brand & Navigation Tabs -->
            <div class="flex items-center gap-5">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                    <img src="/logo.png" alt="DOZO" class="h-8 sm:h-9 w-auto object-contain">
                </a>

                <!-- Segmented Liquid Navigation Tabs -->
                <nav class="hidden xl:flex items-center gap-1 p-1 rounded-2xl bg-white/70 border border-slate-200/80 shadow-xs text-xs font-semibold text-slate-600">
                    <button type="button" onclick="switchTab('overview')" id="tab-overview" class="liquid-nav-btn active px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        <span>Overview</span>
                    </button>
                    <button type="button" onclick="switchTab('quotes')" id="tab-quotes" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Inquiries CRM</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-sky-100 text-sky-700 text-[10px] font-bold font-mono">{{ $totalQuotes }}</span>
                    </button>
                    <button type="button" onclick="switchTab('hero')" id="tab-hero" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                        <span>Hero CMS</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">5 Pillars</span>
                    </button>
                    <button type="button" onclick="switchTab('solutions')" id="tab-solutions" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        <span>Solutions CMS</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-indigo-100 text-indigo-800 text-[10px] font-bold">3 Cards</span>
                    </button>
                    <button type="button" onclick="switchTab('products')" id="tab-products" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 3.5 3h9c2 0 3.5-1 3.5-3V7c0-2-1.5-3-3.5-3h-9C5.5 4 4 5 4 7z"/></svg>
                        <span>Products</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-slate-100 text-slate-700 text-[10px] font-bold font-mono">{{ $products->count() }}</span>
                    </button>
                    <button type="button" onclick="switchTab('projects')" id="tab-projects" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span>Projects</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-amber-100 text-amber-800 text-[10px] font-bold font-mono">{{ $projects->count() }}</span>
                    </button>
                    <button type="button" onclick="switchTab('settings')" id="tab-settings" class="liquid-nav-btn px-3.5 py-2 rounded-xl flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Site Settings</span>
                    </button>
                </nav>
            </div>

            <!-- Right Actions & User Profile -->
            <div class="flex items-center gap-3">
                <!-- Search Input -->
                <div class="relative hidden sm:block">
                    <input 
                        type="text" 
                        id="globalSearchInput" 
                        onkeyup="handleGlobalSearch()" 
                        placeholder="Search CMS, products, leads..." 
                        class="pl-9 pr-3.5 py-2 rounded-xl bg-white/80 border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500/30 focus:border-sky-500 w-44 lg:w-56 transition-all"
                    >
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <!-- Add Lead Button -->
                <button type="button" onclick="openNewQuoteModal()" class="px-3.5 py-2 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md hover:shadow-lg transition-all flex items-center gap-1.5 shrink-0">
                    <span>+ New Lead</span>
                </button>

                <!-- Live Site Link -->
                <a href="{{ route('home') }}" target="_blank" class="px-3 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 text-xs font-semibold border border-slate-200/80 transition-colors flex items-center gap-1 shrink-0" title="View Public Website">
                    <span class="hidden md:inline">Public Site</span>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>

                <!-- User Dropdown & Logout -->
                <div class="flex items-center gap-2 pl-2 border-l border-slate-200">
                    <div class="w-8 h-8 rounded-full bg-sky-100 border border-sky-200 text-sky-700 font-black text-xs flex items-center justify-center">
                        AD
                    </div>
                    <a href="{{ route('admin.logout') }}" class="text-xs text-red-600 hover:text-red-700 font-semibold px-2 py-1 rounded-lg hover:bg-red-50 transition-colors">
                        Logout
                    </a>
                </div>
            </div>

        </div>

        <!-- Mobile Navigation Strip -->
        <div class="flex xl:hidden items-center gap-1.5 overflow-x-auto pt-2 text-xs font-semibold scrollbar-none">
            <button type="button" onclick="switchTab('overview')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-[#0f172a] text-white shrink-0" data-tab="overview">Overview</button>
            <button type="button" onclick="switchTab('quotes')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="quotes">Inquiries ({{ $totalQuotes }})</button>
            <button type="button" onclick="switchTab('hero')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="hero">Hero CMS</button>
            <button type="button" onclick="switchTab('solutions')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="solutions">Solutions CMS</button>
            <button type="button" onclick="switchTab('products')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="products">Products ({{ $products->count() }})</button>
            <button type="button" onclick="switchTab('projects')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="projects">Projects ({{ $projects->count() }})</button>
            <button type="button" onclick="switchTab('settings')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="settings">Settings</button>
        </div>
    </header>

    <!-- MAIN DASHBOARD CONTENT -->
    <main class="max-w-[1540px] w-full mx-auto px-4 sm:px-8 py-6 sm:py-8 flex-1">

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs animate-fadeIn">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-bold">&times;</button>
            </div>
        @endif

        <!-- =================== TAB 1: OVERVIEW =================== -->
        <div id="view-overview" class="view-panel space-y-8">
            
            <!-- Welcome Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 text-sky-600 text-xs font-bold uppercase tracking-wider mb-1">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Architectural Operations Hub
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        Executive Operations Summary
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Performance metrics for DOZO architectural windows, unitized facade engineering, CMS content, and customer CRM.
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <button onclick="exportQuotesCSV()" class="px-4 py-2.5 rounded-xl bg-white/80 hover:bg-white text-slate-700 font-semibold text-xs border border-slate-200/90 shadow-xs transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        <span>Export CSV</span>
                    </button>
                    <div class="px-4 py-2.5 rounded-xl bg-white/80 border border-slate-200/90 shadow-xs text-right">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">Total Pipeline</span>
                        <span class="text-base font-black text-emerald-600 font-mono">₹14.85 Cr</span>
                    </div>
                </div>
            </div>

            <!-- 4 White Liquid Glass KPI Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                
                <!-- KPI 1 -->
                <div class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Leads & Quotes</span>
                        <span class="p-2.5 rounded-2xl bg-sky-50 text-sky-600 border border-sky-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </span>
                    </div>
                    <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $totalQuotes }}</div>
                    <div class="flex items-center gap-1.5 text-xs text-emerald-600 font-bold">
                        <span>&uarr; +28.4%</span>
                        <span class="text-slate-400 font-normal">monthly growth</span>
                    </div>
                </div>

                <!-- KPI 2 -->
                <div class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">New Inquiries</span>
                        <span class="p-2.5 rounded-2xl bg-amber-50 text-amber-600 border border-amber-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                    </div>
                    <div class="text-3xl font-black text-amber-600 tracking-tight mb-1">{{ $newQuotesCount }}</div>
                    <div class="text-xs text-slate-500 font-medium">Pending engineering review</div>
                </div>

                <!-- KPI 3 -->
                <div class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Hero Section CMS</span>
                        <span class="p-2.5 rounded-2xl bg-emerald-50 text-emerald-600 border border-emerald-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                        </span>
                    </div>
                    <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $heroSlides->count() }} Pillars</div>
                    <div class="text-xs text-emerald-600 font-bold">100% Editable Live</div>
                </div>

                <!-- KPI 4 -->
                <div class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Envelope Systems</span>
                        <span class="p-2.5 rounded-2xl bg-indigo-50 text-indigo-600 border border-indigo-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </span>
                    </div>
                    <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $products->count() }} Products</div>
                    <div class="text-xs text-indigo-600 font-bold">{{ $projects->count() }} Featured Projects</div>
                </div>

            </div>

            <!-- Dashboard Table with Proper Indexing & Styling -->
            <div class="white-liquid-card rounded-3xl p-6 sm:p-7">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-5">
                    <div>
                        <h2 class="text-lg font-black text-slate-900">Recent Customer Inquiries</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Live index of latest consultation inquiries received from website.</p>
                    </div>
                    <button type="button" onclick="switchTab('quotes')" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
                        <span>View Full Lead CRM</span>
                        <span>&rarr;</span>
                    </button>
                </div>

                <!-- Structured Admin Table -->
                <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                                <th class="py-3.5 pl-4 w-12 text-center">#</th>
                                <th class="py-3.5 px-3">Lead ID</th>
                                <th class="py-3.5 px-3">Client / Architect</th>
                                <th class="py-3.5 px-3">Contact</th>
                                <th class="py-3.5 px-3">Division</th>
                                <th class="py-3.5 px-3">City / State</th>
                                <th class="py-3.5 px-3">Est. Value</th>
                                <th class="py-3.5 px-3">Status</th>
                                <th class="py-3.5 pr-4 text-right">Quick Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @forelse ($quotes->take(5) as $index => $q)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-4 pl-4 text-center font-bold text-slate-400">{{ $index + 1 }}</td>
                                    <td class="py-4 px-3 font-mono font-bold text-slate-500">#{{ str_pad($q->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td class="py-4 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-200 text-slate-700 font-bold text-[11px] flex items-center justify-center shrink-0">
                                                {{ substr($q->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="font-bold text-slate-900 text-[13px]">{{ $q->name }}</div>
                                                <div class="text-[11px] text-slate-400 line-clamp-1">{{ $q->message }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-3 font-mono">
                                        <div class="text-slate-900 font-semibold">{{ $q->phone }}</div>
                                        <div class="text-[11px] text-slate-400">{{ $q->email }}</div>
                                    </td>
                                    <td class="py-4 px-3">
                                        <span class="font-bold text-sky-700 bg-sky-50 px-2.5 py-1 rounded-md border border-sky-100">{{ $q->product_interest }}</span>
                                    </td>
                                    <td class="py-4 px-3 text-slate-700 font-medium">{{ $q->city }}</td>
                                    <td class="py-4 px-3 font-mono font-bold text-emerald-700">{{ $q->estimated_value ?? 'TBD' }}</td>
                                    <td class="py-4 px-3">
                                        @if($q->status === 'New')
                                            <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-100 text-amber-800 border border-amber-200">New</span>
                                        @elseif($q->status === 'In Review')
                                            <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-sky-100 text-sky-800 border border-sky-200">In Review</span>
                                        @elseif($q->status === 'Quotation Sent')
                                            <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-purple-100 text-purple-800 border border-purple-200">Quotation Sent</span>
                                        @else
                                            <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">{{ $q->status }}</span>
                                        @endif
                                    </td>
                                    <td class="py-4 pr-4 text-right">
                                        <button type="button" onclick="viewQuoteDetails({{ json_encode($q) }})" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold transition-colors">
                                            Details
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="py-8 text-center text-slate-400">No customer inquiries found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 flex items-center justify-between text-xs text-slate-500 font-medium">
                    <span>Showing 1 to {{ min(5, $totalQuotes) }} of {{ $totalQuotes }} inquiries</span>
                    <button type="button" onclick="switchTab('quotes')" class="font-bold text-sky-600 hover:underline">Manage all inquiries in CRM &rarr;</button>
                </div>
            </div>

        </div>

        <!-- =================== TAB 2: INQUIRIES & CRM (INDEXED ADMIN TABLE) =================== -->
        <div id="view-quotes" class="view-panel hidden space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        Lead & Quote Management CRM
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Track customer inquiries with sequential indexing, inline status updater, and proposal dispatch.
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <input 
                        type="text" 
                        id="quoteSearchInput" 
                        onkeyup="filterCRMQuotes()" 
                        placeholder="Filter by client name, phone, city..." 
                        class="px-4 py-2.5 rounded-xl bg-white border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500/30 w-72 shadow-xs"
                    >
                    <button onclick="openNewQuoteModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all shrink-0">
                        + Add Lead
                    </button>
                </div>
            </div>

            <!-- Status Filter Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs">
                <button onclick="filterStatus('all')" class="status-btn px-4 py-2 rounded-xl bg-[#0f172a] text-white font-bold" data-status="all">All Inquiries ({{ $totalQuotes }})</button>
                <button onclick="filterStatus('New')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200" data-status="New">New ({{ $newQuotesCount }})</button>
                <button onclick="filterStatus('In Review')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200" data-status="In Review">In Review ({{ $inReviewCount }})</button>
                <button onclick="filterStatus('Quotation Sent')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200" data-status="Quotation Sent">Quotation Sent</button>
                <button onclick="filterStatus('Completed')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200" data-status="Completed">Won ({{ $completedCount }})</button>
            </div>

            <!-- Main Quotes Table with Sequential Indexing -->
            <div class="white-liquid-card rounded-3xl p-5 sm:p-6">
                <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                                <th class="py-3.5 pl-4 w-12 text-center"># Index</th>
                                <th class="py-3.5 px-3">Lead ID</th>
                                <th class="py-3.5 px-3">Client / Architect</th>
                                <th class="py-3.5 px-3">Contact Details</th>
                                <th class="py-3.5 px-3">Division</th>
                                <th class="py-3.5 px-3">City / Territory</th>
                                <th class="py-3.5 px-3">Est. Budget</th>
                                <th class="py-3.5 px-3">Change Status</th>
                                <th class="py-3.5 pr-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @foreach ($quotes as $index => $q)
                                <tr class="crm-row hover:bg-slate-50/80 transition-colors" data-status="{{ $q->status }}" data-search="{{ strtolower($q->name . ' ' . $q->phone . ' ' . $q->email . ' ' . $q->city . ' ' . $q->product_interest) }}">
                                    <!-- Index Number -->
                                    <td class="py-4 pl-4 text-center font-bold text-slate-400 font-mono">{{ $index + 1 }}</td>
                                    
                                    <!-- ID Badge -->
                                    <td class="py-4 px-3 font-mono font-bold text-slate-500">
                                        <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700 border border-slate-200">#{{ str_pad($q->id, 4, '0', STR_PAD_LEFT) }}</span>
                                    </td>

                                    <!-- Client Name & Notes -->
                                    <td class="py-4 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-sky-100 text-sky-800 font-black text-xs flex items-center justify-center shrink-0 border border-sky-200">
                                                {{ substr($q->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="font-bold text-slate-900 text-sm">{{ $q->name }}</div>
                                                <div class="text-[11px] text-slate-500 line-clamp-1 max-w-xs">{{ $q->message }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Phone & Email -->
                                    <td class="py-4 px-3 font-mono">
                                        <div class="text-slate-900 font-semibold">{{ $q->phone }}</div>
                                        <div class="text-[11px] text-slate-400">{{ $q->email }}</div>
                                    </td>

                                    <!-- Product Division -->
                                    <td class="py-4 px-3">
                                        <span class="px-2.5 py-1 rounded-md bg-sky-50 text-sky-800 font-bold border border-sky-200/80">{{ $q->product_interest }}</span>
                                    </td>

                                    <!-- Location -->
                                    <td class="py-4 px-3 text-slate-700 font-medium">{{ $q->city }}</td>

                                    <!-- Estimated Value -->
                                    <td class="py-4 px-3 font-mono font-bold text-emerald-700">{{ $q->estimated_value ?? 'TBD' }}</td>

                                    <!-- Status Dropdown -->
                                    <td class="py-4 px-3">
                                        <select onchange="updateStatus({{ $q->id }}, this.value)" class="bg-white border border-slate-300 rounded-lg px-2.5 py-1.5 text-xs text-slate-800 font-bold focus:outline-none focus:ring-2 focus:ring-sky-500/20 focus:border-sky-500 shadow-xs">
                                            <option value="New" {{ $q->status === 'New' ? 'selected' : '' }}>🟡 New</option>
                                            <option value="Contacted" {{ $q->status === 'Contacted' ? 'selected' : '' }}>🔵 Contacted</option>
                                            <option value="In Review" {{ $q->status === 'In Review' ? 'selected' : '' }}>🟣 In Review</option>
                                            <option value="Quotation Sent" {{ $q->status === 'Quotation Sent' ? 'selected' : '' }}>🟠 Quotation Sent</option>
                                            <option value="Completed" {{ $q->status === 'Completed' ? 'selected' : '' }}>🟢 Completed (Won)</option>
                                        </select>
                                    </td>

                                    <!-- Action Buttons -->
                                    <td class="py-4 pr-4 text-right space-x-1">
                                        <button type="button" onclick="viewQuoteDetails({{ json_encode($q) }})" class="p-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sky-700 transition-colors" title="View Full Scope">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <form action="{{ route('admin.quotes.delete', $q->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 rounded-lg bg-slate-100 hover:bg-red-50 text-slate-400 hover:text-red-600 transition-colors" title="Delete">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 flex items-center justify-between text-xs text-slate-500 font-medium">
                    <span>Showing 1 to {{ $quotes->count() }} of {{ $totalQuotes }} total records</span>
                    <span>DOZO Enterprise Real-Time Lead Engine</span>
                </div>
            </div>

        </div>

        <!-- =================== TAB 3: HERO SECTION CMS (EDIT EACH PILLAR & STAT) =================== -->
        <div id="view-hero" class="view-panel hidden space-y-8">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        Hero Carousel & 5 Pillars CMS
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Customize headlines, descriptions, CTA buttons, background images, and bottom counters for the homepage hero carousel.
                    </p>
                </div>
                <a href="{{ route('home') }}" target="_blank" class="px-4 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs shadow-md transition-all flex items-center gap-1.5 shrink-0">
                    <span>Preview Live Hero</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <!-- 5 Hero Pillar Editor Cards Grid -->
            <div>
                <h2 class="text-base font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
                    <span>5 Interactive Architectural Pillars</span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
                    @foreach ($heroSlides as $slide)
                        <div class="white-liquid-card white-liquid-card-hover rounded-3xl overflow-hidden flex flex-col justify-between p-5 border border-slate-200">
                            <div>
                                <!-- Image Preview -->
                                <div class="relative h-40 rounded-2xl overflow-hidden mb-3.5 bg-slate-100 border border-slate-200">
                                    <img src="{{ $slide->image }}" alt="{{ $slide->name }}" class="w-full h-full object-cover">
                                    <div class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-full bg-black/75 backdrop-blur-md text-white font-mono text-[10px] font-bold">
                                        Slide #{{ $slide->order }}
                                    </div>
                                    <div class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full {{ $slide->is_active ? 'bg-emerald-500 text-white' : 'bg-slate-400 text-white' }} text-[10px] font-bold">
                                        {{ $slide->is_active ? 'Active' : 'Disabled' }}
                                    </div>
                                </div>

                                <!-- Pillar Title & Eyebrow -->
                                <div class="text-[10.5px] font-bold uppercase tracking-wider text-sky-600 font-mono mb-1">
                                    {{ $slide->eyebrow ?? 'Pillar #' . $slide->order }}
                                </div>
                                <h3 class="text-lg font-black text-slate-900 mb-2">{{ $slide->name }}</h3>

                                <!-- Headline lines preview -->
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 text-[11px] text-slate-700 font-mono mb-3 whitespace-pre-line leading-tight">
                                    {{ $slide->headline }}
                                </div>

                                <!-- Description -->
                                <p class="text-xs text-slate-500 leading-relaxed mb-3 line-clamp-3">
                                    {{ $slide->desc }}
                                </p>
                            </div>

                            <div class="pt-3 border-t border-slate-100 space-y-2">
                                <div class="text-[11px] text-slate-500 truncate">
                                    CTA: <strong class="text-slate-800">{{ $slide->cta_text }}</strong> &rarr; <span class="font-mono text-sky-600">{{ $slide->cta_link }}</span>
                                </div>
                                <button type="button" onclick="openEditSlideModal({{ json_encode($slide) }})" class="w-full py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-xs flex items-center justify-center gap-1.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    <span>Edit "{{ $slide->name }}"</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Hero Bottom Stats Editor -->
            <div class="white-liquid-card rounded-3xl p-6 sm:p-7">
                <div class="flex items-center justify-between mb-5">
                    <div>
                        <h2 class="text-lg font-black text-slate-900">Hero Bottom Fixed Counters (4 Stats)</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Edit the 4 key stat numbers and subtitles displayed across the bottom of the hero section.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($heroStats as $stat)
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-center justify-between gap-3">
                            <div>
                                <div class="text-xl font-black text-slate-900 tracking-tight">{{ $stat->number }}</div>
                                <div class="text-xs text-slate-500 font-medium">{{ $stat->label }}</div>
                            </div>
                            <button type="button" onclick="openEditStatModal({{ json_encode($stat) }})" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-bold transition-colors">
                                Edit
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- =================== TAB 4: SOLUTIONS CMS =================== -->
        <div id="view-solutions" class="view-panel hidden space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        Our Solutions CMS
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Manage titles, descriptions, CTA links, and the 4-image auto-sliding carousels for DOZO Windows, DOZO Façade, and DOZO Products.
                    </p>
                </div>
                <a href="{{ route('home') }}#solutions" target="_blank" class="px-4 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs shadow-md transition-all flex items-center gap-1.5 shrink-0">
                    <span>Preview Live Solutions</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach ($solutions as $sol)
                    <div class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 flex flex-col justify-between border border-slate-200 {{ $sol->slug === 'dozo-products' ? 'lg:col-span-3' : '' }}">
                        <div>
                            <!-- Header & Eyebrow -->
                            <div class="flex items-center justify-between gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-sky-50 text-sky-800 text-xs font-bold border border-sky-100">
                                    {{ $sol->eyebrow ?? 'DOZO Solution' }}
                                </span>
                                <span class="text-xs font-mono font-bold text-slate-400">#{{ $sol->slug }}</span>
                            </div>

                            <h3 class="text-xl font-black text-slate-900 mb-2">{{ $sol->title }}</h3>
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">{{ $sol->desc }}</p>

                            <!-- 4 Sliding Images Grid Preview -->
                            <div class="mb-4">
                                <div class="text-[11px] uppercase font-bold text-slate-400 mb-2">4 Sliding Images Carousel:</div>
                                <div class="grid grid-cols-4 gap-2">
                                    @foreach ($sol->images ?? [] as $imgIdx => $img)
                                        <div class="relative h-20 rounded-xl overflow-hidden bg-slate-100 border border-slate-200 group">
                                            <img src="{{ $img }}" alt="Slide {{ $imgIdx + 1 }}" class="w-full h-full object-cover">
                                            <div class="absolute bottom-1 right-1 px-1.5 py-0.5 rounded bg-black/70 text-[9px] font-mono text-white font-bold">
                                                #{{ $imgIdx + 1 }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
                            <div class="text-xs text-slate-500 truncate">
                                CTA: <strong class="text-slate-800">{{ $sol->cta_text }}</strong> &rarr; <span class="font-mono text-sky-600">{{ $sol->cta_link }}</span>
                            </div>
                            <button type="button" onclick="openEditSolutionModal({{ json_encode($sol) }})" class="px-4 py-2 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-xs transition-colors shrink-0">
                                Edit Solution & Images
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- =================== TAB 5: PRODUCTS CRUD =================== -->
        <div id="view-products" class="view-panel hidden space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        DOZO Products Catalog (CRUD)
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Add, edit, and manage architectural window and façade products, technical specifications, and live featured status.
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <button onclick="openAddProductModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all flex items-center gap-1.5 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Add New Product</span>
                    </button>
                </div>
            </div>

            <!-- Products Table with Indexing & Actions -->
            <div class="white-liquid-card rounded-3xl p-5 sm:p-6">
                <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                                <th class="py-3.5 pl-4 w-12 text-center">#</th>
                                <th class="py-3.5 px-3">Thumbnail</th>
                                <th class="py-3.5 px-3">Product Name & Category</th>
                                <th class="py-3.5 px-3">Theme</th>
                                <th class="py-3.5 px-3">Specs (Acoustic / Wind Load)</th>
                                <th class="py-3.5 px-3">Featured</th>
                                <th class="py-3.5 pr-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @foreach ($products as $index => $prod)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-3.5 pl-4 text-center font-bold text-slate-400 font-mono">{{ $index + 1 }}</td>
                                    <td class="py-3.5 px-3">
                                        <div class="w-14 h-12 rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                                            <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover">
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <div class="font-bold text-slate-900 text-sm">{{ $prod->name }}</div>
                                        <div class="text-[11px] text-sky-600 font-semibold">{{ $prod->category }}</div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <span class="px-2.5 py-1 rounded-md text-[11px] font-bold {{ $prod->theme === 'dark' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-800' }}">
                                            {{ ucfirst($prod->theme) }} Card
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-3 font-mono text-[11px]">
                                        <div><strong class="text-slate-500">Acoustic:</strong> {{ $prod->acoustic_rating ?? 'N/A' }}</div>
                                        <div><strong class="text-slate-500">Wind:</strong> {{ $prod->wind_load ?? 'N/A' }}</div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <span class="px-2.5 py-1 rounded-full text-[11px] font-bold {{ $prod->is_featured ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-600' }}">
                                            {{ $prod->is_featured ? 'Yes (Live)' : 'No' }}
                                        </span>
                                    </td>
                                    <td class="py-3.5 pr-4 text-right space-x-1.5">
                                        <button type="button" onclick="openEditProductModal({{ json_encode($prod) }})" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold transition-colors">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.products.delete', $prod->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 font-bold transition-colors">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- =================== TAB 6: PROJECTS CRUD =================== -->
        <div id="view-projects" class="view-panel hidden space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                        Featured Projects Portfolio (CRUD)
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Manage high-rise towers, commercial parks, scope descriptions, execution progress, and client credentials.
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <button onclick="openAddProjectModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all flex items-center gap-1.5 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Add New Project</span>
                    </button>
                </div>
            </div>

            <!-- Projects Table -->
            <div class="white-liquid-card rounded-3xl p-5 sm:p-6">
                <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                                <th class="py-3.5 pl-4 w-12 text-center">#</th>
                                <th class="py-3.5 px-3">Image</th>
                                <th class="py-3.5 px-3">Title & Location</th>
                                <th class="py-3.5 px-3">Client & Type</th>
                                <th class="py-3.5 px-3">Progress</th>
                                <th class="py-3.5 px-3">Status</th>
                                <th class="py-3.5 pr-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @foreach ($projects as $index => $proj)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-3.5 pl-4 text-center font-bold text-slate-400 font-mono">{{ $index + 1 }}</td>
                                    <td class="py-3.5 px-3">
                                        <div class="w-16 h-12 rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                                            <img src="{{ $proj->image }}" alt="{{ $proj->title }}" class="w-full h-full object-cover">
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <div class="font-bold text-slate-900 text-sm">{{ $proj->title }}</div>
                                        <div class="text-[11px] text-slate-500">{{ $proj->location }}</div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <div class="font-bold text-slate-800">{{ $proj->client ?? 'Confidential' }}</div>
                                        <div class="text-[11px] text-sky-600">{{ $proj->type }}</div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2">
                                            <span class="font-mono font-bold text-slate-900">{{ $proj->progress }}</span>
                                            <div class="w-16 h-1.5 rounded-full bg-slate-200 overflow-hidden">
                                                <div class="h-full bg-sky-500 rounded-full" style="width: {{ $proj->progress }}"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3">
                                        <span class="px-2.5 py-1 rounded-full text-[11px] font-bold {{ $proj->status === 'Completed & Handed Over' || $proj->status === 'Completed' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
                                            {{ $proj->status }}
                                        </span>
                                    </td>
                                    <td class="py-3.5 pr-4 text-right space-x-1.5">
                                        <button type="button" onclick="openEditProjectModal({{ json_encode($proj) }})" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold transition-colors">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.projects.delete', $proj->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 font-bold transition-colors">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- =================== TAB 7: SITE SETTINGS =================== -->
        <div id="view-settings" class="view-panel hidden space-y-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                    Company & Site Settings
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                    Configure contact numbers, head office address, catalogue PDF download, story video URL, and social media channels.
                </p>
            </div>

            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    
                    <!-- Card 1: Contact & Company Coordinates -->
                    <div class="white-liquid-card rounded-3xl p-6 sm:p-7 space-y-4">
                        <div class="flex items-center gap-2 pb-3 border-b border-slate-100">
                            <span class="p-2 rounded-xl bg-sky-50 text-sky-600 border border-sky-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </span>
                            <h3 class="text-base font-bold text-slate-900">Head Office & Contact Details</h3>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Company Site Title</label>
                            <input type="text" name="site_title" value="{{ $siteSettings['site_title'] ?? 'DOZO Façade Products | Premium Architectural Systems' }}" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Contact Phone</label>
                                <input type="text" name="contact_phone" value="{{ $siteSettings['contact_phone'] ?? '+91 98765 43210' }}" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Support Email</label>
                                <input type="email" name="contact_email" value="{{ $siteSettings['contact_email'] ?? 'info@dozo.co.in' }}" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Head Office Address</label>
                            <textarea name="head_office_address" rows="3" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">{{ $siteSettings['head_office_address'] ?? 'DOZO Towers, Plot 42, Architectural District, Industrial Area Phase II, Mumbai, Maharashtra 400001, India' }}</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Product Catalogue PDF File / URL</label>
                            <input type="text" name="catalogue_url" value="{{ $siteSettings['catalogue_url'] ?? '/DOZO_Facade_Products_Catalogue.pdf' }}" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <input type="file" name="catalogue_file" accept=".pdf" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                        </div>
                    </div>

                    <!-- Card 2: Brand Story Video & Social Links -->
                    <div class="white-liquid-card rounded-3xl p-6 sm:p-7 space-y-4">
                        <div class="flex items-center gap-2 pb-3 border-b border-slate-100">
                            <span class="p-2 rounded-xl bg-purple-50 text-purple-600 border border-purple-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            <h3 class="text-base font-bold text-slate-900">Brand Story Video & Social Channels</h3>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Brand Story Headline</label>
                            <input type="text" name="story_headline" value="{{ $siteSettings['story_headline'] ?? 'Engineered Precision. Architectural Mastery.' }}" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Brand Video Embed / YouTube URL</label>
                            <input type="text" name="story_video_url" value="{{ $siteSettings['story_video_url'] ?? 'https://www.youtube.com/embed/dQw4w9WgXcQ' }}" placeholder="https://www.youtube.com/embed/..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">LinkedIn URL</label>
                                <input type="text" name="social_linkedin" value="{{ $siteSettings['social_linkedin'] ?? 'https://linkedin.com/company/dozo' }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Instagram URL</label>
                                <input type="text" name="social_instagram" value="{{ $siteSettings['social_instagram'] ?? 'https://instagram.com/dozofacades' }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">YouTube URL</label>
                                <input type="text" name="social_youtube" value="{{ $siteSettings['social_youtube'] ?? 'https://youtube.com/@dozo' }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">WhatsApp Direct Link</label>
                                <input type="text" name="social_whatsapp" value="{{ $siteSettings['social_whatsapp'] ?? 'https://wa.me/919876543210' }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="px-6 py-3 rounded-2xl bg-[#0f172a] hover:bg-black text-white font-bold text-xs shadow-lg transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Save All Site Settings</span>
                    </button>
                </div>
            </form>
        </div>

    </main>

    <!-- =================== MODAL: EDIT HERO SLIDE / PILLAR =================== -->
    <div id="editSlideModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 class="text-lg font-black text-slate-900">Edit Hero Pillar Slide</h3>
                    <p class="text-xs text-slate-500">Update content and image for this carousel slide.</p>
                </div>
                <button type="button" onclick="closeEditSlideModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form id="editSlideForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Pillar Name *</label>
                        <input type="text" id="slideName" name="name" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Eyebrow Header</label>
                        <input type="text" id="slideEyebrow" name="eyebrow" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Headline (Multi-Line / Stacked) *</label>
                    <textarea id="slideHeadline" name="headline" rows="4" required placeholder="WINDOWS&#10;FAÇADES&#10;FOR A BRIGHTER&#10;WORLD" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                    <span class="text-[11px] text-slate-400">Tip: Each line appears stacked in uppercase font.</span>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Description Text *</label>
                    <textarea id="slideDesc" name="desc" rows="3" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">CTA Button Text *</label>
                        <input type="text" id="slideCtaText" name="cta_text" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">CTA Button Link *</label>
                        <input type="text" id="slideCtaLink" name="cta_link" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Background Image Path or Upload</label>
                    <input type="text" id="slideImage" name="image" placeholder="/images/hero_building.jpg" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <input type="file" name="image_upload" accept="image/*" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input type="checkbox" id="slideIsActive" name="is_active" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500">
                    <label for="slideIsActive" class="text-xs font-bold text-slate-700">Slide is Active in Homepage Carousel</label>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeEditSlideModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Slide Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== MODAL: EDIT HERO STAT =================== -->
    <div id="editStatModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-sm w-full p-6 shadow-2xl border border-slate-100">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                <h3 class="text-base font-bold text-slate-900">Edit Hero Stat</h3>
                <button type="button" onclick="closeEditStatModal()" class="text-slate-400 hover:text-slate-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="editStatForm" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Number / Figure (e.g. 25+, 500+) *</label>
                    <input type="text" id="statNumber" name="number" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-bold focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Label (e.g. Years of Experience) *</label>
                    <input type="text" id="statLabel" name="label" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div class="pt-2 flex items-center justify-end gap-2">
                    <button type="button" onclick="closeEditStatModal()" class="px-3.5 py-2 rounded-xl bg-slate-100 text-slate-700 text-xs font-semibold">Cancel</button>
                    <button type="submit" class="px-4 py-2 rounded-xl bg-[#0f172a] text-white text-xs font-bold">Save Stat</button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== MODAL: EDIT SOLUTION CARD =================== -->
    <div id="editSolutionModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-2xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 class="text-lg font-black text-slate-900">Edit Solution Card</h3>
                    <p class="text-xs text-slate-500">Update solution texts and the 4 sliding carousel images.</p>
                </div>
                <button type="button" onclick="closeEditSolutionModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form id="editSolutionForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Solution Title *</label>
                        <input type="text" id="solTitle" name="title" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Eyebrow Badge</label>
                        <input type="text" id="solEyebrow" name="eyebrow" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Description *</label>
                    <textarea id="solDesc" name="desc" rows="3" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">CTA Button Text *</label>
                        <input type="text" id="solCtaText" name="cta_text" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">CTA Button Link *</label>
                        <input type="text" id="solCtaLink" name="cta_link" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100">
                    <label class="block text-xs font-bold text-slate-900 mb-2">4 Sliding Carousel Images (URL or Upload)</label>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200 text-xs">
                                <span class="font-bold text-slate-700 block mb-1">Slide Image #{{ $i + 1 }}</span>
                                <input type="text" id="solImage_{{ $i }}" name="image_url_{{ $i }}" placeholder="/images/solution_image_{{ $i }}.jpg" class="w-full px-3 py-1.5 rounded-lg border border-slate-200 text-[11px] font-mono mb-1.5 bg-white">
                                <input type="file" name="image_upload_{{ $i }}" accept="image/*" class="w-full text-[11px] text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-semibold file:bg-slate-200 file:text-slate-700">
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeEditSolutionModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Solution Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== MODAL: ADD / EDIT PRODUCT =================== -->
    <div id="productModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 id="productModalTitle" class="text-lg font-black text-slate-900">Add Product</h3>
                    <p class="text-xs text-slate-500">Configure technical specifications and media.</p>
                </div>
                <button type="button" onclick="closeProductModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form id="productForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Product Name *</label>
                        <input type="text" id="prodName" name="name" required placeholder="e.g. Slimline Sliding System" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Category *</label>
                        <select id="prodCategory" name="category" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="Sliding Windows">Sliding Windows</option>
                            <option value="Casement Windows">Casement Windows</option>
                            <option value="Unitized Façade">Unitized Façade</option>
                            <option value="Perforated & Louvers">Perforated & Louvers</option>
                            <option value="Architectural Doors">Architectural Doors</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Theme Card Style *</label>
                        <select id="prodTheme" name="theme" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="light">Light Glass (White card)</option>
                            <option value="dark">Dark Obsidian (Black card)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Acoustic Rating</label>
                        <input type="text" id="prodAcoustic" name="acoustic_rating" placeholder="e.g. Up to 44 dB" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Material Grade</label>
                        <input type="text" id="prodMaterial" name="material_grade" placeholder="e.g. 6063-T6 Architectural Alloy" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Wind Load Performance</label>
                        <input type="text" id="prodWind" name="wind_load" placeholder="e.g. Up to 4.5 kPa Class E" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Finish Options</label>
                    <input type="text" id="prodFinish" name="finish_options" placeholder="e.g. PVDF, Powder Coated (Qualicoat), Anodized 25μm" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Description & Engineering Specs *</label>
                    <textarea id="prodDesc" name="short_desc" rows="3" required placeholder="Technical performance, thermal break, and engineering details..." class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Product Image (URL or Upload)</label>
                    <input type="text" id="prodImage" name="image" placeholder="/images/prod_sliding_window.jpg" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <input type="file" name="image_upload" accept="image/*" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input type="checkbox" id="prodIsFeatured" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500" checked>
                    <label for="prodIsFeatured" class="text-xs font-bold text-slate-700">Display in Featured Products Catalog on Homepage</label>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeProductModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== MODAL: ADD / EDIT PROJECT =================== -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 id="projectModalTitle" class="text-lg font-black text-slate-900">Add Project</h3>
                    <p class="text-xs text-slate-500">Configure tower details, scope of work, and progress.</p>
                </div>
                <button type="button" onclick="closeProjectModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form id="projectForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Project Title *</label>
                        <input type="text" id="projTitle" name="title" required placeholder="e.g. Lumina Sky Residences" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Location *</label>
                        <input type="text" id="projLocation" name="location" required placeholder="e.g. Worli, Mumbai" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Building Type</label>
                        <input type="text" id="projType" name="type" placeholder="e.g. 48-Storey Luxury Residential" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Client / Developer</label>
                        <input type="text" id="projClient" name="client" placeholder="e.g. Shapoorji Pallonji Group" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Execution Status *</label>
                        <select id="projStatus" name="status" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="Completed & Handed Over">Completed & Handed Over</option>
                            <option value="Under Execution (Facade Active)">Under Execution (Facade Active)</option>
                            <option value="Engineering & Mockup Testing">Engineering & Mockup Testing</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Progress %</label>
                        <input type="text" id="projProgress" name="progress" placeholder="e.g. 100% or 85%" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Scope of Work</label>
                    <input type="text" id="projScope" name="scope" placeholder="e.g. 18,500 m² Unitized Curtain Wall, High-Performance DGU" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Full Architectural Description *</label>
                    <textarea id="projDesc" name="description" rows="3" required placeholder="Detailed project overview, acoustic considerations, custom extruded fins..." class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Project High-Res Image (URL or Upload)</label>
                    <input type="text" id="projImage" name="image" placeholder="/images/proj_residential_tower.jpg" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <input type="file" name="image_upload" accept="image/*" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input type="checkbox" id="projIsFeatured" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500" checked>
                    <label for="projIsFeatured" class="text-xs font-bold text-slate-700">Display in Featured Projects Showcase on Homepage</label>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeProjectModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Project
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== MODAL: VIEW QUOTE DETAILS =================== -->
    <div id="quoteDetailModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-100 relative">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <h3 id="modalQuoteName" class="text-lg font-bold text-slate-900">Inquiry Details</h3>
                <button type="button" onclick="closeQuoteModal()" class="text-slate-400 hover:text-slate-700 p-1 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <div class="py-4 space-y-3.5 text-xs text-slate-600">
                <div class="grid grid-cols-2 gap-3">
                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Contact Phone</span>
                        <span id="modalQuotePhone" class="font-mono text-slate-900 font-bold text-sm"></span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Email Address</span>
                        <span id="modalQuoteEmail" class="text-slate-900 font-bold truncate block"></span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Product Line</span>
                        <span id="modalQuoteProduct" class="text-sky-700 font-bold"></span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Location</span>
                        <span id="modalQuoteCity" class="text-slate-900 font-bold"></span>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                    <span class="text-slate-400 block text-[10px] uppercase font-bold mb-1">Project Scope & Notes</span>
                    <p id="modalQuoteMessage" class="text-slate-800 leading-relaxed text-xs"></p>
                </div>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                <a id="modalCallBtn" href="#" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>Call Client</span>
                </a>
                <a id="modalEmailBtn" href="#" class="px-4 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Send Proposal</span>
                </a>
            </div>
        </div>
    </div>

    <!-- =================== MODAL: ADD NEW QUOTE (MANUAL LEAD) =================== -->
    <div id="newQuoteModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-100">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <h3 class="text-base font-bold text-slate-900">Create New Lead Entry</h3>
                <button type="button" onclick="closeNewQuoteModal()" class="text-slate-400 hover:text-slate-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form action="{{ route('quotes.store') }}" method="POST" class="py-4 space-y-3.5">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Architect / Client Name *</label>
                    <input type="text" name="name" required placeholder="e.g. Ar. Rajesh Mehta" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Phone *</label>
                        <input type="text" name="phone" required placeholder="+91 98765 43210" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Email *</label>
                        <input type="email" name="email" required placeholder="rajesh@studio.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Product System</label>
                        <select name="product_interest" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="Unitized Glass Facade">Unitized Glass Facade</option>
                            <option value="Sliding Windows">Sliding Windows</option>
                            <option value="Casement Windows">Casement Windows</option>
                            <option value="Perforated Panels">Perforated Panels</option>
                            <option value="Louvers & Sunshades">Louvers & Sunshades</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">City / Region</label>
                        <input type="text" name="city" placeholder="e.g. Mumbai, MH" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Project Scope & Notes</label>
                    <textarea name="message" rows="3" placeholder="Project scale, architectural drawings, glass specs..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full py-3 rounded-xl bg-[#0f172a] hover:bg-black font-bold text-xs text-white transition-colors shadow-md">
                        Save Lead Entry
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- =================== JAVASCRIPT CONTROLLER =================== -->
    <script>
        // Switch Tab Panels
        function switchTab(tabId) {
            document.querySelectorAll('.view-panel').forEach(panel => {
                panel.classList.add('hidden');
            });
            const activePanel = document.getElementById('view-' + tabId);
            if (activePanel) activePanel.classList.remove('hidden');

            document.querySelectorAll('.liquid-nav-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            const activeBtn = document.getElementById('tab-' + tabId);
            if (activeBtn) activeBtn.classList.add('active');

            document.querySelectorAll('.mob-tab-btn').forEach(btn => {
                if (btn.getAttribute('data-tab') === tabId) {
                    btn.className = 'mob-tab-btn px-3 py-1.5 rounded-lg bg-[#0f172a] text-white shrink-0';
                } else {
                    btn.className = 'mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0';
                }
            });
        }

        // Global Search
        function handleGlobalSearch() {
            const q = document.getElementById('globalSearchInput').value.toLowerCase();
            if (!q) return;
            if (q.includes('quo') || q.includes('lead') || q.includes('inq')) {
                switchTab('quotes');
            } else if (q.includes('hero') || q.includes('cms') || q.includes('slide') || q.includes('pillar') || q.includes('design') || q.includes('engineer')) {
                switchTab('hero');
            } else if (q.includes('sol') || q.includes('facade') || q.includes('window')) {
                switchTab('solutions');
            } else if (q.includes('prod')) {
                switchTab('products');
            } else if (q.includes('proj') || q.includes('tow')) {
                switchTab('projects');
            } else if (q.includes('set') || q.includes('phone') || q.includes('mail')) {
                switchTab('settings');
            }
        }

        // Filter CRM Quotes
        function filterCRMQuotes() {
            const query = document.getElementById('quoteSearchInput').value.toLowerCase();
            document.querySelectorAll('.crm-row').forEach(row => {
                const searchData = row.getAttribute('data-search') || '';
                if (searchData.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Filter by Status
        function filterStatus(status) {
            document.querySelectorAll('.status-btn').forEach(btn => {
                if (btn.getAttribute('data-status') === status) {
                    btn.className = 'status-btn px-4 py-2 rounded-xl bg-[#0f172a] text-white font-bold';
                } else {
                    btn.className = 'status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200';
                }
            });

            document.querySelectorAll('.crm-row').forEach(row => {
                const rowStatus = row.getAttribute('data-status');
                if (status === 'all' || rowStatus === status) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Update Quote Status AJAX
        function updateStatus(quoteId, newStatus) {
            fetch(`/admin/quotes/${quoteId}/status`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ status: newStatus })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    const row = document.querySelector(`.crm-row select[onchange*="${quoteId}"]`)?.closest('tr');
                    if (row) row.setAttribute('data-status', newStatus);
                }
            })
            .catch(err => console.error(err));
        }

        // Open Edit Slide Modal
        function openEditSlideModal(slide) {
            const form = document.getElementById('editSlideForm');
            form.action = `/admin/hero-slides/${slide.id}`;
            document.getElementById('slideName').value = slide.name;
            document.getElementById('slideEyebrow').value = slide.eyebrow || '';
            document.getElementById('slideHeadline').value = slide.headline || '';
            document.getElementById('slideDesc').value = slide.desc || '';
            document.getElementById('slideCtaText').value = slide.cta_text || 'Explore Our Solutions';
            document.getElementById('slideCtaLink').value = slide.cta_link || '#solutions';
            document.getElementById('slideImage').value = slide.image || '';
            document.getElementById('slideIsActive').checked = Boolean(slide.is_active);

            document.getElementById('editSlideModal').classList.remove('hidden');
        }
        function closeEditSlideModal() {
            document.getElementById('editSlideModal').classList.add('hidden');
        }

        // Open Edit Stat Modal
        function openEditStatModal(stat) {
            const form = document.getElementById('editStatForm');
            form.action = `/admin/hero-stats/${stat.id}`;
            document.getElementById('statNumber').value = stat.number;
            document.getElementById('statLabel').value = stat.label;
            document.getElementById('editStatModal').classList.remove('hidden');
        }
        function closeEditStatModal() {
            document.getElementById('editStatModal').classList.add('hidden');
        }

        // Open Edit Solution Modal
        function openEditSolutionModal(sol) {
            const form = document.getElementById('editSolutionForm');
            form.action = `/admin/solutions/${sol.id}`;
            document.getElementById('solTitle').value = sol.title;
            document.getElementById('solEyebrow').value = sol.eyebrow || '';
            document.getElementById('solDesc').value = sol.desc || '';
            document.getElementById('solCtaText').value = sol.cta_text || '';
            document.getElementById('solCtaLink').value = sol.cta_link || '';

            const images = sol.images || [];
            for (let i = 0; i < 4; i++) {
                const el = document.getElementById(`solImage_${i}`);
                if (el) el.value = images[i] || '';
            }

            document.getElementById('editSolutionModal').classList.remove('hidden');
        }
        function closeEditSolutionModal() {
            document.getElementById('editSolutionModal').classList.add('hidden');
        }

        // Products CRUD Modals
        function openAddProductModal() {
            const form = document.getElementById('productForm');
            form.action = "{{ route('admin.products.store') }}";
            document.getElementById('productModalTitle').textContent = 'Add New Product System';
            document.getElementById('prodName').value = '';
            document.getElementById('prodCategory').value = 'Sliding Windows';
            document.getElementById('prodTheme').value = 'light';
            document.getElementById('prodAcoustic').value = '';
            document.getElementById('prodMaterial').value = '';
            document.getElementById('prodWind').value = '';
            document.getElementById('prodFinish').value = '';
            document.getElementById('prodDesc').value = '';
            document.getElementById('prodImage').value = '';
            document.getElementById('prodIsFeatured').checked = true;

            document.getElementById('productModal').classList.remove('hidden');
        }
        function openEditProductModal(prod) {
            const form = document.getElementById('productForm');
            form.action = `/admin/products/${prod.id}`;
            document.getElementById('productModalTitle').textContent = 'Edit Product: ' + prod.name;
            document.getElementById('prodName').value = prod.name;
            document.getElementById('prodCategory').value = prod.category;
            document.getElementById('prodTheme').value = prod.theme || 'light';
            document.getElementById('prodAcoustic').value = prod.acoustic_rating || '';
            document.getElementById('prodMaterial').value = prod.material_grade || '';
            document.getElementById('prodWind').value = prod.wind_load || '';
            document.getElementById('prodFinish').value = prod.finish_options || '';
            document.getElementById('prodDesc').value = prod.short_desc || '';
            document.getElementById('prodImage').value = prod.image || '';
            document.getElementById('prodIsFeatured').checked = Boolean(prod.is_featured);

            document.getElementById('productModal').classList.remove('hidden');
        }
        function closeProductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }

        // Projects CRUD Modals
        function openAddProjectModal() {
            const form = document.getElementById('projectForm');
            form.action = "{{ route('admin.projects.store') }}";
            document.getElementById('projectModalTitle').textContent = 'Add New Project Portfolio Entry';
            document.getElementById('projTitle').value = '';
            document.getElementById('projLocation').value = '';
            document.getElementById('projType').value = '';
            document.getElementById('projClient').value = '';
            document.getElementById('projStatus').value = 'Completed & Handed Over';
            document.getElementById('projProgress').value = '100%';
            document.getElementById('projScope').value = '';
            document.getElementById('projDesc').value = '';
            document.getElementById('projImage').value = '';
            document.getElementById('projIsFeatured').checked = true;

            document.getElementById('projectModal').classList.remove('hidden');
        }
        function openEditProjectModal(proj) {
            const form = document.getElementById('projectForm');
            form.action = `/admin/projects/${proj.id}`;
            document.getElementById('projectModalTitle').textContent = 'Edit Project: ' + proj.title;
            document.getElementById('projTitle').value = proj.title;
            document.getElementById('projLocation').value = proj.location;
            document.getElementById('projType').value = proj.type || '';
            document.getElementById('projClient').value = proj.client || '';
            document.getElementById('projStatus').value = proj.status;
            document.getElementById('projProgress').value = proj.progress || '100%';
            document.getElementById('projScope').value = proj.scope || '';
            document.getElementById('projDesc').value = proj.description || '';
            document.getElementById('projImage').value = proj.image || '';
            document.getElementById('projIsFeatured').checked = Boolean(proj.is_featured);

            document.getElementById('projectModal').classList.remove('hidden');
        }
        function closeProjectModal() {
            document.getElementById('projectModal').classList.add('hidden');
        }

        // View Quote Details Modal
        function viewQuoteDetails(q) {
            document.getElementById('modalQuoteName').textContent = q.name;
            document.getElementById('modalQuotePhone').textContent = q.phone;
            document.getElementById('modalQuoteEmail').textContent = q.email;
            document.getElementById('modalQuoteProduct').textContent = q.product_interest || 'General Inquiry';
            document.getElementById('modalQuoteCity').textContent = q.city || 'India';
            document.getElementById('modalQuoteMessage').textContent = q.message || 'No additional scope details provided.';
            
            document.getElementById('modalCallBtn').href = 'tel:' + q.phone;
            document.getElementById('modalEmailBtn').href = 'mailto:' + q.email + '?subject=DOZO Façade Products Proposal for ' + encodeURIComponent(q.name);

            document.getElementById('quoteDetailModal').classList.remove('hidden');
        }
        function closeQuoteModal() {
            document.getElementById('quoteDetailModal').classList.add('hidden');
        }

        // New Quote Modal
        function openNewQuoteModal() {
            document.getElementById('newQuoteModal').classList.remove('hidden');
        }
        function closeNewQuoteModal() {
            document.getElementById('newQuoteModal').classList.add('hidden');
        }

        // Export Quotes to CSV
        function exportQuotesCSV() {
            let csv = "Index,ID,Name,Phone,Email,Product,City,Status,Est Value\n";
            @foreach ($quotes as $index => $q)
                csv += `{{ $index + 1 }},{{ $q->id }},"{{ $q->name }}","{{ $q->phone }}","{{ $q->email }}","{{ $q->product_interest }}","{{ $q->city }}","{{ $q->status }}","{{ $q->estimated_value }}"\n`;
            @endforeach
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.setAttribute('href', url);
            a.setAttribute('download', 'DOZO_Inquiries_Export.csv');
            a.click();
        }

        // Keyboard Shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeNewQuoteModal();
                closeEditSlideModal();
                closeEditStatModal();
                closeEditSolutionModal();
                closeProductModal();
                closeProjectModal();
            }
        });
    </script>
</body>
</html>
