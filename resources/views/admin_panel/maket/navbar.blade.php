

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{'/'}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form method="POST" action="{{ route('logout') }}" class="nav-item d-none d-sm-inline-block">
                @csrf
                <a class="nav-link"
                   onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Log Out
                </a>
            </form>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>


{{--<form class="dropdown-item" method="POST" action="{{ route('logout') }}">--}}
{{--    @csrf--}}

{{--    <a href="{{ route('logout') }}" class="dropdown-item"--}}
{{--       onclick="event.preventDefault();--}}
{{--                    this.closest('form').submit();">--}}
{{--        {{ __('Log Out') }}--}}
{{--    </a>--}}
{{--</form>--}}


