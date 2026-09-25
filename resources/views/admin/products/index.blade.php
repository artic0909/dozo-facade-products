@extends('admin.layout')

@section('title', 'Product Systems Catalog — DOZO Admin')
@section('page_title', 'Product Systems')

@section('content')
<div class="space-y-6">
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
                    @forelse ($products as $index => $prod)
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
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-slate-400">No products configured. Click "+ Add New Product" to create one.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('modals')
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
@endpush

@push('scripts')
<script>
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

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeProductModal();
        }
    });
</script>
@endpush
