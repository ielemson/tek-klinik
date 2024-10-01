<div class="cover" data-image="{{ asset("assets/images/photos/parallax-counter.jpg") }}">
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>{{ $title ?? "" }}</h1>
                </div>
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li class="active">{{ $title ?? "" }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>