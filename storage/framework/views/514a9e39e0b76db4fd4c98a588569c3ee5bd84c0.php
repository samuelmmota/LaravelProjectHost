


<?php $__env->startSection('title'); ?>
<title>MR. Automotive | Index </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="resources/theme/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/style.css" type="text/css">


</head>

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="resources/theme/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero__text">
                    <div class="hero__text__title">
                        <span> ENCONTRE O SEU CARRO DE SONHO</span>
                        <h2>Porsche Cayenne S</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Procurar carro</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="hero__tab__form">
                                <h2>O que procura?</h2>
                                <form action="/cars?filtrar=filtrar">
                                    <div class="select-list">
                                        <div class="select-list-item">
                                            <p>Ano:</p>
                                            <select>
                                                <option value=" ">Selecione o ano</option>
                                                <option value="">2021</option>
                                                <option value="">2020</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                                <option value="">2017</option>
                                                <option value="">2016</option>
                                                <option value="">2015</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Marca:</p>
                                            <select name="marca">
                                                <option value="">Selecione a marca</option>
                                                <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findMarcas(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($marca->id_marca); ?>"><a href="/car?marca=$marca->id_marca&filter=filter"><?php echo e($marca->nome); ?></a></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Modelo:</p>
                                            <select>
                                                <option value="">Selecione o modelo</option>
                                                <option value="">Q3</option>
                                                <option value="">A4 </option>
                                                <option value="">AVENTADOR</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Quilómetros</p>
                                            <select name="quilometragem">
                                                <option value="">Quilometragem (KM)</option>
                                                <option value="5000">Até 5.000 KM</option>
                                                <option value="10000">Até 10.000 KM</option>
                                                <option value="50000">Até 50.000 KM</option>
                                                <option value="100000">Até 100.000 KM</option>
                                                <option value="200000">Até 200.000 KM</option>
                                                <option value="500000">Até 500.000 KM</option>
                                                <option value="">Sem limite</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <select name="preco">
                                            <option value="">Preço Máximo</option>
                                            <option value="2000">Até 2.000€</option>
                                            <option value="5000">Até 5.000€</option>
                                            <option value="10000">Até 10.000€</option>
                                            <option value="20000">Até 20.000€</option>
                                            <option value="50000">Até 50.000€</option>
                                            <option value="100000">Até 100.000€</option>
                                            <option value="200000">Até 200.000€</option>
                                        </select>
                                    </div>


                                    <button name="filtrar" value="filtrar" type="submit" class="site-btn" style="margin-left: 3.8rem;">Pesquisar</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Anúncios em Destaque</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($anuncio->disponivel == 1): ?>

            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">


                        <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" alt="" style="width:400px;height:275px;">
                        <?php $__currentLoopData = App\Http\Controllers\AnunciosController::getImgs("storage/app/anunciosImg/".$anuncio->id_utilizador."/".$anuncio->id_anuncio."/"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(strcmp($files->getFilename(),$anuncio->foto_perfil)!=0): ?>
                        <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($files->getFilename()); ?>" alt="" style="width:400px;height:275px;">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">Ano: <?php echo e(App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo)); ?></div>
                            <h5><a href="/anuncios/show/<?php echo e($anuncio->id_anuncio); ?>"><?php echo e($anuncio->titulo); ?></a></h5>
                            <ul>
                                <?php $__currentLoopData = App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><span>Marca:</span> <?php echo e($marca->nome); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>Segmento: <?php echo e($anuncio->segmento); ?></li>
                                <li><span><?php echo e($anuncio->quilometragem); ?></span> Quilometragem(KMs)</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">Para Venda</span>
                            <h6> &nbsp;&nbsp; <?php echo e($anuncio->preco); ?>&nbsp;€<span></span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    </div>
</section>
<!-- Car Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Os Nossos Serviços</span>
                    <h2>O que oferecemos?</h2>
                    <p>Os preços mais competitivos no mercado online</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="resources/theme/img/services/services-3.png" alt="">
                    <h5>Confiança</h5>
                    <p>Compre com confiança!</p>
                    <a href="/cars"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="resources/theme/img/services/services-2.png" alt="">
                    <h5>Venda de Carros</h5>
                    <p>Compre o seu carro teu carro de sonho ao preço que nunca sonhou pagar </p>
                    <a href="/cars"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>

        </div>
</section>
<!-- Services Section End -->



<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Anúncios</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $anuncios_naodestacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($anuncio->disponivel == 1): ?>
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">

                        <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" alt="" style="width:400px;height:275px;">
                        <?php $__currentLoopData = App\Http\Controllers\AnunciosController::getImgs("storage/app/anunciosImg/".$anuncio->id_utilizador."/".$anuncio->id_anuncio."/"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(strcmp($files->getFilename(),$anuncio->foto_perfil)!=0): ?>
                        <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($files->getFilename()); ?>" alt="" style="width:400px;height:275px;">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">Ano: <?php echo e(App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo)); ?></div>
                            <h5><a href="/anuncios/show/<?php echo e($anuncio->id_anuncio); ?>"><?php echo e($anuncio->titulo); ?></a></h5>
                            <ul>
                                <?php $__currentLoopData = App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><span>Marca:</span> <?php echo e($marca->nome); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>Segmento: <?php echo e($anuncio->segmento); ?></li>
                                <li><span><?php echo e($anuncio->quilometragem); ?></span> Quilometragem(KMs)</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">Para Venda</span>
                            <h6> &nbsp;&nbsp; <?php echo e($anuncio->preco); ?>&nbsp;€<span></span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Car Section End -->

<!-- Chooseus Section Begin -->
<section class="chooseus spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="chooseus__text">
                    <div class="section-title">
                        <h2>Porquê comprar pelo nosso website?</h2>

                    </div>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> Site conceitudado no mercado, que garante que a segurança das vendas
                            .</li>
                        <li><i class="fa fa-check-circle"></i> Maior plataforma de comercialização e aluguer de carros portuguesa
                        </li>

                    </ul>
                    <a href="#" class="primary-btn">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="chooseus__video set-bg">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Xd0Ok-MkqoE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<!-- Chooseus Section End -->

<br>
<!-- Js Plugins -->
<script src="resources/theme/js/jquery-3.3.1.min.js"></script>
<script src="resources/theme/js/bootstrap.min.js"></script>


<script src="resources/theme/js/jquery.nice-select.min.js"></script>
<script src="resources/theme/js/jquery-ui.min.js"></script>
<script src="resources/theme/js/jquery.magnific-popup.min.js"></script>
<script src="resources/theme/js/mixitup.min.js"></script>
<script src="resources/theme/js/jquery.slicknav.js"></script>
<script src="resources/theme/js/owl.carousel.min.js"></script>
<script src="resources/theme/js/main.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/layouts/frontpage.blade.php ENDPATH**/ ?>