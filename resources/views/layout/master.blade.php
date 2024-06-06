<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title --}}
    <title>Kreasibilitas</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/User/style.css') }}">

    {{-- bootsrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .btn-logout {
            background: #3f51b5;
            color: white;
            font-family: 'Skranji', cursive;
            font-size: 15px;
            letter-spacing: 2.5px;
            padding: 5px 15px;
            border-radius: 30px;
            filter: drop-shadow(0 0 5px #3f51b5) drop-shadow(0 0 5px #3f51b5) contrast(1.5) brightness(1.5);
            transition: transform .2s;
        }

        .btn-logout:hover {
            transform: scale(1.2);
            border: 2px solid #e91e63;
            background: transparent;
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg  navbar-dark fixed-top">
        <div class="container">
            <h1 class="navbar-brand">Kreasibil<i class="bi bi-universal-access"></i>tas</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ 'home' == request()->path() ? 'active' : '' }}" role="button"
                            href="/home">HOME<span></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ 'tutorial/bhsisyarat' == request()->path() || 'tutorial/musik' == request()->path() || 'tutorial/tari' == request()->path() || 'tutorial/gambar' == request()->path() ? 'active' : '' }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TUTORIAL<span></span>
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item {{ 'tutorial/bhsisyarat' == request()->path() ? 'active' : '' }}"
                                    href="/tutorial/bhsisyarat">Bahasa Isyarat</span></a></li>
                            <li><a class="dropdown-item {{ 'tutorial/musik' == request()->path() ? 'active' : '' }}"
                                    href="/tutorial/musik">Musik<span></span></a></li>
                            <li><a class="dropdown-item {{ 'tutorial/tari' == request()->path() ? 'active' : '' }}"
                                    href="/tutorial/tari">Tari & Dance<span></span></a></li>
                            <li><a class="dropdown-item {{ 'tutorial/gambar' == request()->path() ? 'active' : '' }}"
                                    href="/tutorial/gambar">Menggambar & Melukis<span></span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ 'karya' == request()->path() ? 'active' : '' }}"
                            href="/karya">GALERI KARYA<span></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->path() == 'home#contact' ? 'active' : '' }}"
                            href="/home#contact">CONTACT<span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn-logout btn-sm btn-link"
                            style="text-decoration: none;"> LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- navbar --}}

    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>

    @yield('content')

    <script>
        (function(d) {
            var s = d.createElement("script");
            s.setAttribute("data-account", "wN96a5zQI8");
            s.setAttribute("src", "https://cdn.userway.org/widget.js");
            (d.body || d.head).appendChild(s);
        })(document)
    </script>
    <noscript>
        Please ensure Javascript is enabled for purposes of
        <a href="https://userway.org">website accessibility</a>
    </noscript>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    {{-- jquery --}}
    <script src="{{ asset('assets/js/jquery-3.6.3.js') }}"></script>

</body>

</html>
