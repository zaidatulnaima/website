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

    {{-- googleicon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&family=Pacifico&family=Rampart+One&family=Skranji&display=swap');

        :root {
            --primary-color: #e91e63;
            --accent-color: #3f51b5;
            --text-color: #263238;
            --body-color: #80deea;
            --main-font: "roboto";
            --font-bold: 700;
            --font-regular: 400;
        }

        h1 {
            font-weight: var(--font-bold);
        }

        input,
        button {
            border: none;
            background: none;
            outline: 0;
        }

        button {
            cursor: pointer;
        }

        .SearchBox-input::placeholder {
            /* No es un seudoelemento estandar */
            color: white;
            opacity: 0.6;
        }

        /* Chrome, Opera ySafari */
        .SearchBox-input::-webkit-input-placeholder {
            color: white;
        }

        /* Firefox 19+ */
        .SearchBox-input::-moz-placeholder {
            color: white;
        }

        /* IE 10+ y Edge */
        .SearchBox-input:-ms-input-placeholder {
            color: white;
        }

        /* Firefox 18- */
        #formGroupExampleInput:-moz-placeholder {
            color: white;
        }

        .SearchBox {
            --height: 4em;
            display: flex;

            border-radius: var(--height);
            background-color: var(--primary-color);
            height: var(--height);
        }

        .SearchBox:hover .SearchBox-input {
            padding-left: 2em;
            padding-right: 1em;
            width: 240px;
        }

        .SearchBox-input {
            width: 0;
            font-size: 1.2em;
            color: #fff;
            transition: 0.45s;
        }

        .SearchBox-button {
            display: flex;
            border-radius: 50%;
            width: var(--height);
            height: var(--height);
            background-color: var(--accent-color);
            transition: 0.3s;
            filter: drop-shadow(0 0 5px #3f51b5) drop-shadow(0 0 5px #3f51b5) contrast(2) brightness(2);
        }

        .SearchBox-button:active {
            transform: scale(0.85);
        }

        .SearchBox-icon {
            margin: auto;
            color: #fff;
        }

        @media screen and (min-width: 400px) {
            .SearchBox:hover .SearchBox-input {
                width: 500px;
            }
        }

        .btn-login {
            background-color: var(--accent-color);
            font-family: 'Skranji', cursive;
            font-size: 15px;
            color: white;
            padding: 7px 20px;
            border-radius: 100px;
            filter: drop-shadow(0 0 5px #3f51b5) drop-shadow(0 0 5px #3f51b5) contrast(1.5) brightness(1.5);
            transition: 0.5s;
            letter-spacing: 2.5px;
        }

        .btn-login:hover {
            background-color: transparent;
            border: 2px solid #e91e63;
            cursor: pointer;
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
                        <a class="nav-link {{ '/' == request()->path() ? 'active' : '' }}" role="button"
                            href="/">HOME<span></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">CONTACT<span></span></a>
                    </li>
                    <li class="nav-item">
                        <div class="SearchBox d-flex" role="search">
                            <input type="search" class="SearchBox-input" placeholder="Cari di sini"
                                aria-label="Search">
                            <button class="SearchBox-button" type="submit">
                                <i class="SearchBox-icon  material-icons">search</i>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="btn btn-login btn-sm btn-link" style="text-decoration: none;"> LOGIN </a>
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

    @yield('scripts')
</body>

</html>
