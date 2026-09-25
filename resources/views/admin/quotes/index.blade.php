@extends('admin.layout')

@section('title', 'Inquiries CRM & Leads Engine — DOZO Admin')
@section('page_title', 'Inquiries CRM & Lead Engine')

@section('content')
<div class="space-y-6">
    
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
            <button onclick="openNewQuoteModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all shrink-0 flex items-center gap-1.5">
                <span>+</span>
                <span>Add Lead</span>
            </button>
        </div>
    </div>

    <!-- Status Filter Tabs -->
    <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs">
        <button onclick="filterStatus('all')" class="status-btn px-4 py-2 rounded-xl bg-[#0f172a] text-white font-bold" data-status="all">All Inquiries ({{ $totalQuotes }})</button>
        <button onclick="filterStatus('New')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold" data-status="New">New ({{ $newQuotesCount }})</button>
        <button onclick="filterStatus('Contacted')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold" data-status="Contacted">Contacted ({{ $contactedCount }})</button>
        <button onclick="filterStatus('In Review')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold" data-status="In Review">In Review ({{ $inReviewCount }})</button>
        <button onclick="filterStatus('Quotation Sent')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold" data-status="Quotation Sent">Quotation Sent ({{ $quotationSentCount }})</button>
        <button onclick="filterStatus('Completed')" class="status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold" data-status="Completed">Won / Closed ({{ $completedCount }})</button>
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
                    @forelse ($quotes as $index => $q)
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
                    @empty
                        <tr>
                            <td colspan="9" class="py-12 text-center text-slate-400">No customer inquiries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span>Showing 1 to {{ $quotes->count() }} of {{ $totalQuotes }} total records</span>
            <span>DOZO Enterprise Real-Time Lead Engine</span>
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
                btn.className = 'status-btn px-4 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold';
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

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeQuoteModal();
        }
    });
</script>
@endpush
