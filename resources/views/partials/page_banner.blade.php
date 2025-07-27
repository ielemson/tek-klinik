 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light" style="background-image: url({{asset("assets/img/banner/8.jpg")}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{$title ?? ""}}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url("/")}}"><i class="fas fa-home"></i> Home</a></li>
                        <li>{{$title1 ?? ""}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->