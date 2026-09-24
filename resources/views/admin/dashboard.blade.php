<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DOZO Admin — Enterprise Operations & CMS</title>
    
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
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 
                0 16px 36px -8px rgba(15, 23, 42, 0.05),
                0 0 0 1px rgba(226, 232, 240, 0.7),
                inset 0 1px 1px 0 rgba(255, 255, 255, 0.95);
        }

        .white-liquid-card-hover {
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .white-liquid-card-hover:hover {
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-2px);
            box-shadow: 
                0 22px 45px -10px rgba(15, 23, 42, 0.09),
                0 0 0 1px rgba(203, 213, 225, 0.85),
                inset 0 1px 1px 0 rgba(255, 255, 255, 1);
        }

        /* Top Header Navbar */
        .white-liquid-navbar {
            background: rgba(255, 255, 255, 0.85);
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
        }
    </style>
</head>
<body class="h-full flex flex-col antialiased selection:bg-sky-500 selection:text-white">

    <!-- TOP WHITE LIQUID GLASS NAVBAR -->
    <header class="white-liquid-navbar sticky top-0 z-40 w-full px-4 sm:px-8 py-3.5">
        <div class="max-w-[1540px] mx-auto flex items-center justify-between gap-4">
            
            <!-- Left Brand & Navigation Tabs -->
            <div class="flex items-center gap-6">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                    <img src="/logo.png" alt="DOZO" class="h-8 sm:h-9 w-auto object-contain">
                </a>

                <!-- Segmented Liquid Navigation Tabs -->
                <nav class="hidden lg:flex items-center gap-1.5 p-1 rounded-2xl bg-white/70 border border-slate-200/80 shadow-xs text-xs font-semibold text-slate-600">
                    <button type="button" onclick="switchTab('overview')" id="tab-overview" class="liquid-nav-btn active px-4 py-2 rounded-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        <span>Overview</span>
                    </button>
                    <button type="button" onclick="switchTab('quotes')" id="tab-quotes" class="liquid-nav-btn px-4 py-2 rounded-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Inquiries CRM</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-sky-100 text-sky-700 text-[10.5px] font-bold font-mono">{{ $totalQuotes }}</span>
                    </button>
                    <button type="button" onclick="switchTab('hero')" id="tab-hero" class="liquid-nav-btn px-4 py-2 rounded-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                        <span>Hero Section CMS</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">5 Pillars</span>
                    </button>
                    <button type="button" onclick="switchTab('products')" id="tab-products" class="liquid-nav-btn px-4 py-2 rounded-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 3.5 3h9c2 0 3.5-1 3.5-3V7c0-2-1.5-3-3.5-3h-9C5.5 4 4 5 4 7z"/></svg>
                        <span>Products</span>
                    </button>
                    <button type="button" onclick="switchTab('projects')" id="tab-projects" class="liquid-nav-btn px-4 py-2 rounded-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span>Projects</span>
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
                        placeholder="Search leads, CMS..." 
                        class="pl-9 pr-3.5 py-2 rounded-xl bg-white/80 border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500/30 focus:border-sky-500 w-44 lg:w-56 transition-all"
                    >
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <!-- Add Lead Button -->
                <button type="button" onclick="openNewQuoteModal()" class="px-3.5 py-2 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md hover:shadow-lg transition-all flex items-center gap-1.5">
                    <span>+ New Lead</span>
                </button>

                <!-- Live Site Link -->
                <a href="{{ route('home') }}" target="_blank" class="px-3 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 text-xs font-semibold border border-slate-200/80 transition-colors flex items-center gap-1" title="View Public Website">
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
        <div class="flex lg:hidden items-center gap-2 overflow-x-auto pt-2 text-xs font-semibold scrollbar-none">
            <button type="button" onclick="switchTab('overview')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-[#0f172a] text-white shrink-0" data-tab="overview">Overview</button>
            <button type="button" onclick="switchTab('quotes')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="quotes">Inquiries ({{ $totalQuotes }})</button>
            <button type="button" onclick="switchTab('hero')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="hero">Hero CMS</button>
            <button type="button" onclick="switchTab('products')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="products">Products</button>
            <button type="button" onclick="switchTab('projects')" class="mob-tab-btn px-3 py-1.5 rounded-lg bg-white/80 text-slate-700 shrink-0" data-tab="projects">Projects</button>
        </div>
    </header>

    <!-- MAIN DASHBOARD CONTENT -->
    <main class="max-w-[1540px] w-full mx-auto px-4 sm:px-8 py-6 sm:py-8 flex-1">

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900">&times;</button>
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
                        Performance metrics for DOZO architectural windows, unitized facade engineering, and client CRM.
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
                    <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">6 Active</div>
                    <div class="text-xs text-indigo-600 font-bold">Windows & Facade Lines</div>
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

        <!-- =================== TAB 4: PRODUCTS =================== -->
        <div id="view-products" class="view-panel hidden space-y-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                    DOZO Product Systems Catalog
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                    Explore active architectural systems, technical specifications, and catalog customer engagement.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $prod)
                    <div class="white-liquid-card white-liquid-card-hover rounded-3xl overflow-hidden flex flex-col justify-between">
                        <div>
                            <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                                <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover">
                                <div class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-slate-900 text-xs font-bold border border-slate-200/80 shadow-xs">
                                    {{ $prod['category'] }}
                                </div>
                                <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full bg-emerald-500 text-white text-[11px] font-bold shadow-xs">
                                    {{ $prod['status'] }}
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-base font-bold text-slate-900 mb-1.5">{{ $prod['name'] }}</h3>
                                <p class="text-xs text-slate-500 leading-relaxed mb-4">{{ $prod['specs'] }}</p>
                                
                                <div class="grid grid-cols-2 gap-3 pt-3 border-t border-slate-100 text-xs">
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Catalog Views</span>
                                        <span class="font-bold font-mono text-slate-900 text-sm">{{ number_format($prod['views']) }}</span>
                                    </div>
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Inquiries</span>
                                        <span class="font-bold font-mono text-sky-600 text-sm">{{ $prod['inquiries'] }} leads</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-1">
                            <a href="{{ route('home') }}#featured-products" target="_blank" class="block w-full text-center py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-xs font-bold text-slate-700 border border-slate-200 transition-colors">
                                View Live on Website &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- =================== TAB 5: PROJECTS =================== -->
        <div id="view-projects" class="view-panel hidden space-y-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                    Featured High-Rise Projects
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                    Portfolio of commercial high-rises, IT parks, and luxury residential building envelopes.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($projects as $proj)
                    <div class="white-liquid-card rounded-3xl p-6 flex flex-col justify-between">
                        <div>
                            <div class="relative h-56 rounded-2xl overflow-hidden mb-4 bg-slate-100">
                                <img src="{{ $proj['image'] }}" alt="{{ $proj['title'] }}" class="w-full h-full object-cover">
                                <div class="absolute bottom-3 left-3 px-3 py-1 rounded-lg bg-white/95 backdrop-blur-md text-slate-900 text-xs font-bold border border-slate-200 shadow-sm">
                                    {{ $proj['location'] }}
                                </div>
                            </div>

                            <div class="flex items-start justify-between gap-2 mb-2">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">{{ $proj['title'] }}</h3>
                                    <span class="text-xs text-sky-600 font-bold">{{ $proj['type'] }}</span>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-bold {{ $proj['status'] === 'Completed & Handed Over' || $proj['status'] === 'Completed' ? 'bg-emerald-100 text-emerald-800 border border-emerald-200' : 'bg-amber-100 text-amber-800 border border-amber-200' }}">
                                    {{ $proj['status'] }}
                                </span>
                            </div>

                            <p class="text-xs text-slate-600 leading-relaxed mb-4">{{ $proj['scope'] }}</p>
                        </div>

                        <div>
                            <div class="flex items-center justify-between text-xs mb-1.5">
                                <span class="text-slate-500 font-medium">Installation & Execution</span>
                                <span class="font-mono font-bold text-slate-900">{{ $proj['progress'] }}</span>
                            </div>
                            <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden mb-4">
                                <div class="h-full bg-sky-500 rounded-full" style="width: {{ $proj['progress'] }}"></div>
                            </div>

                            <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100 text-slate-500">
                                <span>Client: <strong class="text-slate-800">{{ $proj['client'] }}</strong></span>
                                <a href="{{ route('home') }}#projects" target="_blank" class="text-sky-600 font-bold hover:underline">View Portfolio &rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

    <!-- MODAL: EDIT HERO SLIDE / PILLAR -->
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

    <!-- MODAL: EDIT HERO STAT -->
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

    <!-- MODAL: VIEW QUOTE DETAILS -->
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

    <!-- MODAL: ADD NEW QUOTE (MANUAL LEAD) -->
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

    <!-- JAVASCRIPT CONTROLLER -->
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
            } else if (q.includes('prod') || q.includes('win') || q.includes('fac')) {
                switchTab('products');
            } else if (q.includes('proj') || q.includes('tow')) {
                switchTab('projects');
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

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuoteModal();
                closeNewQuoteModal();
                closeEditSlideModal();
                closeEditStatModal();
            }
        });
    </script>
</body>
</html>
