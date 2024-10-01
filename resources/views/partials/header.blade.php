<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url("/") }}" class="logo">
                        <img src="assets/images/logo-blue.png" alt="Turing"/>
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li class="">
                            <a href="{{ route("about") }}">About Us</a>
                            
                        </li>
                        <li class="">
                            <a href="javascript:;">Our Services</a>
                           
                        </li>
                        <li><a href="{{ route("contact") }}">Contact Us</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->

                    <!-- ***** Header Buttons Start ***** -->
                    <ul class="header-buttons">
                        <li><a class="btn-nav-line" href="javascript:;">Apps</a></li>
                        <li><a class="btn-nav-primary" href="{{ route("contact") }}">Support</a></li>
                    </ul>
                    <!-- ***** Header Buttons End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>