@extends('admin.layout')

@section('title', 'Hero Section & 5 Pillars CMS — DOZO Admin')
@section('page_title', 'Hero Section CMS')

@section('content')
<div class="space-y-8">
    
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
@endsection

@push('modals')
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
@endpush

@push('scripts')
<script>
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

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditSlideModal();
            closeEditStatModal();
        }
    });
</script>
@endpush
