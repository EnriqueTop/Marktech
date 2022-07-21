<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/dropdown.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/dark-mode-switch.min.js')); ?>" defer></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dark-mode.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <title><?php echo $__env->yieldContent('title', 'Marktech'); ?></title>
</head>

<body>
    <!-- header -->

    <div class="container-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white"><a href="/"> <img
                    src="<?php echo asset('img/mk2otln.png'); ?>">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-md-4">
                        <div class="input-group">
                            <form action="/busqueda" method="POST" role="search">
                                <?php echo e(csrf_field()); ?>

                                <div class="input-group">
                                    <input type="text" class="form-control" name="barra"
                                        placeholder="Buscar productos..." style="width: 300px; height: 50px">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">

                            <?php if(auth()->guard()->guest()): ?>
                                <a class="nav-link active" href="<?php echo e(route('cart.index')); ?>"><span class="iconify"
                                        data-icon="eva:shopping-cart-outline" data-width="24"></span> Carrito</a>
                                <a class="nav-link active" href="/IniciarSesion">Iniciar Sesión</a>
                                <a class="nav-link active" href="/Registro">Registrarse</a>
                            <?php else: ?>
                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <a class="nav-link active fs-5"
                                        href="<?php echo e(route('admin.product.index', ['id' => Auth::user()->id])); ?>">Modo
                                        administrador</a>
                                <?php endif; ?>

                                <a class="nav-link active position-relative" href="<?php echo e(route('cart.index')); ?>"><span
                                        class="iconify" data-icon="eva:shopping-cart-outline" data-width="24"></span>
                                    Carrito
                                    
                                </a>

                                <a class="nav-link active" href="<?php echo e(route('myaccount.orders')); ?>">Mis Compras</a>
                                <a class="nav-link active" href="/micuenta">Mi Cuenta</a>
                                <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST">
                                    <a role="button" class="nav-link active"
                                        onclick="document.getElementById('logout').submit();">Salir</a>

                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php endif; ?>


                        </div>
                    </div>
                    <div class="form-check
                                form-switch">
                        <input type="checkbox" class="form-check-input" id="darkSwitch" />
                        <label class="custom-control-label" for="darkSwitch">Modo Oscuro</label>
                    </div>

                </div>

        </nav>
        <!--Navbar-->
        </nav>
        <br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black rounded">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!--Dropdown-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown s ">
                        <a class="btn btn-link btn-lg" href="/hardware" id="navbarDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Hardware <span class="iconify"
                                data-icon="bx:down-arrow"></span></a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="#">Arma tu
                                        computadora</a></li>
                                <li><a class="dropdown-item" href="/hardware/procesadores">Procesadores</a></li>
                                <li><a class="dropdown-item" href="/hardware\motherboards">Targetas Madre</a></li>
                                <li><a class="dropdown-item" href="/hardware\gabinetes">Gabinetes</a></li>
                                <li><a class="dropdown-item" href="/hardware\graficas">Targetas de video</a></li>
                                <li><a class="dropdown-item" href="/hardware\ram">Memorias RAM</a></li>
                                <li><a class="dropdown-item" href="/hardware\disipadores">Disipadores</a></li>
                            </ul>
                            <ul>
                                <li><a class="dropdown-item" href="#">Almacenamiento</a></li>
                                <li><a class="dropdown-item" href="/hardware\ssd">Unidades de Estado Solido (SSD)</a>
                                </li>
                                <li><a class="dropdown-item" href="/hardware\hdd">Discos Duros</a></li>
                                <li><a class="dropdown-item" href="/hardware\ram">Memorias RAM</a></li>
                                <li><a class="dropdown-item" href="/hardware\usb">USB/SD</a></li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <!--Dropdown-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="btn btn-link btn-lg" href="/accesorios" id="navbarDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Accesorios <span class="iconify"
                                data-icon="bx:down-arrow"></span></a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="#">Accesorios</a></li>
                                <li><a class="dropdown-item" href="/accesorios\audifonos">Audifonos</a></li>
                                <li><a class="dropdown-item" href="/accesorios\alfombrillas">Alfombrillas</a></li>
                                <li><a class="dropdown-item" href="/accesorios\mouse">Mouse</a></li>
                                <li><a class="dropdown-item" href="/accesorios\teclados">Teclados</a></li>
                            </ul>
                        </ul>
                </ul>
                </li>
                </ul>
                <!--Dropdown-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="btn btn-link btn-lg" href="/computadoras" id="navbarDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Computadoras <span class="iconify"
                                data-icon="bx:down-arrow"></span></a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="#">Computadoras</a></li>
                                <li><a class="dropdown-item" href="/computadoras\laptop">Laptop</a></li>
                                <li><a class="dropdown-item" href="/computadoras\escritorio">Escritorio</a></li>
                            </ul>
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
                        <a class="btn btn-link btn-lg" href="/electronica" id="navbarDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Electrónica <span class="iconify"
                                data-icon="bx:down-arrow"></span></a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="#">Electrónica</a></li>
                                <li><a class="dropdown-item" href="/electronica\consolas">Consolas</a></li>
                                <li><a class="dropdown-item" href="/electronica\tv">Televisores</a></li>
                                <li><a class="dropdown-item" href="/electronica\monitores">Monitores</a></li>
                                <li><a class="dropdown-item" href="/electronica\bocinas">Bocinas</a></li>
                                <li><a class="dropdown-item" href="/electronica\camaras">Cámaras</a></li>
                                <li><a class="dropdown-item" href="/electronica\telefonos">Telefonos</a></li>
                            </ul>
                        </ul>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
        <!--content-->
        <div class="container my-4">
            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <!--chatbot-->

        <script>
            var botmanWidget = {
                frameEndpoint: '/chatbot',
                title: '',
                introMessage: 'Bienvenido al chatbot de Marktech',
                placeholderText: 'Escribe aquí tu mensaje',
                mainColor: 'black',
                aboutText: '',
                aboutLink: '',
                bubbleAvatarUrl: src = '<?php echo asset('img/chat.jpg'); ?>'
            };
        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <section>
            <!--footer-->
            <footer class="mt-auto">
                <footer class="bg-black text-center text-white ">

                    <div class="container p-4">

                        <!--Links-->
                        <section class="">

                            <div class="row">

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase">Contacto</h5>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="mailto:herrera.alvaradoartu@gmail.com"
                                                class="text-white">Contactanos</a>
                                        </li>
                                        <li>
                                            <a href="/Sugerencias" class="text-white">Sugerencias</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase">Nuestras Redes</h5>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="https://www.facebook.com/Mark-Tech-100458546063140"><i
                                                    class="icon iconify text-white" data-icon="ion-social-facebook"
                                                    data-width="24"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon iconify text-white"
                                                    data-icon="ion-social-twitter" data-width="24"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/marktech2022"><i
                                                    class="icon iconify text-white" data-icon="ion-social-instagram"
                                                    data-width="24"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase">Marktech</h5>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="/avisodeprivacidad" class="text-white">Politica de Privacidad</a>
                                        </li>
                                        <li>
                                            <a href="/terminosycondiciones" class="text-white">Terminos y
                                                Condiciones</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <img src="<?php echo e(asset('img/paypalcheckout.png')); ?>" alt="logo"
                                        class="img-fluid">
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
        <!--footer-->
    </div>

</body>

</html>
<?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/layouts/app.blade.php ENDPATH**/ ?>