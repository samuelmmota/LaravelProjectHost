<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/resources/theme/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/resources/theme/css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="public/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">

        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo e(url('/')); ?>"><img src="/resources/theme/img/logotipo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('/cars')); ?>">Carros</a></li>
                                <li><a href="<?php echo e(url('/about')); ?>">Sobre nós</a></li>
                                
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>

                                <a class="primary-btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>

                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>

                                <a class="primary-btn" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registo')); ?></a>

                                <?php endif; ?>
                                <?php else: ?>




                                <a href="/dashboard"><i class="fa fa-user" aria-hidden="true"></i>
                                    <?php echo e(Auth::user()->nome); ?>

                                    <?php echo e(Auth::user()->apelido); ?>

                                </a>

                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>







                                <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Js Plugins -->

</body>

</html><?php /**PATH /home/vagrant/Code/public/resources/views/includes/header.blade.php ENDPATH**/ ?>