@extends("layouts.admin")

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Service</h3>
        <div class="card-tools">
            <a href="{{ route('services.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all Services</a>
        </div>
    </div>
   <div class="container my-4">
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="header">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="header">Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control summernote" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image Banner</label>
            <input type="file" name="banner" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
</div>
 
@endsection


@section('title')
    {{__('Create Services')}}
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $('.summernote').summernote({
                placeholder: 'Please ensure to paste from MS word, Notepad. Avoid pasting directly from other websites.',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
@endpush

