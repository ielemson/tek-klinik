@csrf

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{ old('status', $service->status ?? '') == 'active' ? 'selected' : '' }}>Active
                </option>
                <option value="inactive" {{ old('status', $service->status ?? '') == 'inactive' ? 'selected' : '' }}>
                    Inactive</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title ?? '') }}"
                required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="parent_id">Parent Service</label>
            <select name="parent_id" class="form-control">
                <option value="">-- None --</option>
                @foreach ($parents as $id => $title)
                    <option value="{{ $id }}"
                        {{ old('parent_id', $service->parent_id ?? '') == $id ? 'selected' : '' }}>
                        {{ $title }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="excerpt">Excerpt</label>
            <textarea name="excerpt" class="form-control">{{ old('excerpt', $service->excerpt ?? '') }}</textarea>
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="content">Content</label>
    <textarea name="content" class="form-control summernote">{{ old('content', $service->content ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="banner">Banner Image</label>
    @if (!empty($service->banner))
        <div class="mb-2">
            <img src="{{ asset('storage/' . $service->banner) }}" alt="Banner" style="max-height: 100px;">
        </div>
    @endif
    <input type="file" name="banner" class="form-control">
</div>
