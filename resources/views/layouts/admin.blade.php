<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dropdown.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title', 'Marktech')</title>

</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white"> - Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white"> - Admin - Products</a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">
                        Go back to the home page</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <section>
        <!--footer-->
        <footer class="mt-auto">
            <footer class="bg-dark text-center text-white ">

                <div class="container p-4">

                    <!--Links-->
                    <section class="">

                        <div class="row">

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Acerca</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/form" class="text-white">Envia tu opinión</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Misión</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Visión</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Devoluciones</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Contactanos</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/form" class="text-white">Sugerencias</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Instagram</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </section>
                </div>

                <!--Derechos-->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    Todos los derechos reservados 2022 ©:
                    <a class="text-white" href="https://Marktech.com/">https://Marktech.com/</a>
                </div>
            </footer>
        </footer>
    </section>
</body>

</html>
