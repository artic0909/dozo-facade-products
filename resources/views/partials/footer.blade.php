<!-- ===================================================================
     DOZO ARCHITECTURAL FOOTER COMPONENT (RICH SEO & DYNAMIC CMS)
     =================================================================== -->
@php
    $phone = $siteSettings['contact_phone'] ?? '+91 98765 43210';
    $phoneClean = preg_replace('/[^0-9+]/', '', $phone);
    $email = $siteSettings['contact_email'] ?? 'info@dozo.co.in';
    $address = $siteSettings['head_office_address'] ?? 'DOZO Towers, Plot 42, Architectural District, Industrial Area Phase II, Mumbai, Maharashtra 400001, India';
    $catalogueUrl = $siteSettings['catalogue_url'] ?? '/catelogue.pdf';
    $footerAbout = $siteSettings['footer_about'] ?? 'DOZO is India\'s premier manufacturer and contractor of high-performance architectural aluminum windows, unitized curtain wall facades, and bespoke metallic building envelopes.';
    $certifications = $siteSettings['certifications_text'] ?? 'ISO 9001:2015 Certified | Green Building LEED Compliant | 100% Recyclable Aluminium';
    $businessHours = $siteSettings['business_hours'] ?? 'Mon – Sat: 9:00 AM – 7:00 PM IST';
    $presence = $siteSettings['pan_india_presence'] ?? 'Pan India Project Execution & AMC Support';
    
    // Social Channels
    $linkedin = $siteSettings['social_linkedin'] ?? 'https://linkedin.com/company/dozo';
    $instagram = $siteSettings['social_instagram'] ?? 'https://instagram.com/dozofacades';
    $youtube = $siteSettings['social_youtube'] ?? 'https://youtube.com/@dozo';
    $whatsapp = $siteSettings['social_whatsapp'] ?? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $phone);
    $facebook = $siteSettings['social_facebook'] ?? 'https://facebook.com';
    $twitter = $siteSettings['social_twitter'] ?? 'https://twitter.com';

    // Dynamic Window Products from CMS (Type: windows)
    $footerWindows = \App\Models\Product::where('type', 'windows')
        ->with('productCategory')
        ->orderBy('order')
        ->orderBy('id', 'asc')
        ->get();

    // Dynamic Perforation & Architectural Products from CMS (Type: products)
    $footerPerforations = \App\Models\Product::where('type', 'products')
        ->with('productCategory')
        ->orderBy('order')
        ->orderBy('id', 'asc')
        ->get();
@endphp

<!-- Desktop & Tablet Footer -->
<footer id="contact" class="hidden sm:block bg-[#121518] text-white pt-14 pb-10 border-t border-gray-800 selection:bg-sky-500 selection:text-white">
    <div class="max-w-[1340px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top CTA Banner Container -->
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6 pb-12 border-b border-gray-800/90">
            <div class="max-w-2xl text-center lg:text-left">
                <div class="inline-flex items-center gap-2 text-sky-400 text-xs font-bold uppercase tracking-widest mb-2">
                    <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span>
                    <span>Engineering Architectural Excellence &bull; Pan-India Execution</span>
                </div>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    {{ $siteSettings['cta_headline'] ?? "Let's Build Something Exceptional Together" }}
                </h3>
                <p class="text-xs sm:text-sm text-gray-400 mt-2 leading-relaxed">
                    {{ $siteSettings['cta_subheadline'] ?? 'Connect with our building envelope specialists for custom facade engineering, 3.0 kPa wind load calculations, acoustic simulations, and turnkey estimation.' }}
                </p>
            </div>

            <div class="shrink-0 flex flex-wrap items-center justify-center gap-3.5">
                <button type="button" onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-[#121518] text-xs sm:text-sm font-bold px-7 py-3.5 rounded-full transition-all duration-200 shadow-xl hover:shadow-2xl hover:scale-105 flex items-center gap-2 cursor-pointer">
                    <span>Request a Quote</span>
                    <span class="text-base font-bold">&rarr;</span>
                </button>
                <a href="{{ $catalogueUrl }}" target="_blank" class="border border-gray-700 hover:border-gray-500 bg-white/5 hover:bg-white/10 text-white text-xs sm:text-sm font-semibold px-6 py-3.5 rounded-full transition-all duration-200 flex items-center gap-2">
                    <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    <span>Download Catalogue (PDF)</span>
                </a>
                <a href="tel:{{ $phoneClean }}" class="border border-sky-500/40 bg-sky-500/10 hover:bg-sky-500/20 text-sky-300 text-xs sm:text-sm font-semibold px-5 py-3.5 rounded-full transition-all duration-200 flex items-center gap-2">
                    <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>{{ $phone }}</span>
                </a>
            </div>
        </div>

        <!-- Main Multi-Column Footer Grid (5 Columns) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-8 py-12 border-b border-gray-800/80">
            
            <!-- Col 1: Brand Info & Socials (Span 4) -->
            <div class="lg:col-span-4 flex flex-col justify-between space-y-6">
                <div>
                    <!-- Footer Logo Container -->
                    <a href="{{ route('home') }}" class="inline-flex items-center bg-white px-4 py-2 rounded-lg mb-4 shadow-sm hover:opacity-95 transition-opacity">
                        <img src="/logo.png" alt="DOZO Windows & Facades" class="h-10 sm:h-12 w-auto object-contain">
                    </a>
                    <p class="text-xs text-gray-400 leading-relaxed max-w-sm mb-5">
                        {{ $footerAbout }}
                    </p>

                    <!-- Core Specification Pillars Pill Strip -->
                    <div class="grid grid-cols-2 gap-2 text-[11px] text-gray-300 max-w-sm">
                        <div class="p-2 rounded-lg bg-white/5 border border-white/10 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                            <span><strong>3.0 kPa</strong> Wind Resistance</span>
                        </div>
                        <div class="p-2 rounded-lg bg-white/5 border border-white/10 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                            <span><strong>0.30 kPa</strong> Water Sealing</span>
                        </div>
                        <div class="p-2 rounded-lg bg-white/5 border border-white/10 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                            <span><strong>20-45 dB</strong> Acoustic Cutoff</span>
                        </div>
                        <div class="p-2 rounded-lg bg-white/5 border border-white/10 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                            <span><strong>10-12°C</strong> Heat Drop</span>
                        </div>
                    </div>
                </div>

                <!-- Social Media Channels (Dynamic) -->
                <div>
                    <div class="text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-2.5">Follow & Connect with DOZO</div>
                    <div class="flex items-center gap-2.5">
                        @if($linkedin)
                            <a href="{{ $linkedin }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#0077b5] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="LinkedIn">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        @endif
                        @if($instagram)
                            <a href="{{ $instagram }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#e1306c] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="Instagram">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        @endif
                        @if($youtube)
                            <a href="{{ $youtube }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#ff0000] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="YouTube">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        @endif
                        @if($whatsapp)
                            <a href="{{ $whatsapp }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#25d366] text-gray-300 hover:text-white flex items-center justify-center transition-all duration-200 hover:scale-110" title="WhatsApp">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Col 2: DOZO Windows (Span 3) -->
            <div class="lg:col-span-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2 border-b border-gray-800 pb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                    DOZO Windows
                </h4>
                <ul class="space-y-2.5 text-xs text-gray-400">
                    @forelse($footerWindows as $winProd)
                        <li>
                            <a href="{{ route('windows.index') }}" class="hover:text-white transition-colors flex items-center justify-between group">
                                <span class="group-hover:text-sky-300 group-hover:translate-x-0.5 transition-all">{{ $winProd->name }}</span>
                            </a>
                        </li>
                    @empty
                        <li><span class="text-gray-500">No windows products available</span></li>
                    @endforelse
                    <li class="pt-1.5">
                        <a href="{{ route('windows.index') }}" class="text-sky-400 hover:text-sky-300 font-semibold text-[11px] inline-flex items-center gap-1 group">
                            <span>View All Windows</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Perforation Products (Span 2) -->
            <div class="lg:col-span-2">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2 border-b border-gray-800 pb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                    Perforation Products
                </h4>
                <ul class="space-y-2.5 text-xs text-gray-400">
                    @forelse($footerPerforations as $perfProd)
                        <li>
                            <a href="{{ route('products.index') }}" class="hover:text-white transition-colors flex items-center justify-between group">
                                <span class="group-hover:text-indigo-300 group-hover:translate-x-0.5 transition-all">{{ $perfProd->name }}</span>
                            </a>
                        </li>
                    @empty
                        <li><span class="text-gray-500">No perforation products available</span></li>
                    @endforelse
                    <li class="pt-1.5">
                        <a href="{{ route('products.index') }}" class="text-sky-400 hover:text-sky-300 font-semibold text-[11px] inline-flex items-center gap-1 group">
                            <span>View All Products</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 4: Corporate Head Office & Dynamic Coordinates (Span 3) -->
            <div class="lg:col-span-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4 flex items-center gap-2 border-b border-gray-800 pb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                    Corporate Coordinates
                </h4>
                
                <div class="text-xs text-gray-400 space-y-3">
                    <div>
                        <div class="font-bold text-gray-200 text-[11px] uppercase tracking-wider mb-0.5">Head Office:</div>
                        <p class="text-gray-400 leading-relaxed text-[11.5px]">{{ $address }}</p>
                    </div>

                    <div class="grid grid-cols-1 gap-2 pt-1 border-t border-gray-800/80">
                        <div>
                            <span class="text-[11px] text-gray-500 font-bold uppercase">Phone: </span>
                            <a href="tel:{{ $phoneClean }}" class="text-gray-300 hover:text-sky-400 font-mono transition-colors font-medium">{{ $phone }}</a>
                        </div>
                        <div>
                            <span class="text-[11px] text-gray-500 font-bold uppercase">Email: </span>
                            <a href="mailto:{{ $email }}" class="text-gray-300 hover:text-sky-400 transition-colors font-medium">{{ $email }}</a>
                        </div>
                        <div>
                            <span class="text-[11px] text-gray-500 font-bold uppercase">Hours: </span>
                            <span class="text-gray-400 text-[11px]">{{ $businessHours }}</span>
                        </div>
                        <div>
                            <span class="text-[11px] text-gray-500 font-bold uppercase">Coverage: </span>
                            <span class="text-emerald-400 text-[11px] font-semibold">{{ $presence }}</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" onclick="openQuoteModal()" class="w-full bg-white/10 hover:bg-white hover:text-gray-900 text-white font-bold py-2 rounded-xl text-xs transition-all text-center">
                            Request Site Audit / Consultation
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- SEO Keyword Cloud & Regional Coverage Section (POWERFUL ON-PAGE SEO FOOTPRINT) -->
        <div class="py-8 border-b border-gray-800/80 text-[11px] leading-relaxed text-gray-400">
            <div class="mb-3">
                <span class="font-bold text-gray-300 uppercase tracking-wider text-[11px]">National Project Execution &amp; Fenestration Contracting:</span>
                <p class="text-gray-400 mt-1">
                    DOZO delivers engineered aluminum windows, high-rise unitized facades, and sub-frame window systems across Mumbai, Delhi NCR, Bengaluru, Hyderabad, Chennai, Kolkata, Pune, Ahmedabad, Surat, Jaipur, Kochi, Goa, Chandigarh, Lucknow, Indore, Bhubaneswar, and Coimbatore.
                </p>
            </div>
            
            <div>
                <span class="font-bold text-gray-300 uppercase tracking-wider text-[11px]">Architectural &amp; Engineering Standards:</span>
                <p class="text-gray-400 mt-1">
                    6063-T6 Architectural Grade Aluminum Alloy (110–120 MPa Tensile, 160–240 MPa Yield) &bull; DURACOAT 65–80 Microns Super Durable Architectural Powder Coating (15-Yr Warranty) &bull; 25-Yr Aluminium Material Warranty &bull; 5-Yr Hardware Warranty &bull; 3.0 kPa Wind Load Tested &bull; 0.30 kPa Water Penetration Sealing &bull; 20–45 dB Acoustic Noise Isolation &bull; 10–12°C Thermal Heat Drop &bull; Pre-Plaster Sub-Frame Amended System &bull; Annual Maintenance Contracts (AMC Available).
                </p>
            </div>
        </div>

        <!-- Bottom Sub-Footer Bar -->
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
            <div>
                <p>&copy; {{ date('Y') }} DOZO Façade Products Pvt. Ltd. All rights reserved. &bull; {{ $certifications }}</p>
            </div>
            <div class="flex flex-wrap items-center gap-5 text-gray-400 text-xs">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                <a href="{{ route('windows.index') }}" class="hover:text-white transition-colors">DOZO Windows</a>
                <a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Perforation Products</a>
                <a href="{{ route('facade.index') }}" class="hover:text-white transition-colors">Façade Systems</a>
                <a href="{{ $catalogueUrl }}" target="_blank" class="hover:text-white transition-colors">Technical Catalogue</a>
                <a href="javascript:window.scrollTo({top: 0, behavior: 'smooth'})" class="text-sky-400 hover:text-sky-300 transition-colors font-semibold">Back to Top &uarr;</a>
            </div>
        </div>

    </div>
</footer>

<!-- Mobile Footer -->
<footer class="sm:hidden bg-[#121518] text-white p-6 mt-6 border-t border-gray-800 selection:bg-sky-500 selection:text-white">
    <!-- Brand Info -->
    <div class="mb-4 text-left">
        <a href="{{ route('home') }}" class="inline-flex items-center bg-white px-3.5 py-1.5 rounded-md mb-3 shadow-sm">
            <img src="/logo.png" alt="DOZO Windows & Facades" class="h-9 w-auto object-contain">
        </a>
        <h3 class="text-base font-bold text-white leading-snug">Precision Building Envelope Solutions</h3>
        <p class="text-xs text-gray-400 mt-1 leading-relaxed">{{ $footerAbout }}</p>
    </div>

    <!-- Quick Badges for Mobile -->
    <div class="grid grid-cols-2 gap-2 my-4 text-[10.5px] text-gray-300">
        <div class="p-2 rounded-lg bg-white/5 border border-white/10">⚡ 3.0 kPa Wind Tested</div>
        <div class="p-2 rounded-lg bg-white/5 border border-white/10">💧 0.30 kPa Water Proof</div>
        <div class="p-2 rounded-lg bg-white/5 border border-white/10">🔇 20-45 dB Acoustic</div>
        <div class="p-2 rounded-lg bg-white/5 border border-white/10">🛡️ 25-Yr Aluminium</div>
    </div>

    <!-- Social Media Icons Row for Mobile -->
    <div class="flex items-center gap-3 py-3 border-y border-gray-800 my-4">
        @if($linkedin)
            <a href="{{ $linkedin }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="LinkedIn">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
        @endif
        @if($instagram)
            <a href="{{ $instagram }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="Instagram">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
        @endif
        @if($youtube)
            <a href="{{ $youtube }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="YouTube">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
        @endif
        @if($whatsapp)
            <a href="{{ $whatsapp }}" target="_blank" class="w-8 h-8 rounded-full bg-white/10 text-gray-300 flex items-center justify-center" title="WhatsApp">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            </a>
        @endif
    </div>

    <!-- Quick Navigation Links -->
    <div class="grid grid-cols-2 gap-2 text-xs text-gray-400 mb-5">
        <a href="{{ route('windows.index') }}" class="py-1">DOZO Windows</a>
        <a href="{{ route('products.index') }}" class="py-1">Perforation Products</a>
        <a href="{{ route('facade.index') }}" class="py-1">Façade Engineering</a>
        <a href="{{ route('home') }}#projects" class="py-1">Featured Projects</a>
        <a href="{{ $catalogueUrl }}" target="_blank" class="py-1">Technical Specs (PDF)</a>
        <a href="{{ route('home') }}#about" class="py-1">Quality Assurance</a>
    </div>

    <!-- Mobile Contact Direct Action Buttons -->
    <div class="flex flex-col gap-2.5">
        <button type="button" onclick="openQuoteModal()" class="w-full bg-white text-[#121518] text-xs font-bold py-3.5 rounded-xl text-center flex items-center justify-center gap-1.5 shadow-md">
            <span>Request a Consultation &amp; Quote</span>
            <span>&rarr;</span>
        </button>
        <a href="tel:{{ $phoneClean }}" class="w-full border border-gray-700 bg-white/5 text-gray-200 text-xs font-semibold py-3 rounded-xl text-center flex items-center justify-center gap-2">
            <svg class="w-3.5 h-3.5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>Call DOZO ({{ $phone }})</span>
        </a>
    </div>

    <!-- Mobile Sub-Footer -->
    <div class="text-center text-[11px] text-gray-500 mt-6 pt-4 border-t border-gray-800">
        &copy; {{ date('Y') }} DOZO. {{ $certifications }}
    </div>
</footer>
