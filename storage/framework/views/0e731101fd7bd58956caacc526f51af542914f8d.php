



<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<h3 style="text-align:center"> Os seus anúncios arquivados </h3>


<div class="container">
    <div class="row">

        <div class="col-lg-10">
            <div class="header__nav">
                <nav class="header__menu">
                <ul>
                        <li><a href="<?php echo e(url('/dashboard')); ?>">Anúncios</a></li>
            <li><a href="<?php echo e(url('/dashboard/favoritos')); ?>">Favoritos</a></li>
            <li><a href="<?php echo e(url('/dashboard/mensagens')); ?>">Mensagens</a></li>
            <li><a href="<?php echo e(url('/about')); ?>">Pagamentos</a></li>
            <li><a href="<?php echo e(url('/dashboard/definicoes')); ?>">Definições</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

</div>



</div>

<div class="container-fluid">
    <div class="p-3 mb-2 bg-secondary text-white">
        <nav class="header__menu">
            <ul style="padding-left: 15px;padding-bottom: 10px;">
                <li><a href="<?php echo e(url('/dashboard')); ?>">Activos</a></li>
                <li><a href="<?php echo e(url('/arquivos')); ?>">Arquivados</a></li>
            </ul>
        </nav>

        <div class="container-fluid">
            <a class="btn btn-primary" href="<?php echo e(url('/product')); ?>" role="button">Criar Anuncio</a>
            <?php $__empty_1 = true; $__currentLoopData = App\Http\Controllers\AnunciosController::findAnunciosArquivados(Auth::user()->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="row">
                <div class="col-12 mt-3">



                    <div class="card">
                        <div class="card-horizontal" style="display: flex; flex: 1 1 auto;">
                            <div class="img-square-wrapper">
                                <img class="" src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" style="width:500px;height:345px;" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10 text-dark">
                                        <h4 class="card-title text-dark"><?php echo e($anuncio->titulo); ?></h4>
                                    </div>
                                    <div class="col-sm-2 text-dark">
                                        Preço: <?php echo e($anuncio->preco); ?>€
                                    </div>
                                </div>

                                <p class="card-text text-dark small">Ativo desde: <?php echo e($anuncio->created_at); ?> </p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-2 text-dark">
                                            <a href="/anuncios/show/<?php echo e($anuncio->id_anuncio); ?>" style="color:black;">Visualizar</a>
                                        </div>
                                        
                                        <div class="col-sm-2 text-dark">
                                            <a href="/anuncios/edit/<?php echo e($anuncio->id_anuncio); ?>" style="color:black;">Editar</a>
                                        </div>
                                        
                                        <div class="col-sm-2 text-dark">
                                            <a href="/anuncios/activate/<?php echo e($anuncio->id_anuncio); ?>" style="color:black;">Ativar</a>
                                        </div>

                                        <div class="col-sm-2 text-dark">
                                            <a href="/anuncios/delete?id=<?php echo e($anuncio->id_anuncio); ?>" style="color:black;">Remover</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 text-dark">

                                    </div>
                                    <div class="col-sm-2 text-dark">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <?php if(App\Http\Controllers\MensagensController::countConversas($anuncio->id_anuncio) > 0 ): ?>
                                        <?php echo e(App\Http\Controllers\MensagensController::countConversas($anuncio->id_anuncio)); ?> Mensagens
                                        <?php else: ?>
                                        <?php echo e('0 Mensagens'); ?>

                                        <?php endif; ?>

                                    </div>
                                    <div class="col-sm-2 text-dark">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        Favs
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h5 class="text-center">Não possui anuncios arquivados!</h5>
        <?php endif; ?>
    </div>
</div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/Utilizadores/utilizadorDashArquivos.blade.php ENDPATH**/ ?>