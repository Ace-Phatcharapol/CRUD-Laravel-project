<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js" ></script>
    <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Online Shop
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-auto">
                    <li><a href="/" class="nav-link px-2 text-white">หน้าหลัก</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">เกี่ยวกับเรา</a></li>
                    <li><a href="{{ route('shop') }}" class="nav-link px-2 text-white">สินค้า</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link px-2 text-white">บทความ</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link px-2 text-white">ติดต่อเรา</a></li>
                </ul>
                <div class="text-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    สวัสดี, {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('create') }}">เขียนบทความ</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            </div>
        </nav>
            
        <main>
            @yield('banner')
            <div class="container py-5">
            @yield('content')
        </div>
        @yield('scriptCKeditor')
        </main>
    </div>
    <footer class="py-3 mt-4 bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-white">หน้าหลัก</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-white">เกี่ยวกับเรา</a></li>
            <li class="nav-item"><a href="{{ route('shop') }}" class="nav-link px-2 text-white">สินค้า</a></li>
            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link px-2 text-white">บทความ</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link px-2 text-white">ติดต่อเรา</a></li>
        </ul>
        <p class="text-center text-white">© 2024 Company, Inc</p>
    </footer>
</body>
</html>
