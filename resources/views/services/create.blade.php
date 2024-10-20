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
            <textarea name="content"  id="content" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
</div>
 
@endsection


@section('title')
    {{__('Page Settings')}}
@endsection

@section('scripts')
    <!-- Include jQuery from CDN -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <!-- Include CKEditor from CDN -->
    <script src="https://cdn.ckeditor.com/4.25.0/standard/ckeditor.js"></script>

    <script>
        // Initialize CKEditor
        CKEDITOR.replace('content')

     
    </script>
@endsection

