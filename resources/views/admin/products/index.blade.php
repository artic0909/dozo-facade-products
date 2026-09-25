@extends('admin.layout')

@section('title', 'Product Systems & Dynamic Categories — DOZO Admin')
@section('page_title', 'Product Systems & Categories')

@section('content')
<div class="space-y-6">
    
    <!-- Top Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                DOZO Products & Categories Catalog
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Manage architectural window and façade products with dynamic category grouping, auto-generated URL slugs, and live featured status.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="openCategoryManagerModal()" class="px-4 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 text-xs font-bold border border-slate-200 shadow-xs transition-all flex items-center gap-1.5 shrink-0">
                <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                <span>Manage Categories ({{ $categories->count() }})</span>
            </button>
            <button onclick="openAddProductModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all flex items-center gap-1.5 shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Add New Product</span>
            </button>
        </div>
    </div>

    <!-- Category Filter / Badges Bar -->
    <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs">
        <button onclick="filterCategory('all')" class="cat-filter-btn px-4 py-2 rounded-xl bg-[#0f172a] text-white font-bold transition-colors" data-cat="all">
            All Products ({{ $products->count() }})
        </button>
        @foreach ($categories as $cat)
            <button onclick="filterCategory('{{ $cat->id }}')" class="cat-filter-btn px-3.5 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold transition-colors flex items-center gap-2" data-cat="{{ $cat->id }}">
                <span>{{ $cat->name }}</span>
                <span class="px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 font-mono text-[10px] font-bold">{{ $cat->products_count }}</span>
            </button>
        @endforeach
    </div>

    <!-- Products Table with Indexing & Actions -->
    <div class="white-liquid-card rounded-3xl p-5 sm:p-6">
        <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                        <th class="py-3.5 pl-4 w-12 text-center">#</th>
                        <th class="py-3.5 px-3">Thumbnail</th>
                        <th class="py-3.5 px-3">Product Name & Auto Slug</th>
                        <th class="py-3.5 px-3">Category (Dynamic)</th>
                        <th class="py-3.5 px-3">Theme</th>
                        <th class="py-3.5 px-3">Specs (Acoustic / Wind Load)</th>
                        <th class="py-3.5 px-3">Featured</th>
                        <th class="py-3.5 pr-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                    @forelse ($products as $index => $prod)
                        <tr class="prod-row hover:bg-slate-50/80 transition-colors" data-category-id="{{ $prod->category_id }}">
                            <td class="py-3.5 pl-4 text-center font-bold text-slate-400 font-mono">{{ $index + 1 }}</td>
                            <td class="py-3.5 px-3">
                                <div class="w-14 h-12 rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                                    <img src="{{ $prod->image }}" alt="{{ $prod->name }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-3.5 px-3">
                                <div class="font-bold text-slate-900 text-sm">{{ $prod->name }}</div>
                                <div class="font-mono text-[11px] text-slate-400 flex items-center gap-1 mt-0.5">
                                    <span class="text-sky-500 font-bold">slug:</span>
                                    <span class="bg-slate-100 px-1.5 py-0.5 rounded text-slate-600 font-semibold">/products/{{ $prod->slug }}</span>
                                </div>
                            </td>
                            <td class="py-3.5 px-3">
                                @if($prod->productCategory)
                                    <span class="px-2.5 py-1 rounded-lg bg-sky-50 text-sky-800 font-bold border border-sky-200/80 text-[11px] inline-flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                                        <span>{{ $prod->productCategory->name }}</span>
                                    </span>
                                    <div class="text-[10px] text-slate-400 font-mono mt-0.5 pl-3">{{ $prod->productCategory->slug }}</div>
                                @else
                                    <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 font-bold text-[11px]">
                                        {{ $prod->category ?? 'Unassigned' }}
                                    </span>
                                @endif
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
                            <td colspan="8" class="py-12 text-center text-slate-400">No products configured. Click "+ Add New Product" to create one.</td>
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
                    <p class="text-xs text-slate-500">Configure technical specifications, dynamic category, and media. Slugs are auto-generated from product name.</p>
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
                        <input type="text" id="prodName" name="name" required placeholder="e.g. Slimline Sliding System" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Dynamic Category *</label>
                        <select id="prodCategoryId" name="category_id" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 font-bold focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }} ({{ $cat->slug }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Theme Card Style *</label>
                        <select id="prodTheme" name="theme" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="light">Light Glass (White card)</option>
                            <option value="dark">Dark Obsidian (Black card)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Acoustic Rating</label>
                        <input type="text" id="prodAcoustic" name="acoustic_rating" placeholder="e.g. Up to 44 dB" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Material Grade</label>
                        <input type="text" id="prodMaterial" name="material_grade" placeholder="e.g. 6063-T6 Architectural Alloy" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Wind Load Performance</label>
                        <input type="text" id="prodWind" name="wind_load" placeholder="e.g. Up to 4.5 kPa Class E" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Finish Options</label>
                    <input type="text" id="prodFinish" name="finish_options" placeholder="e.g. PVDF, Powder Coated (Qualicoat), Anodized 25μm" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Description & Engineering Specs *</label>
                    <textarea id="prodDesc" name="short_desc" rows="3" required placeholder="Technical performance, thermal break, and engineering details..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
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

    <!-- =================== MODAL: MANAGE CATEGORIES & SLUGS =================== -->
    <div id="categoryManagerModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-2xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-5">
                <div>
                    <h3 class="text-lg font-black text-slate-900">Dynamic Product Categories</h3>
                    <p class="text-xs text-slate-500">Create and organize product categories. Slugs are automatically generated.</p>
                </div>
                <button type="button" onclick="closeCategoryManagerModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Create New Category Box -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 mb-6">
                <div class="text-xs font-black uppercase tracking-wider text-slate-700 mb-3 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                    <span id="catFormTitle">Add New Category</span>
                </div>
                <form id="categoryForm" action="{{ route('admin.categories.store') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-[11px] font-bold text-slate-700 mb-1">Category Name *</label>
                        <input type="text" id="catName" name="name" required placeholder="e.g. Curtain Wall Systems" class="w-full px-3 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-700 mb-1">Description (Optional)</label>
                        <input type="text" id="catDesc" name="description" placeholder="Brief overview of this system category..." class="w-full px-3 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="catIsActive" name="is_active" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500" checked>
                            <label for="catIsActive" class="text-xs font-bold text-slate-700">Active</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" id="catCancelEditBtn" onclick="resetCategoryForm()" class="hidden px-3.5 py-1.5 rounded-xl bg-slate-200 hover:bg-slate-300 text-slate-700 text-xs font-bold transition-colors">
                                Cancel
                            </button>
                            <button type="submit" id="catSubmitBtn" class="px-4 py-2 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-xs">
                                + Save Category
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Existing Categories List -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 font-mono mb-3">Existing Categories ({{ $categories->count() }})</h4>
                <div class="space-y-2 max-h-[280px] overflow-y-auto pr-1">
                    @foreach ($categories as $cat)
                        <div class="p-3.5 rounded-2xl bg-white border border-slate-200 flex items-center justify-between gap-3 shadow-2xs hover:border-slate-300 transition-colors">
                            <div class="min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-slate-900 text-xs">{{ $cat->name }}</span>
                                    <span class="font-mono text-[10px] text-sky-700 bg-sky-50 px-2 py-0.5 rounded border border-sky-100 font-bold">slug: {{ $cat->slug }}</span>
                                </div>
                                @if($cat->description)
                                    <div class="text-[11px] text-slate-400 truncate mt-0.5">{{ $cat->description }}</div>
                                @endif
                                <div class="text-[10px] text-slate-500 font-semibold mt-0.5">
                                    {{ $cat->products_count }} Products attached
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5 shrink-0">
                                <button type="button" onclick="editCategory({{ json_encode($cat) }})" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold" title="Edit Category">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </button>
                                <form action="{{ route('admin.categories.delete', $cat->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this category? Attached products will become unassigned.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-600 transition-colors" title="Delete Category">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 mt-5 flex justify-end">
                <button type="button" onclick="closeCategoryManagerModal()" class="px-5 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
<script>
    // Category Filter in Products Table
    function filterCategory(catId) {
        document.querySelectorAll('.cat-filter-btn').forEach(btn => {
            if (btn.getAttribute('data-cat') === catId) {
                btn.className = 'cat-filter-btn px-4 py-2 rounded-xl bg-[#0f172a] text-white font-bold transition-colors';
            } else {
                btn.className = 'cat-filter-btn px-3.5 py-2 rounded-xl bg-white/80 hover:bg-white text-slate-700 border border-slate-200 font-semibold transition-colors flex items-center gap-2';
            }
        });

        document.querySelectorAll('.prod-row').forEach(row => {
            const rowCatId = row.getAttribute('data-category-id');
            if (catId === 'all' || rowCatId === catId) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // Product Modal Operations
    function openAddProductModal() {
        const form = document.getElementById('productForm');
        form.action = "{{ route('admin.products.store') }}";
        document.getElementById('productModalTitle').textContent = 'Add New Product System';
        document.getElementById('prodName').value = '';
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
        if (prod.category_id) {
            document.getElementById('prodCategoryId').value = prod.category_id;
        }
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

    // Category Manager Modal Operations
    function openCategoryManagerModal() {
        resetCategoryForm();
        document.getElementById('categoryManagerModal').classList.remove('hidden');
    }

    function closeCategoryManagerModal() {
        document.getElementById('categoryManagerModal').classList.add('hidden');
    }

    function editCategory(cat) {
        const form = document.getElementById('categoryForm');
        form.action = `/admin/categories/${cat.id}`;
        document.getElementById('catFormTitle').textContent = 'Edit Category: ' + cat.name;
        document.getElementById('catName').value = cat.name;
        document.getElementById('catDesc').value = cat.description || '';
        document.getElementById('catIsActive').checked = Boolean(cat.is_active);
        document.getElementById('catSubmitBtn').textContent = 'Save Changes';
        document.getElementById('catCancelEditBtn').classList.remove('hidden');
    }

    function resetCategoryForm() {
        const form = document.getElementById('categoryForm');
        form.action = "{{ route('admin.categories.store') }}";
        document.getElementById('catFormTitle').textContent = 'Add New Category';
        document.getElementById('catName').value = '';
        document.getElementById('catDesc').value = '';
        document.getElementById('catIsActive').checked = true;
        document.getElementById('catSubmitBtn').textContent = '+ Save Category';
        document.getElementById('catCancelEditBtn').classList.add('hidden');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeProductModal();
            closeCategoryManagerModal();
        }
    });
</script>
@endpush
