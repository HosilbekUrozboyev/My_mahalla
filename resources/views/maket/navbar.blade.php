<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Namuna mahallasi</h1>
            {{--            <img src="asset/img/logo.png" alt="Logo">--}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link @if( request()->routeIs('index')) active @endif">Bosh sahifa</a>
                <a href="{{route('about')}}" class="nav-item nav-link @if( request()->routeIs('about')) active @endif">Biz haqimizda</a>
{{--                <a href="{{route('service')}}" class="nav-item nav-link @if( request()->routeIs('service')) active @endif">Xizmatlar</a>--}}
                <a href="{{route('news1')}}" class="nav-item nav-link @if(request()->routeIs('news1')) active @endif">Yangiliklar</a>
                <a href="{{route('contact')}}" class="nav-item nav-link @if( request()->routeIs('contact')) active @endif">Bog'lanish</a>
            </div>
            <a href="{{route('login')}}" class="btn btn-primary rounded-pill py-2 px-4">Kirish</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
{{--                <p class="animation">Sayt test rejimida ishlamoqda</p>--}}
                @yield('header')
            </div>
        </div>
    </div>
</div>
