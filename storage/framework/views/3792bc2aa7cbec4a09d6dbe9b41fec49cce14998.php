



<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<h3 style="text-align:center"> Os seus anúncios </h3>


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

    </nav>

    <div class="container-fluid">

      <div class="row">


        <table class="table">
          <tbody>
            <tr>

              <td>Utilizador</td>
              <td>Anuncio</td>
              <td></td>
              <td>Data</td>
            </tr>
          </tbody>
        </table>
        <?php $__empty_1 = true; $__currentLoopData = App\Http\Controllers\MensagensController::findMensagemId(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensagens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if(empty($mensagens)): ?>
        <h5 class="text-center">Não existem conversas!</h5>
        <?php else: ?>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row"> <a href="/mensagens/show/<?php echo e($mensagens->id_conversa); ?>">Abrir Conversa</a> </th>

              <td>
                <?php $__currentLoopData = App\Http\Controllers\UtilizadoresController::findUserById($mensagens->id_emissor); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilizador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($utilizador->nome); ?>

                <?php echo e($utilizador->apelido); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


              </td>
              <td> <a href="/anuncios/show/<?php echo e($mensagens->id_anuncio); ?>" target="_blank" style="color:black;">
                  <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findAnunciosById($mensagens->id_anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($anuncio->titulo); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </a></td>

              <td><?php echo e($mensagens->created_at); ?></td>
            </tr>
          </tbody>
        </table>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h5 class="text-center">Não existem conversas!</h5>
        <?php endif; ?>
      </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/Utilizadores/utilizadorDashMsg.blade.php ENDPATH**/ ?>