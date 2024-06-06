<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/style.css') }}">

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- Feather icon --}}
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(".wrapper").toggleClass("active");
            });
        });
    </script>
</head>

<body>
    <div class="wrapper">

        <div class="top_navbar fixed-top">
            <div class="logo">
                <h1 class="navbar-brand">Pesimel<i class="bi bi-universal-access"></i>tas</h1>
            </div>
            <div class="top_menu">
                <div class="home_link">
                    <a href="/">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span>Home</span>
                    </a>
                </div>
                <div class="right_info">
                    <div class="home_link">
                        <a href="/login">
                            <span class="icon"><i class=""></i></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_body">

            <div class="sidebar_menu">
                <div class="inner__sidebar_menu">

                    <ul>
                        <li>
                            <a class="{{ request()->routeIs('user.index') ? 'active' : '' }}" href="/user">
                                <span class="icon"><i class="fas fa-users"></i></span>
                                <span class="list">User</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a class="{{ request()->routeIs('flashcard.index') ||
                            request()->routeIs('flashcard.create') ||
                            request()->routeIs('flashcard.edit') ||
                            request()->routeIs('flashcard.show') ||
                            request()->routeIs('video.index') ||
                            request()->routeIs('video.create') ||
                            request()->routeIs('video.edit') ||
                            request()->routeIs('video.show')
                                ? 'active'
                                : '' }}"
                                href="#">
                                <span class="icon material-symbols-outlined">sign_language</span>
                                <span class="list">Tutorial Bahasa Isyarat</span>
                                <div class="fa fa-caret-down right"></div>
                            </a>
                            <ul>
                                <li class="sub-menu">
                                    <a class="{{ request()->routeIs('flashcard.index') ||
                                    request()->routeIs('flashcard.create') ||
                                    request()->routeIs('flashcard.edit') ||
                                    request()->routeIs('flashcard.show')
                                        ? 'active'
                                        : '' }}"
                                        href="/bhsIsyarat/flashcard">
                                        <span class="icon"><i class="bi bi-card-image"></i></span>
                                        <span class="list">Flashcard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('video.index') ||
                                    request()->routeIs('video.create') ||
                                    request()->routeIs('video.edit') ||
                                    request()->routeIs('video.show')
                                        ? 'active'
                                        : '' }}"
                                        href="/bhsIsyarat/video">
                                        <span class="icon material-symbols-outlined">smart_display</span>
                                        <span class="list">Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('musik.index') || request()->routeIs('musik.create') || request()->routeIs('musik.edit') || request()->routeIs('musik.show') ? 'active' : '' }}"
                                href="/musik">
                                <span class="icon material-symbols-outlined">library_music</span>
                                <span class="list">Tutorial Musik</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('tari.index') || request()->routeIs('tari.create') || request()->routeIs('tari.edit') || request()->routeIs('tari.show') ? 'active' : '' }}"
                                href="/tari">
                                <span class="icon material-symbols-outlined">album</span>
                                <span class="list">Tutorial Tari & Dance</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('gambar.index') || request()->routeIs('gambar.create') || request()->routeIs('gambar.edit') || request()->routeIs('gambar.show') ? 'active' : '' }}"
                                href="/gambar">
                                <span class="icon material-symbols-outlined">palette</span>
                                <span class="list">Tutorial Menggambar & Melukis</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a class="{{ request()->routeIs('galeri.index') || request()->routeIs('galeri.video') ? 'active' : '' }}"
                                href="#">
                                <span class="icon material-symbols-outlined">gallery_thumbnail</span>
                                <span class="list">Galeri</span>
                                <div class="fa fa-caret-down right"></div>
                            </a>
                            <ul>
                                <li class="sub-menu">
                                    <a class="{{ request()->routeIs('galeri.index') ? 'active' : '' }}" href="/galeri">
                                        <span class="icon"><i class="bi bi-card-image"></i></span>
                                        <span class="list">Gambar</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="/galeri/video">
                                        <span class="icon material-symbols-outlined">smart_display</span>
                                        <span class="list">Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="hamburger">
                        <div class="inner_hamburger">
                            <span class="arrow">
                                <i class="fas fa-long-arrow-alt-left"></i>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            @yield('content')
            <script>
                $(document).ready(function() {
                    $('.sub-menu ul').hide();
                    $(".sub-menu a").click(function() {
                        $(this).parent(".sub-menu").children("ul").slideToggle("100");
                        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
                    });
                });
            </script>

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

            @yield('scripts')
        </div>
    </div>
</body>

</html>
