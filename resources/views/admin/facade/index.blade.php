@extends('admin.layout')

@section('title', 'Façade Section & 5 Pillars CMS — DOZO Admin')
@section('page_title', 'Façade Section CMS')

@section('content')
<div class="space-y-8">
    
    @if(session('success'))
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900">&times;</button>
        </div>
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Façade Carousel & 5 Pillars CMS
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Customize headlines, eyebrows, descriptions, CTA buttons, and background images for each of the 5 Façade architectural pillars.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <form action="{{ route('admin.facade.reset') }}" method="POST" onsubmit="return confirm('Initialize / Reset 5 standard Façade Engineering Pillars?')">
                @csrf
                <button type="submit" class="px-4 py-2.5 rounded-xl border border-slate-300 hover:bg-slate-50 text-slate-700 font-bold text-xs shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                    <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    <span>Reset / Initialize 5 Pillars</span>
                </button>
            </form>
            <a href="{{ route('facade.index') }}" target="_blank" class="px-4 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs shadow-md transition-all flex items-center gap-1.5 shrink-0">
                <span>Preview Live Façade</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>

    <!-- 5 Façade Pillar Editor Cards Grid -->
    <div>
        <h2 class="text-base font-bold text-slate-900 mb-4 flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
            <span>5 Interactive Façade Engineering Pillars</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
            @forelse ($facadeSlides as $slide)
                <div class="white-liquid-card white-liquid-card-hover rounded-3xl overflow-hidden flex flex-col justify-between p-5 border border-slate-200">
                    <div>
                        <!-- Image Preview -->
                        <div class="relative h-40 rounded-2xl overflow-hidden mb-3.5 bg-slate-100 border border-slate-200">
                            <img src="{{ $slide->image }}" alt="{{ $slide->name }}" class="w-full h-full object-cover">
                            <div class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-full bg-black/75 backdrop-blur-md text-white font-mono text-[10px] font-bold">
                                Pillar #{{ $slide->order }}
                            </div>
                            <div class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full {{ $slide->is_active ? 'bg-emerald-500 text-white' : 'bg-slate-400 text-white' }} text-[10px] font-bold">
                                {{ $slide->is_active ? 'Active' : 'Disabled' }}
                            </div>
                        </div>

                        <!-- Pillar Title & Eyebrow -->
                        <div class="text-[10.5px] font-bold uppercase tracking-wider text-sky-600 font-mono mb-1 truncate">
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
                        <button type="button" onclick="openEditSlideModal({{ json_encode($slide) }})" class="w-full py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-xs flex items-center justify-center gap-1.5 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            <span>Edit "{{ $slide->name }}"</span>
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-16 text-center bg-white border border-dashed border-slate-200 rounded-3xl p-8">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800">No Façade Slides Configured</h3>
                    <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">Click below to automatically load the 5 standard engineering pillars for the Façade CMS.</p>
                    <form action="{{ route('admin.facade.reset') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs shadow-md transition-all inline-flex items-center gap-1.5 cursor-pointer">
                            <span>Initialize 5 Standard Façade Pillars</span>
                            <span>&rarr;</span>
                        </button>
                    </form>
                </div>
            @endforelse
        </div>
    </div>

</div>
@endsection

@push('modals')
    <!-- =================== MODAL: EDIT FAÇADE PILLAR SLIDE =================== -->
    <div id="editSlideModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 class="text-lg font-black text-slate-900">Edit Façade Pillar Slide</h3>
                    <p class="text-xs text-slate-500">Update content and background image for this Façade pillar.</p>
                </div>
                <button type="button" onclick="closeEditSlideModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100 cursor-pointer">
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
                    <textarea id="slideHeadline" name="headline" rows="4" required placeholder="DOZO&#10;FAÇADES&#10;FOR ARCHITECTURAL&#10;EXCELLENCE" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                    <span class="text-[11px] text-slate-400">Tip: Each line appears stacked in uppercase font. First 2 lines bold, remaining lines regular.</span>
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
                    <input type="text" id="slideImage" name="image" placeholder="/images/solution_facade.jpg" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <input type="file" name="image_upload" accept="image/*" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input type="checkbox" id="slideIsActive" name="is_active" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500">
                    <label for="slideIsActive" class="text-xs font-bold text-slate-700">Pillar Slide is Active in Façade Page Carousel</label>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeEditSlideModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md cursor-pointer">
                        Save Slide Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('scripts')
<script>
    function openEditSlideModal(slide) {
        const form = document.getElementById('editSlideForm');
        form.action = `/admin/facade-slides/${slide.id}`;
        document.getElementById('slideName').value = slide.name;
        document.getElementById('slideEyebrow').value = slide.eyebrow || '';
        document.getElementById('slideHeadline').value = slide.headline || '';
        document.getElementById('slideDesc').value = slide.desc || '';
        document.getElementById('slideCtaText').value = slide.cta_text || 'Request Façade Consultation';
        document.getElementById('slideCtaLink').value = slide.cta_link || '#contact';
        document.getElementById('slideImage').value = slide.image || '';
        document.getElementById('slideIsActive').checked = Boolean(slide.is_active);

        document.getElementById('editSlideModal').classList.remove('hidden');
    }
    function closeEditSlideModal() {
        document.getElementById('editSlideModal').classList.add('hidden');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditSlideModal();
        }
    });
</script>
@endpush
