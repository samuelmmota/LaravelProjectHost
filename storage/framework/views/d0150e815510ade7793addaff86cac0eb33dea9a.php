


<?php $__env->startSection('title'); ?>
<title>MR. Automotive | Carros </title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<head>
    <meta charset="UTF-8">
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


<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="resources/theme/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Lista de carros:</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="car__sidebar">



                    <div class="car__filter">
                        <h5>Filtros:</h5>


                        <form action="/cars" method="GET">

                            <select class="form-select" name="marca" id="marca_id">
                                <option value="">Marca</option>
                                <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findMarcas(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($marca->id_marca); ?>"><?php echo e($marca->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>



                            <!--
                            <select class="form-select" name="modelo" id="modelo_id" style="moverflow-x: hidden">
                                <option value="">Modelo</option>
                                <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findModelos(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=" <?php echo e($modelo->id_marca); ?>-<?php echo e($modelo->id_modelo); ?>"><?php echo e($modelo->nome); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <script>
                                $(document).ready(function() {
                                    var $options = $("#modelo_id").clone(); // this will save all initial options in the second dropdown

                                    $("#marca_id").change(function() {
                                        var filters = [];
                                        if ($(this).val() == "") {
                                            $(this).find("option").each(function(index, option) {
                                                if ($(option).val() != "")
                                                    filters.push($(option).val());
                                            });
                                        } else {
                                            filters.push($(this).val())
                                        }

                                        $("#modelo_id").html("");

                                        $.each(filters, function(index, value) {
                                            $options.find("option").each(function(optionIndex, option) { // a second loop that check if the option value starts with the filter value
                                                var val = $(option).val().split("-");
                                                console.log(val);
                                                if (value.localeCompare(val[0]) == 0)
                                                    $(option).clone().appendTo($("#modelo_id"));
                                            });

                                        });

                                    });
                                });
                            </script>
                        -->





                            <select name="estado">
                                <option value="">Condição</option>
                                <option value="1">Novo</option>
                                <option value="0">Usado</option>
                            </select>
                            <select name="quilometragem">
                                <option value="">Quilometragem (KM)</option>
                                <option value="5000">Até 5.000 KM</option>
                                <option value="10000">Até 10.000 KM</option>
                                <option value="50000">Até 50.000 KM</option>
                                <option value="100000">Até 100.000 KM</option>
                                <option value="200000">Até 200.000 KM</option>
                                <option value="500000">Até 500.000 KM</option>
                            </select>
                            <select name="combustivel">
                                <option value="">Combustivel</option>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Diesel">Diesel</option>
                                <option value="GPL">GPL</option>
                                <option value="Híbrido">Híbrido</option>
                                <option value="Elétrico">Elétrico</option>
                            </select>
                            <select name="cor">
                                <option value="">Cores</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Azul">Azul</option>
                                <option value="Preto">Preto</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Verde">Verde</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Branco">Branco</option>
                                <option value="Outro">Outro</option>
                            </select>

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
                            <!--
                            <div class="filter-price">
                                <p>Preço:</p>
                                <div class="price-range-wrap">
                                    <div class="filter-price-range"></div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <input type="text" id="filterAmount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->


                            <div>
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn" name="remover" value="remover" style="margin-top: 10px;padding-left: 25px;padding-right: 30px;">Remover Filtros</button>
                                </div>

                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn" name="filtrar" value="filtrar" style="margin-top: 10px;padding-left: 60px;padding-right: 60px;"> Filtrar </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Mostrar na página:</h6>
                                <select name="num">
                                    <option value="9">9 Carros</option>
                                    <option value="15">15 Carros</option>
                                    <option value="20">20 Carros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Preço</h6>
                                <select name="expensive">
                                    <option value="more">Mais caros primeiro</option>
                                    <option value="less">Mais baratos primeiro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </form>


                <!--DEBUG DE RESULTASDOS-->
                <div class="ShowDataHere">
                    /**</br>
                    *Debug:</br>
                    <?php if(!empty(request()->all())): ?>
                    #marca id: <?php echo e(request()->marca); ?> </br>
                    #modelo id: <?php echo e(request()->modelo); ?> </br>
                    #estado bool:<?php echo e(request()->estado); ?> </br>
                    #quilometragem:<?php echo e(request()->quilometragem); ?> </br>
                    #combustivel: <?php echo e(request()->combustivel); ?> </br>
                    #Cor: <?php echo e(request()->cor); ?> </br>
                    #preco: <?php echo e(request()->preco); ?> </br>
                    #Numero de encontrados (por pagina): <?php echo e($count ?? ''); ?> </br>
                    */
                    <?php endif; ?>
                </div>



                <div class="row">
                    <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($anuncio->disponivel == 1): ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">


                                <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" alt="" style="width:262.5px;height:175.1px;">
                                <?php $__currentLoopData = App\Http\Controllers\AnunciosController::getImgs("storage/app/anunciosImg/".$anuncio->id_utilizador."/".$anuncio->id_anuncio."/"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(strcmp($files->getFilename(),$anuncio->foto_perfil)!=0): ?>
                                <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($files->getFilename()); ?>" alt="" style="width:262.5px;height:175.1px;">
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

                <?php echo $anuncios->links('pagination::bootstrap-4'); ?>


                <!--- 
                <div class="pagination__option">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><span class="arrow_carrot-2right"></span></a>
                </div>  -->



            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
<!-- Js Plugins -->
<script src="resources/theme/js/jquery-3.3.1.min.js"></script>
<script src="resources/theme/js/bootstrap.min.js"></script>


<script src="resources/theme/js/jquery.nice-select.min.js"></script>
<script src="resources/theme/js/jquery-ui.min.js"></script>
<script src="resources/theme/js/jquery.magnific-popup.min.js"></script>

<script src="resources/theme/js/jquery.slicknav.js"></script>
<script src="resources/theme/js/owl.carousel.min.js"></script>
<script src="resources/theme/js/main.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/layouts/cars.blade.php ENDPATH**/ ?>