<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
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
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
    <section>
        @yield('banner')
    </section>
    <section class="container py-5">
        @yield('content')
    </section>
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
