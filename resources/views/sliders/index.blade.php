@extends('layouts.admin')

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Sliders</h3>
    
            <div class="card-tools">
                <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create new sliders</a>
            </div>
        </div>
        <!-- /.card-header -->    
        <!-- /.card-body -->
      </div>
      <div class="container">
        @if (count($sliders) > 0)
        <div class="row">
           @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>First Header</th>
                <th>Second Header</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sliders as $slider)
                <tr>
                    <td><img src="{{ asset('storage/' . $slider->image) }}" width="100" /></td>
                    <td>{{ $slider->first_header }}</td>
                    <td>{{ $slider->second_header }}</td>
                    <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this slider?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No sliders found.</td></tr>
            @endforelse
        </tbody>
    </table>
        </div>
        @endif
      </div>
@endsection
