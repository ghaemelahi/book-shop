@include('layouts.header')
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: rgb(43, 205, 111);">
            @include('layouts.sidebare')
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
@include('layouts.footer')