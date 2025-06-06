@extends('layouts.admin')

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Services</h3>
    
            <div class="card-tools">
                <a href="{{ route('services.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create new service</a>
            </div>
        </div>
        <!-- /.card-header -->    
        <!-- /.card-body -->
      </div>
      <div class="container">
        @if (count($services) > 0)
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($service->banner) }}" class="card-img-top" alt="{{ $service->header }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p> {{ $service->excerpt }}</p>
                            <br>
                            {{-- <a href="{{ route('services.show', $service->id) }}" class="btn btn-primary">V</a> --}}
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>

                                <!-- Delete button inside a form -->
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this service?')">
                                        Delete
                                    </button>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
      </div>
@endsection
