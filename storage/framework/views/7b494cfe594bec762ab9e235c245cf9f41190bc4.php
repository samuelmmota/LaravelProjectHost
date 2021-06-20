<!DOCTYPE html>
<html lang="en">

    
    <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="/resources/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        
        <?php echo $__env->make('includes.header-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="container-fluid" style="margin-top: 55px;">
                    <h1 class="mt-4">Tabelas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tabelas</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Tabela de utilizadores
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Apelido</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Sexo</th>
                                            <th>Tipo de vendedor</th>
                                            <th>Foto de perfil</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Apelido</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Sexo</th>
                                            <th>Tipo de vendedor</th>
                                            <th>Foto de perfil</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $__currentLoopData = App\Http\Controllers\UtilizadoresController::listUtilizadores(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($user->id); ?></td>
                                            <td><?php echo e($user->nome); ?></td>
                                            <td><?php echo e($user->apelido); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->telefone); ?></td>
                                            <td><?php echo e($user->sexo); ?></td>
                                            <td><?php echo e($user->tipovendedor); ?></td>
                                            <td><a target="_blank" href="/storage/app/<?php echo e($user->foto_perfil); ?>"><img src="/storage/app/<?php echo e($user->foto_perfil); ?>" class="rounded-circle z-depth-2" style="height: 50px;width: 50px;padding: 5px;"> </a></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Lista dos anúncios
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Utilizador</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Preço (€)</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Utilizador</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Preço (€)</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $__currentLoopData = App\Http\Controllers\AnunciosController::listAnuncios(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e($anuncios->id_anuncio); ?> </td>
                                            <td> <?php echo e($anuncios->id_utilizador); ?> </td>

                                            <?php $__currentLoopData = App\Http\Controllers\MarcasController::findMarcasById($anuncios->id_marca); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td> <?php echo e($marca->nome); ?> </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php $__currentLoopData = App\Http\Controllers\ModelosController::findModeloById($anuncios->id_modelo); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td> <?php echo e($modelo->nome); ?> </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <td> <?php echo e($anuncios->preco); ?> </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/resources/admintheme/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/resources/admintheme/assets/demo/datatables-demo.js"></script>
</body>

</html><?php /**PATH /home/vagrant/Code/public/resources/views/admin/index.blade.php ENDPATH**/ ?>