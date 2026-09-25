@extends('admin.layout')

@section('title', 'Our Solutions & Carousel CMS — DOZO Admin')
@section('page_title', 'Our Solutions CMS')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Our Solutions CMS
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Manage titles, descriptions, CTA links, and upload unlimited sliding carousel images for DOZO Windows, DOZO Façade, and DOZO Products.
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

                    <!-- Sliding Images Reel Preview with Live Count -->
                    <div class="mb-4">
                        <div class="text-[11px] uppercase font-bold text-slate-500 mb-2.5 flex items-center justify-between">
                            <span>Sliding Carousel Reel:</span>
                            <span class="px-2.5 py-0.5 rounded-full bg-sky-100 text-sky-800 font-mono text-[10.5px] font-bold">
                                {{ count($sol->images ?? []) }} Images Active
                            </span>
                        </div>
                        <div class="flex gap-2.5 overflow-x-auto pb-2 scrollbar-none">
                            @foreach ($sol->images ?? [] as $imgIdx => $img)
                                <div class="relative h-20 w-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 group shadow-xs">
                                    <img src="{{ $img }}" alt="Slide {{ $imgIdx + 1 }}" class="w-full h-full object-cover">
                                    <div class="absolute bottom-1 right-1 px-1.5 py-0.5 rounded bg-black/75 text-[9px] font-mono text-white font-bold backdrop-blur-xs">
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
                    <button type="button" onclick="openEditSolutionModal({{ json_encode($sol) }})" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-xs transition-colors shrink-0 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                        <span>Manage Images & Content</span>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('modals')
    <!-- =================== MODAL: EDIT SOLUTION CARD =================== -->
    <div id="editSolutionModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-2xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 class="text-lg font-black text-slate-900">Manage Solution & Images</h3>
                    <p class="text-xs text-slate-500">Upload unlimited sliding images, customize content, and configure live actions.</p>
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

                <!-- DYNAMIC SLIDING IMAGES MANAGEMENT -->
                <div class="pt-3 border-t border-slate-100 space-y-3">
                    <div class="flex items-center justify-between">
                        <div>
                            <label class="block text-xs font-bold text-slate-900">Carousel Sliding Images (Unlimited)</label>
                            <p class="text-[11px] text-slate-500">Manage existing slides, add new URLs, or upload fresh images.</p>
                        </div>
                        <button type="button" onclick="addSolutionImageRow()" class="px-3 py-1.5 rounded-xl bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 text-xs font-bold flex items-center gap-1 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            <span>Add Image Slot</span>
                        </button>
                    </div>
                    
                    <!-- Dynamic Image Rows Container -->
                    <div id="solImagesContainer" class="space-y-2.5 max-h-[260px] overflow-y-auto pr-1">
                        <!-- Populated by JS -->
                    </div>

                    <!-- Bulk File Upload -->
                    <div class="p-3.5 bg-sky-50/70 border border-sky-100 rounded-2xl">
                        <div class="flex items-center gap-2 mb-1">
                            <svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span class="text-xs font-bold text-sky-950">Bulk Upload New Slide Images</span>
                        </div>
                        <p class="text-[11px] text-sky-700 mb-2">Select multiple image files at once to append them directly to this solution carousel.</p>
                        <input type="file" name="new_image_files[]" multiple accept="image/*" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-sky-600 file:text-white hover:file:bg-sky-700 cursor-pointer">
                    </div>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeEditSolutionModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Solution & Images
                    </button>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('scripts')
<script>
    function reindexSolutionRows() {
        const container = document.getElementById('solImagesContainer');
        const rows = container.querySelectorAll('.sol-image-row');
        rows.forEach((row, idx) => {
            const badge = row.querySelector('.sol-index-badge');
            if (badge) badge.textContent = `#${idx + 1}`;
            const fileInput = row.querySelector('input[type="file"]');
            if (fileInput) fileInput.name = `image_uploads[${idx}]`;
        });
    }

    function updateRowThumb(input) {
        const row = input.closest('.sol-image-row');
        if (!row) return;
        const img = row.querySelector('img');
        if (img && input.value.trim() !== '') {
            img.src = input.value.trim();
        }
    }

    function addSolutionImageRow(url = '') {
        const container = document.getElementById('solImagesContainer');
        const currentCount = container.querySelectorAll('.sol-image-row').length;
        const newIndex = currentCount;

        const rowDiv = document.createElement('div');
        rowDiv.className = 'sol-image-row flex flex-col sm:flex-row items-start sm:items-center gap-3 p-3 bg-slate-50 border border-slate-200 rounded-2xl transition-all';
        
        const displayImg = url ? url : '/images/hero_building.jpg';

        rowDiv.innerHTML = `
            <div class="flex items-center gap-2.5 w-full sm:w-auto shrink-0">
                <span class="sol-index-badge text-xs font-mono font-bold text-slate-500 bg-white px-2.5 py-1 rounded-lg border border-slate-200 shadow-2xs">#${newIndex + 1}</span>
                <img src="${displayImg}" onerror="this.src='/images/hero_building.jpg'" class="w-12 h-12 rounded-xl object-cover border border-slate-200 bg-white shrink-0" alt="Thumb">
            </div>
            <div class="flex-1 w-full space-y-1.5 min-w-0">
                <input type="text" name="images_list[]" value="${url}" placeholder="/images/example.jpg or https://..." oninput="updateRowThumb(this)" class="w-full px-3 py-1.5 rounded-xl border border-slate-200 text-xs font-mono bg-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Replace file:</span>
                    <input type="file" name="image_uploads[${newIndex}]" accept="image/*" class="text-[10px] text-slate-500 file:mr-2 file:py-0.5 file:px-2 file:rounded-lg file:border-0 file:text-[10px] file:font-semibold file:bg-slate-200 file:text-slate-700">
                </div>
            </div>
            <button type="button" onclick="removeSolutionImageRow(this)" class="p-2 text-rose-500 hover:text-rose-700 hover:bg-rose-50 rounded-xl transition-colors shrink-0 self-end sm:self-center" title="Delete this slide image">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
            </button>
        `;

        container.appendChild(rowDiv);
        reindexSolutionRows();
    }

    function removeSolutionImageRow(btn) {
        const container = document.getElementById('solImagesContainer');
        const row = btn.closest('.sol-image-row');
        if (row) {
            row.remove();
            reindexSolutionRows();
        }
        if (container.querySelectorAll('.sol-image-row').length === 0) {
            addSolutionImageRow('');
        }
    }

    function openEditSolutionModal(sol) {
        const form = document.getElementById('editSolutionForm');
        form.action = `/admin/solutions/${sol.id}`;
        document.getElementById('solTitle').value = sol.title || '';
        document.getElementById('solEyebrow').value = sol.eyebrow || '';
        document.getElementById('solDesc').value = sol.desc || '';
        document.getElementById('solCtaText').value = sol.cta_text || '';
        document.getElementById('solCtaLink').value = sol.cta_link || '';

        const container = document.getElementById('solImagesContainer');
        container.innerHTML = '';

        const images = (sol.images && Array.isArray(sol.images) && sol.images.length > 0) ? sol.images : [];
        if (images.length > 0) {
            images.forEach(imgUrl => addSolutionImageRow(imgUrl));
        } else {
            addSolutionImageRow('');
        }

        document.getElementById('editSolutionModal').classList.remove('hidden');
    }
    function closeEditSolutionModal() {
        document.getElementById('editSolutionModal').classList.add('hidden');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditSolutionModal();
        }
    });
</script>
@endpush
