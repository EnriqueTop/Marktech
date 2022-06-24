<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dropdown.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title', 'Marktech')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white"><a href="/"> <img src="{!! asset('img/icon.png') !!}" >
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control me-2" style="width: 300px; height: 50px" type="search"
                placeholder="Escribe aqui..." aria-label="Search">
                <form class="d-flex mx-auto">
            <button type="button" class="btn btn-dark" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            </button>
                </form>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <!--    <a class="nav-link active" href="{{ route('home.index') }}">Home</a> -->
                 <!--   <a class="nav-link active" href="{{ route('product.index') }}">Products</a> -->
                    <a class="nav-link active" href="{{ route('cart.index') }}">Carrito</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión</a>
                        <a class="nav-link active" href="{{ route('register') }}">Registrarse</a>
                    @else
                       <!-- <a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a> -->
                        <!-- <a class="nav-link active" href="{{ route('myaccount.orders') }}">Pedidos</a> -->
                        <a class="nav-link active" >Pedidos</a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active"
                                onclick="document.getElementById('logout').submit();">Salir</a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <!--Navbar-->
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black ">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!--Dropdown-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item dropdown s ">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hardware
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle " href="#" id="multilevelDropdownMenu1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arma tu
                                computadora</a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="multilevelDropdownMenu1">
                                <!--Dropdown-Sub1-->
                                <li class="dropdown dropend">
                                <li><a class="dropdown-item" href="/card">Procesadores</a></li>
                                <li><a class="dropdown-item" href="/card">Gabinetes</a></li>
                                <li><a class="dropdown-item" href="/card">Targetas de video</a></li>
                                <li><a class="dropdown-item" href="/card">Memorias RAM</a></li>
                                <li><a class="dropdown-item" href="/card">Disipadores</a></li>
                            </ul>
                            <a class="dropdown-item dropdown-toggle " href="#" id="multilevelDropdownMenu1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Almacenamiento</a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="multilevelDropdownMenu1">
                                <!--Dropdown-Sub1-->
                                <li class="dropdown dropend">
                                <li><a class="dropdown-item" href="/card">Unidades de Estado Solido (SSD)</a></li>
                                <li><a class="dropdown-item" href="/card">Discos Duros</a></li>
                                <li><a class="dropdown-item" href="/card">Memorias RAM</a></li>
                                <li><a class="dropdown-item" href="/card">USB/SD</a></li>
                            </ul>
                    </ul>
                </li>
            </ul>
            <!--Dropdown-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/card" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Accesorios
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown dropend">
                        <li><a class="dropdown-item" href="/card">Audifonos</a></li>
                        <li><a class="dropdown-item" href="/card">Alfombrilla</a></li>
                        <li><a class="dropdown-item" href="/card">Mouse</a></li>
                        <li><a class="dropdown-item" href="/card">Teclados</a></li>
                    </ul>
            </ul>
            </li>
            </ul>
            <!--Dropdown-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="/card" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Computadoras
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown dropend">
                        <li><a class="dropdown-item" href="/card">Laptop</a></li>
                        <li><a class="dropdown-item" href="/card">Escritorio</a></li>
                    </ul>
            </ul>
            </li>
            </ul>
            </ul>
            </ul>
            </li>
            </ul>

            <!--Dropdown-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Electrónica
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown dropend">
                        <li><a class="dropdown-item" href="/card">Consolas</a></li>
                        <li><a class="dropdown-item" href="/card">Televisores</a></li>
                        <li><a class="dropdown-item" href="/card">Monitores</a></li>
                        <li><a class="dropdown-item" href="/card">Bocinas</a></li>
                        <li><a class="dropdown-item" href="/card">Cámaras</a></li>
                        <li><a class="dropdown-item" href="/card">Telefonos</a></li>
                    </ul>
            </ul>
            </li>
            </ul>
        </div>
    </nav>

    <!--content-->
    <div class="container my-4">
        @yield('content')
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
                                        <a href="mailto:herrera.alvaradoartu@gmail.com" class="text-white">Envia tu opinión</a>
                                    </li>
                                    <li>
                                        <a href="/form" class="text-white">Sugerencias</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Misión y Visión</a>
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
                                <h5 class="text-uppercase">Marktech</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/form" class="text-white">Quiénes Somos</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Aviso de Privacidad</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Terminos y Condiciones</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <img src="{{ asset('img/paypal(3).png') }}" alt="logo" class="img-fluid">
                            </div>



                        </div>
                    </section>
                </div>

                <!--Derechos-->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    Todos los derechos reservados 2022 ©:
                    <a class="text-white" href="/">https://Marktech.com/</a>
                </div>
            </footer>
        </footer>
    </section>
</body>

</html>
