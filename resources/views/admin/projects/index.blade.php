@extends('admin.layout')

@section('title', 'Featured Projects Showcase — DOZO Admin')
@section('page_title', 'Projects Showcase')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Featured Projects Portfolio (CRUD)
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                Manage high-rise towers, commercial parks, scope descriptions, execution progress, and client credentials.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="openAddProjectModal()" class="px-4 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold shadow-md transition-all flex items-center gap-1.5 shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Add New Project</span>
            </button>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="white-liquid-card rounded-3xl p-5 sm:p-6">
        <div class="overflow-x-auto border border-slate-200/80 rounded-2xl">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50/80 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider text-[11px]">
                        <th class="py-3.5 pl-4 w-12 text-center">#</th>
                        <th class="py-3.5 px-3">Image</th>
                        <th class="py-3.5 px-3">Title & Location</th>
                        <th class="py-3.5 px-3">Client & Type</th>
                        <th class="py-3.5 px-3">Progress</th>
                        <th class="py-3.5 px-3">Status</th>
                        <th class="py-3.5 pr-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                    @forelse ($projects as $index => $proj)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3.5 pl-4 text-center font-bold text-slate-400 font-mono">{{ $index + 1 }}</td>
                            <td class="py-3.5 px-3">
                                <div class="w-16 h-12 rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                                    <img src="{{ $proj->image }}" alt="{{ $proj->title }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-3.5 px-3">
                                <div class="font-bold text-slate-900 text-sm">{{ $proj->title }}</div>
                                <div class="text-[11px] text-slate-500">{{ $proj->location }}</div>
                            </td>
                            <td class="py-3.5 px-3">
                                <div class="font-bold text-slate-800">{{ $proj->client ?? 'Confidential' }}</div>
                                <div class="text-[11px] text-sky-600">{{ $proj->type }}</div>
                            </td>
                            <td class="py-3.5 px-3">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono font-bold text-slate-900">{{ $proj->progress }}</span>
                                    <div class="w-16 h-1.5 rounded-full bg-slate-200 overflow-hidden">
                                        <div class="h-full bg-sky-500 rounded-full" style="width: {{ $proj->progress }}"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3.5 px-3">
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-bold {{ $proj->status === 'Completed & Handed Over' || $proj->status === 'Completed' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
                                    {{ $proj->status }}
                                </span>
                            </td>
                            <td class="py-3.5 pr-4 text-right space-x-1.5">
                                <button type="button" onclick="openEditProjectModal({{ json_encode($proj) }})" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold transition-colors">
                                    Edit
                                </button>
                                <form action="{{ route('admin.projects.delete', $proj->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this project?');">
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
                            <td colspan="7" class="py-12 text-center text-slate-400">No projects added yet. Click "+ Add New Project" to add high-rise references.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('modals')
    <!-- =================== MODAL: ADD / EDIT PROJECT =================== -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop-blur">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[92vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                <div>
                    <h3 id="projectModalTitle" class="text-lg font-black text-slate-900">Add Project</h3>
                    <p class="text-xs text-slate-500">Configure tower details, scope of work, and progress.</p>
                </div>
                <button type="button" onclick="closeProjectModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form id="projectForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Project Title *</label>
                        <input type="text" id="projTitle" name="title" required placeholder="e.g. Lumina Sky Residences" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Location *</label>
                        <input type="text" id="projLocation" name="location" required placeholder="e.g. Worli, Mumbai" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Building Type</label>
                        <input type="text" id="projType" name="type" placeholder="e.g. 48-Storey Luxury Residential" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Client / Developer</label>
                        <input type="text" id="projClient" name="client" placeholder="e.g. Shapoorji Pallonji Group" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Execution Status *</label>
                        <select id="projStatus" name="status" required class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="Completed & Handed Over">Completed & Handed Over</option>
                            <option value="Under Execution (Facade Active)">Under Execution (Facade Active)</option>
                            <option value="Engineering & Mockup Testing">Engineering & Mockup Testing</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Progress %</label>
                        <input type="text" id="projProgress" name="progress" placeholder="e.g. 100% or 85%" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Scope of Work</label>
                    <input type="text" id="projScope" name="scope" placeholder="e.g. 18,500 m² Unitized Curtain Wall, High-Performance DGU" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Full Architectural Description *</label>
                    <textarea id="projDesc" name="description" rows="3" required placeholder="Detailed project overview, acoustic considerations, custom extruded fins..." class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Project High-Res Image (URL or Upload)</label>
                    <input type="text" id="projImage" name="image" placeholder="/images/proj_residential_tower.jpg" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs text-slate-900 font-mono mb-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <input type="file" name="image_upload" accept="image/*" class="w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3.5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input type="checkbox" id="projIsFeatured" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500" checked>
                    <label for="projIsFeatured" class="text-xs font-bold text-slate-700">Display in Featured Projects Showcase on Homepage</label>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeProjectModal()" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f172a] hover:bg-black text-white text-xs font-bold transition-colors shadow-md">
                        Save Project
                    </button>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('scripts')
<script>
    function openAddProjectModal() {
        const form = document.getElementById('projectForm');
        form.action = "{{ route('admin.projects.store') }}";
        document.getElementById('projectModalTitle').textContent = 'Add New Project Portfolio Entry';
        document.getElementById('projTitle').value = '';
        document.getElementById('projLocation').value = '';
        document.getElementById('projType').value = '';
        document.getElementById('projClient').value = '';
        document.getElementById('projStatus').value = 'Completed & Handed Over';
        document.getElementById('projProgress').value = '100%';
        document.getElementById('projScope').value = '';
        document.getElementById('projDesc').value = '';
        document.getElementById('projImage').value = '';
        document.getElementById('projIsFeatured').checked = true;

        document.getElementById('projectModal').classList.remove('hidden');
    }

    function openEditProjectModal(proj) {
        const form = document.getElementById('projectForm');
        form.action = `/admin/projects/${proj.id}`;
        document.getElementById('projectModalTitle').textContent = 'Edit Project: ' + proj.title;
        document.getElementById('projTitle').value = proj.title;
        document.getElementById('projLocation').value = proj.location;
        document.getElementById('projType').value = proj.type || '';
        document.getElementById('projClient').value = proj.client || '';
        document.getElementById('projStatus').value = proj.status;
        document.getElementById('projProgress').value = proj.progress || '100%';
        document.getElementById('projScope').value = proj.scope || '';
        document.getElementById('projDesc').value = proj.description || '';
        document.getElementById('projImage').value = proj.image || '';
        document.getElementById('projIsFeatured').checked = Boolean(proj.is_featured);

        document.getElementById('projectModal').classList.remove('hidden');
    }

    function closeProjectModal() {
        document.getElementById('projectModal').classList.add('hidden');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeProjectModal();
        }
    });
</script>
@endpush
