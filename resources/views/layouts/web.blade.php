<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/style.css') }}">
</head>

<body>
    <div class="menu-toggle">
        <div class="icon"></div>
    </div>

    <div class="main-menu">
        <div class="contant-info">
            <div><a href="mailto:hello@cre8.com">hello@cre8.com</a></div>
            <div>+10 38093888</div>
        </div>
        <div class="menu-links">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="work.html">Work</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="social-media">
            <div class="social-link-holder"><a href="#">Dribbble</a></div>
            <div class="social-link-holder"><a href="#">Instagram</a></div>
            <div class="social-link-holder"><a href="#">Twitter</a></div>
            <div class="social-link-holder"><a href="#">Facebook</a></div>
        </div>
    </div>

    <nav class="container-fluid cnav">
        <div class="row">
            <div class="col">
                <div class="logo-holder">
                    <a href="index.html"><img class="logo" src="{{ asset('web/assets/images/logo.svg') }}"
                            alt="CRE8"></a>
                </div>
            </div>
            <div class="col text-right">
                <div class="social-media">
                    <div class="social-link-holder"><a href="#">Dribbble</a></div>
                    <div class="social-link-holder"><a href="#">Instagram</a></div>
                    <div class="social-link-holder"><a href="#">Twitter</a></div>
                    <div class="social-link-holder"><a href="#">Facebook</a></div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Seccion main --}}
    @yield('main')

    <footer class="container-fluid footer">
        <div class="row">
            <div class="col">
                <div class="lg-text">
                    <span>100% satisfication.</span><br>
                    <span>let’s create</span>
                </div>
                <div class="normal-text">
                    <p>We’ll take your business to the next level, with our proven<br>strategies, latest technologies
                        and friendly creatives that<br>will work to produce the best outcome possible.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="contact-info-holder">
                    <div class="title">Call us</div>
                    <div class="contact-info">+10 38093888</div>
                </div>
            </div>
            <div class="col">
                <div class="contact-info-holder">
                    <div class="title">E-mail</div>
                    <div class="contact-info"><a href="mailto:hello@cre8.com">hello@cre8.com</a></div>
                    <div class="social-media">
                        <div class="social-link-holder"><a href="#">Dribbble</a></div>
                        <div class="social-link-holder"><a href="#">Instagram</a></div>
                        <div class="social-link-holder"><a href="#">Twitter</a></div>
                        <div class="social-link-holder"><a href="#">Facebook</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('web/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/anime.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/main.js') }}"></script>
</body>

</html>
