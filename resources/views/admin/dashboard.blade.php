@extends('admin.layout')

@section('title', 'Overview Dashboard — DOZO Architectural Platform')
@section('page_title', 'Overview Dashboard')

@section('topbar_actions')
    <!-- Global Quick Search -->
    <div class="relative hidden sm:block">
        <input 
            type="text" 
            id="dashboardSearch" 
            onkeyup="handleDashboardSearch()" 
            placeholder="Search CMS, products, leads..." 
            class="pl-9 pr-3.5 py-2 rounded-2xl bg-white/90 border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500/30 focus:border-sky-500 w-48 sm:w-64 transition-all shadow-xs"
        >
        <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </div>
@endsection

@section('content')
<div class="space-y-8">
    
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
        <a href="{{ route('admin.quotes.index') }}" class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden block group">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 group-hover:text-slate-900 transition-colors">Total Leads & Quotes</span>
                <span class="p-2.5 rounded-2xl bg-sky-50 text-sky-600 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $totalQuotes }}</div>
            <div class="flex items-center gap-1.5 text-xs text-emerald-600 font-bold">
                <span>&uarr; +28.4%</span>
                <span class="text-slate-400 font-normal">monthly growth</span>
            </div>
        </a>

        <!-- KPI 2 -->
        <a href="{{ route('admin.quotes.index') }}" class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden block group">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 group-hover:text-amber-900 transition-colors">New Inquiries</span>
                <span class="p-2.5 rounded-2xl bg-amber-50 text-amber-600 border border-amber-100 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-black text-amber-600 tracking-tight mb-1">{{ $newQuotesCount }}</div>
            <div class="text-xs text-slate-500 font-medium">Pending engineering review</div>
        </a>

        <!-- KPI 3 -->
        <a href="{{ route('admin.hero.index') }}" class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden block group">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 group-hover:text-emerald-900 transition-colors">Hero Section CMS</span>
                <span class="p-2.5 rounded-2xl bg-emerald-50 text-emerald-600 border border-emerald-100 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $heroSlides->count() }} Pillars</div>
            <div class="text-xs text-emerald-600 font-bold">100% Editable Live</div>
        </a>

        <!-- KPI 4 -->
        <a href="{{ route('admin.products.index') }}" class="white-liquid-card white-liquid-card-hover rounded-3xl p-6 relative overflow-hidden block group">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 group-hover:text-indigo-900 transition-colors">Envelope Systems</span>
                <span class="p-2.5 rounded-2xl bg-indigo-50 text-indigo-600 border border-indigo-100 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-black text-slate-900 tracking-tight mb-1">{{ $products->count() }} Products</div>
            <div class="text-xs text-indigo-600 font-bold">{{ $projects->count() }} Featured Projects</div>
        </a>

    </div>

    <!-- Quick Navigation to CMS Modules -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-base font-bold text-slate-900 flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
                <span>Direct CMS Control Modules</span>
            </h2>
            <span class="text-xs text-slate-400">All modules are partitioned into dedicated management views</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <a href="{{ route('admin.quotes.index') }}" class="p-4 rounded-2xl bg-white/80 hover:bg-white border border-slate-200/90 shadow-xs hover:shadow-md transition-all group flex flex-col justify-between">
                <div class="flex items-center justify-between mb-3">
                    <span class="p-2 rounded-xl bg-sky-50 text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-sky-600">&rarr;</span>
                </div>
                <div>
                    <div class="font-bold text-slate-900 text-xs">Inquiries CRM</div>
                    <div class="text-[11px] text-slate-400">{{ $totalQuotes }} active inquiries</div>
                </div>
            </a>

            <a href="{{ route('admin.hero.index') }}" class="p-4 rounded-2xl bg-white/80 hover:bg-white border border-slate-200/90 shadow-xs hover:shadow-md transition-all group flex flex-col justify-between">
                <div class="flex items-center justify-between mb-3">
                    <span class="p-2 rounded-xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </span>
                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-emerald-600">&rarr;</span>
                </div>
                <div>
                    <div class="font-bold text-slate-900 text-xs">Hero Carousel</div>
                    <div class="text-[11px] text-slate-400">{{ $heroSlides->count() }} Pillars & 4 Stats</div>
                </div>
            </a>

            <a href="{{ route('admin.solutions.index') }}" class="p-4 rounded-2xl bg-white/80 hover:bg-white border border-slate-200/90 shadow-xs hover:shadow-md transition-all group flex flex-col justify-between">
                <div class="flex items-center justify-between mb-3">
                    <span class="p-2 rounded-xl bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </span>
                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-indigo-600">&rarr;</span>
                </div>
                <div>
                    <div class="font-bold text-slate-900 text-xs">Our Solutions</div>
                    <div class="text-[11px] text-slate-400">3 Solution reels</div>
                </div>
            </a>

            <a href="{{ route('admin.products.index') }}" class="p-4 rounded-2xl bg-white/80 hover:bg-white border border-slate-200/90 shadow-xs hover:shadow-md transition-all group flex flex-col justify-between">
                <div class="flex items-center justify-between mb-3">
                    <span class="p-2 rounded-xl bg-purple-50 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 3.5 3h9c2 0 3.5-1 3.5-3V7c0-2-1.5-3-3.5-3h-9C5.5 4 4 5 4 7z"/></svg>
                    </span>
                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-purple-600">&rarr;</span>
                </div>
                <div>
                    <div class="font-bold text-slate-900 text-xs">DOZO Windows & Products</div>
                    <div class="text-[11px] text-slate-400">{{ $products->count() }} Systems live</div>
                </div>
            </a>

            <a href="{{ route('admin.settings.index') }}" class="p-4 rounded-2xl bg-white/80 hover:bg-white border border-slate-200/90 shadow-xs hover:shadow-md transition-all group flex flex-col justify-between">
                <div class="flex items-center justify-between mb-3">
                    <span class="p-2 rounded-xl bg-amber-50 text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-amber-600">&rarr;</span>
                </div>
                <div>
                    <div class="font-bold text-slate-900 text-xs">Site & Contact</div>
                    <div class="text-[11px] text-slate-400">Company coordinates</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Dashboard Table with Recent Inquiries -->
    <div class="white-liquid-card rounded-3xl p-6 sm:p-7">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-5">
            <div>
                <h2 class="text-lg font-black text-slate-900">Recent Customer Inquiries</h2>
                <p class="text-xs text-slate-500 mt-0.5">Live index of latest consultation inquiries received from website.</p>
            </div>
            <a href="{{ route('admin.quotes.index') }}" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
                <span>View Full Lead CRM</span>
                <span>&rarr;</span>
            </a>
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
                    @forelse ($quotes->take(6) as $index => $q)
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
            <span>Showing {{ min(6, $quotes->count()) }} of {{ $totalQuotes }} inquiries</span>
            <a href="{{ route('admin.quotes.index') }}" class="font-bold text-sky-600 hover:underline">Manage all inquiries in CRM &rarr;</a>
        </div>
    </div>

</div>
@endsection

@push('modals')
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
@endpush

@push('scripts')
<script>
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

    function handleDashboardSearch() {
        const q = document.getElementById('dashboardSearch').value.toLowerCase();
        if (!q) return;
        if (q.includes('quo') || q.includes('lead') || q.includes('inq')) {
            window.location.href = "{{ route('admin.quotes.index') }}";
        } else if (q.includes('hero') || q.includes('slide') || q.includes('stat')) {
            window.location.href = "{{ route('admin.hero.index') }}";
        } else if (q.includes('sol') || q.includes('window') || q.includes('facade')) {
            window.location.href = "{{ route('admin.solutions.index') }}";
        } else if (q.includes('prod')) {
            window.location.href = "{{ route('admin.products.index') }}";
        } else if (q.includes('proj') || q.includes('tower')) {
            window.location.href = "{{ route('admin.projects.index') }}";
        } else if (q.includes('set') || q.includes('phone') || q.includes('mail')) {
            window.location.href = "{{ route('admin.settings.index') }}";
        }
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeQuoteModal();
        }
    });
</script>
@endpush
