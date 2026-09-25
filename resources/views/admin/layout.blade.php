<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'DOZO Admin — Enterprise Architectural CMS')</title>
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" href="/logo.png">
    <link rel="apple-touch-icon" href="/logo.png">
    
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

        /* White Liquid Glass Sidebar */
        .white-liquid-sidebar {
            background: rgba(255, 255, 255, 0.84);
            backdrop-filter: blur(28px) saturate(190%);
            -webkit-backdrop-filter: blur(28px) saturate(190%);
            border-right: 1px solid rgba(226, 232, 240, 0.85);
            box-shadow: 4px 0 24px -2px rgba(15, 23, 42, 0.03);
        }

        /* Sidebar Nav Item */
        .sidebar-nav-item {
            border-radius: 16px;
            transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            border: 1px solid transparent;
            text-decoration: none;
            display: flex;
        }

        .sidebar-nav-item.active {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.96) 0%, rgba(15, 23, 42, 0.99) 100%);
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 
                0 8px 20px -4px rgba(15, 23, 42, 0.3),
                inset 0 1px 1.5px 0 rgba(255, 255, 255, 0.4),
                inset 0 -1px 1px 0 rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
        }

        .sidebar-nav-item.active .nav-icon {
            color: #38bdf8 !important;
        }

        .sidebar-nav-item.active .nav-badge {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .sidebar-nav-item:not(.active) {
            color: #475569;
        }

        .sidebar-nav-item:not(.active):hover {
            background: rgba(255, 255, 255, 0.95);
            color: #0f172a;
            border-color: rgba(226, 232, 240, 0.85);
            box-shadow: 0 3px 10px -2px rgba(15, 23, 42, 0.05);
            transform: translateX(2px);
        }

        .sidebar-nav-item:not(.active) .nav-icon {
            color: #64748b;
        }

        .sidebar-nav-item:not(.active):hover .nav-icon {
            color: #0284c7;
        }

        .sidebar-nav-item:not(.active) .nav-badge {
            background: rgba(241, 245, 249, 0.9);
            color: #475569;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        /* Top Bar */
        .white-liquid-topbar {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(24px) saturate(190%);
            -webkit-backdrop-filter: blur(24px) saturate(190%);
            border-bottom: 1px solid rgba(226, 232, 240, 0.85);
            box-shadow: 0 4px 20px -4px rgba(0, 0, 0, 0.02);
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
    @stack('styles')
</head>
<body class="h-full flex antialiased selection:bg-sky-500 selection:text-white">

    <!-- =================== LEFT WHITE LIQUID GLASS SIDEBAR =================== -->
    <aside id="sidebarDrawer" class="fixed inset-y-0 left-0 z-50 w-72 white-liquid-sidebar flex flex-col justify-between p-5 transition-transform duration-300 lg:translate-x-0 -translate-x-full">
        
        <!-- Top Brand & Navigation -->
        <div class="space-y-6 overflow-y-auto">
            
            <!-- Logo & Brand Header -->
            <div class="flex items-center justify-between pb-4 border-b border-slate-200/80">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <img src="/logo.png" alt="DOZO" class="h-8 sm:h-9 w-auto object-contain transition-transform group-hover:scale-105">
                </a>
                <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold font-mono border border-slate-200/80">
                    CMS v2.6
                </span>
            </div>

            <!-- Navigation Sections -->
            <div class="space-y-5">
                
                <!-- Section 1: Core Operations -->
                <div>
                    <div class="px-3 text-[10.5px] font-black uppercase tracking-wider text-slate-400 font-mono mb-2">
                        Core Operations
                    </div>
                    <nav class="space-y-1 text-xs font-bold">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-nav-item {{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.index') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                <span>Overview Dashboard</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.quotes.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.quotes.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                <span>Inquiries CRM</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10.5px] font-bold font-mono transition-all">
                                {{ \App\Models\Quote::count() }}
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Section 2: Website CMS Modules -->
                <div>
                    <div class="px-3 text-[10.5px] font-black uppercase tracking-wider text-slate-400 font-mono mb-2">
                        Content & Media CMS
                    </div>
                    <nav class="space-y-1 text-xs font-bold">
                        <a href="{{ route('admin.hero.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.hero.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                <span>Hero Section CMS</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10px] font-bold transition-all">5 Pillars</span>
                        </a>
                        <a href="{{ route('admin.facade.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.facade.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                <span>Façade Section CMS</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10px] font-bold transition-all">5 Pillars</span>
                        </a>
                        <a href="{{ route('admin.solutions.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.solutions.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                <span>Our Solutions CMS</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10px] font-bold transition-all">3 Cards</span>
                        </a>
                        <a href="{{ route('admin.products.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 3.5 3h9c2 0 3.5-1 3.5-3V7c0-2-1.5-3-3.5-3h-9C5.5 4 4 5 4 7z"/></svg>
                                <span>DOZO Windows & Products</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10.5px] font-bold font-mono transition-all">
                                {{ \App\Models\Product::count() }}
                            </span>
                        </a>
                        <a href="{{ route('admin.projects.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center justify-between">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                <span>Projects Showcase</span>
                            </div>
                            <span class="nav-badge px-2 py-0.5 rounded-full text-[10.5px] font-bold font-mono transition-all">
                                {{ \App\Models\Project::count() }}
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Section 3: Configuration -->
                <div>
                    <div class="px-3 text-[10.5px] font-black uppercase tracking-wider text-slate-400 font-mono mb-2">
                        Settings
                    </div>
                    <nav class="space-y-1 text-xs font-bold">
                        <a href="{{ route('admin.settings.index') }}" class="sidebar-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }} w-full px-3.5 py-2.5 items-center gap-3">
                            <svg class="w-4 h-4 nav-icon transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Site & Contact Settings</span>
                        </a>
                    </nav>
                </div>

            </div>

        </div>

        <!-- Sidebar Bottom: Admin Card & Actions -->
        <div class="pt-4 border-t border-slate-200/80 space-y-3">
            <a href="{{ route('home') }}" target="_blank" class="w-full py-2.5 px-3 rounded-2xl bg-white/80 hover:bg-white text-slate-700 text-xs font-bold border border-slate-200/80 shadow-xs transition-all flex items-center justify-between">
                <span>View Public Site</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>

            <div class="p-3 rounded-2xl bg-slate-50/80 border border-slate-200/80 flex items-center justify-between gap-3">
                <div class="flex items-center gap-2.5 overflow-hidden">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-sky-400 to-indigo-600 text-white font-black text-xs flex items-center justify-center shrink-0 shadow-xs">
                        AD
                    </div>
                    <div class="overflow-hidden">
                        <div class="font-bold text-xs text-slate-900 truncate">DOZO Admin</div>
                        <div class="text-[10px] text-slate-400 truncate">admin@dozo.co.in</div>
                    </div>
                </div>
                <a href="{{ route('admin.logout') }}" class="p-2 rounded-xl text-red-500 hover:text-red-700 hover:bg-red-50 transition-colors" title="Logout">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </a>
            </div>
        </div>

    </aside>

    <!-- Background Backdrop for Mobile Sidebar -->
    <div id="sidebarBackdrop" onclick="toggleSidebar()" class="fixed inset-0 z-40 bg-slate-900/40 backdrop-blur-xs hidden lg:hidden"></div>

    <!-- =================== RIGHT MAIN WORKSPACE =================== -->
    <div class="flex-1 flex flex-col min-h-screen lg:ml-72 transition-all">
        
        <!-- Top Compact Bar -->
        <header class="white-liquid-topbar sticky top-0 z-30 px-4 sm:px-8 py-3.5 flex items-center justify-between gap-4">
            
            <div class="flex items-center gap-3">
                <!-- Hamburger Menu for Mobile -->
                <button type="button" onclick="toggleSidebar()" class="p-2 rounded-xl bg-white border border-slate-200 text-slate-600 lg:hidden shadow-xs">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                
                <!-- Section Breadcrumb -->
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 font-mono block">DOZO Architectural Platform</span>
                    <h2 class="text-sm font-black text-slate-900 tracking-tight">@yield('page_title', 'Admin Dashboard')</h2>
                </div>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-3">
                @yield('topbar_actions')

                <!-- Add Lead Button -->
                <button type="button" onclick="openNewQuoteModal()" class="px-4 py-2 rounded-2xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md hover:shadow-lg transition-all flex items-center gap-1.5 shrink-0">
                    <span class="text-sm leading-none">+</span>
                    <span>New Lead</span>
                </button>

                <!-- Live Status Indicator -->
                <div class="hidden md:flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-emerald-50 border border-emerald-200/80 text-[11px] font-bold text-emerald-700 shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Live CMS</span>
                </div>
            </div>

        </header>

        <!-- Main Page Content Panels -->
        <main class="p-4 sm:p-8 flex-1 max-w-[1500px] w-full mx-auto">

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-bold">&times;</button>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button type="button" onclick="this.parentElement.remove()" class="text-rose-600 hover:text-rose-900 font-bold">&times;</button>
                </div>
            @endif

            @yield('content')

        </main>
    </div>

    <!-- =================== GLOBAL MODAL: ADD NEW QUOTE / LEAD =================== -->
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

    @stack('modals')

    <!-- Common Global Scripts -->
    <script>
        // Mobile Sidebar Drawer Toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebarDrawer');
            const backdrop = document.getElementById('sidebarBackdrop');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('hidden');
            }
        }

        // New Quote Modal
        function openNewQuoteModal() {
            document.getElementById('newQuoteModal').classList.remove('hidden');
        }
        function closeNewQuoteModal() {
            document.getElementById('newQuoteModal').classList.add('hidden');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeNewQuoteModal();
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
