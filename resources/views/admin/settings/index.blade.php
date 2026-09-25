@extends('admin.layout')

@section('title', 'Company & Site Settings — DOZO Admin')
@section('page_title', 'Site & Contact Settings')

@section('content')
<div class="space-y-6">
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
@endsection
