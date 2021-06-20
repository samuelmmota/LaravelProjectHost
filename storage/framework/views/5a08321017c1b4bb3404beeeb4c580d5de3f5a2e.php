

<?php $__env->startSection('content'); ?>

<!-- Car Details Section Begin -->

<section class="car-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" alt="First slide" style="width:847px;height:535px;">
                        </div>
                        <?php $__currentLoopData = App\Http\Controllers\AnunciosController::getImgs("storage/app/anunciosImg/".$anuncio->id_utilizador."/".$anuncio->id_anuncio."/"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(strcmp($files->getFilename(),$anuncio->foto_perfil)!=0): ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($files->getFilename()); ?>" style="width:847px;height:535px;">
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="car__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" style="width: 50%; margin-right: 0px">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" style="text-align: center;">Descrição</a>
                        </li>
                        <li class="nav-item" style="width: 50%;">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" style="text-align: center;">Detalhes técnicos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="car__details__tab__info__item">
                                            <h5>Descrição do anúncio</h5>
                                            <label style="padding-left: 15px;"> <?php echo e($anuncio->descricao); ?> </label>
                                        </div>
                                    </div>
                                    <?php if( Auth::user()->id != $anuncio->id_utilizador): ?>
                                    <form action="<?php echo e(('/msg')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" style="padding-left: 15px;padding-top: 15px;">Mensagem:</label>
                                            <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3" style="margin-left: 15px;"></textarea>

                                        </div>
                                        <input type="hidden" id="id_recetor" name="id_recetor" value="<?php echo e($anuncio->id_utilizador); ?>">
                                        <input type="hidden" id="id_anuncio" name="id_anuncio" value="<?php echo e($anuncio->id_anuncio); ?>">
                                        <button type="submit" class="btn btn-primary mb-2" style="margin-left: 15px;">Enviar</button>
                                    </form>
                                    <?php else: ?>
                                    
                                    <?php endif; ?>
                                    
                                     <?php if( Auth::user()->id != $anuncio->id_utilizador): ?>
                                    <form action="<?php echo e(('/fav')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" id="id_utilizador" name="id_utilizador" value="<?php echo e(Auth::user()->id); ?>">
                                        <input type="hidden" id="id_anuncio" name="id_anuncio" value="<?php echo e($anuncio->id_anuncio); ?>">
                                        <button type="submit" class="btn btn-primary mb-2" style="margin-left: 15px;">Adicionar Favorito</button>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="car__details__tab__info__item">
                                            <h5>Detalhes técnicos sobre o veículo:</h5>
                                            <ul style="columns:2">
                                                <?php $__currentLoopData = App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Marca: <?php echo e($marca->nome); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = App\Http\Controllers\ModelosController::findModeloById($anuncio->id_modelo); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Modelo: <?php echo e($modelo->nome); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <li><i class="fa fa-long-arrow-right"></i> Versao: <?php echo e($anuncio->versao); ?></li>
                                                <li><i class="fa fa-long-arrow-right"></i> Cor: <?php echo e($anuncio->cor); ?></li>
                                                <li><i class="fa fa-long-arrow-right"></i> Combustivel: <?php echo e($anuncio->combustivel); ?></li>
                                                <li><i class="fa fa-long-arrow-right"></i> Data de Registo: <?php echo e($anuncio->data_registo); ?></li>
                                                <li><i class="fa fa-long-arrow-right"></i> Quilómetros: <?php echo e($anuncio->quilometragem); ?> km</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Cilindrada: <?php echo e($anuncio->cilindrada); ?> cc</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Potência: <?php echo e($anuncio->potencia); ?> cv</li>
                                                <?php if($anuncio->retoma == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Retoma: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Retoma: Sim </li>
                                                <?php endif; ?>
                                                <?php if($anuncio->financiamento == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Financiamento: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Financiamento: Sim </li>
                                                <?php endif; ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Segmento: <?php echo e($anuncio->segmento); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Metalizado: <?php echo e($anuncio->metalizado); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Caixa: <?php echo e($anuncio->caixa); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Lotação: <?php echo e($anuncio->lotacao); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Portas: <?php echo e($anuncio->portas); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Classe Veiculo: <?php echo e($anuncio->classe_veiculo); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Tração: <?php echo e($anuncio->tracao); ?> </li>
                                                <?php if($anuncio->garantia_stand == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Garantia Stand: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Garantia Stand: Sim </li>
                                                <?php endif; ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Número de Registos: <?php echo e($anuncio->nr_registos); ?> </li>
                                                <?php if($anuncio->livro_revisoes == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Livro de Revisões: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Livro de Revisões: Sim </li>
                                                <?php endif; ?>
                                                <?php if($anuncio->seg_chave == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Segunda-chave: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Segunda-chave: Sim </li>
                                                <?php endif; ?>
                                                <?php if($anuncio->jantes_liga_leve == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Jantes Liga Leve: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Jantes Liga Leve: Sim </li>
                                                <?php endif; ?>

                                                <li><i class="fa fa-long-arrow-right"></i> Estofos: <?php echo e($anuncio->estofos); ?> </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Medida Jantes: <?php echo e($anuncio->medida_jantes); ?> </li>
                                                <?php if($anuncio->airbags == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Airbags: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Airbags: Sim </li>
                                                <?php endif; ?>
                                                <?php if($anuncio->ar_condicionado == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Ar Condicionado: Não </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Ar Condicionado: Sim </li>
                                                <?php endif; ?>
                                                <?php if($anuncio->importado == 0): ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Origem: Nacional </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-long-arrow-right"></i> Origem: Importado </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="car__details__sidebar">
                    <div class="car__details__sidebar__model">
                        <ul>
                            <li style="font-weight:900; text-align: center"><?php echo e($anuncio->titulo); ?></li>
                            <li ><i class="fa fa-circle" aria-hidden="true"></i> Data de registo: <?php echo e($anuncio->data_registo); ?> <br>
                                <i class="fa fa-circle" aria-hidden="true"></i> Quilometragem: <?php echo e($anuncio->quilometragem); ?> km <br>
                                <i class="fa fa-circle" aria-hidden="true"></i> Combustível: <?php echo e($anuncio->combustivel); ?>

                            </li>
                        </ul>
                        <ul>
                            <li>Preço: <?php echo e($anuncio->preco); ?> <i class="fa fa-euro" aria-hidden="true"></i> </li>
                        </ul>
                        <?php $__currentLoopData = App\Http\Controllers\UtilizadoresController::findUserById($anuncio->id_utilizador); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilizador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <p> <?php echo e($utilizador->tipovendedor); ?> </p>
                                <li> <?php echo e($utilizador->nome); ?> <?php echo e($utilizador->apelido); ?> <a target="_blank" href="/storage/app/<?php echo e($utilizador->foto_perfil); ?>"><img src="/storage/app/<?php echo e($utilizador->foto_perfil); ?>" class="rounded-circle z-depth-2" style="height: 70px;width: 70px;padding: 5px;margin-left: 40px;" ></a></li>
                            </ul>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <h6><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Localização: </h6>
                            <?php $__currentLoopData = App\Http\Controllers\FrequesiasController::findFregById($utilizador->id_freguesia); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freguesia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($freguesia->nome); ?>, concelho de <?php echo e($freguesia->concelho); ?> </li>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <p></p>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="car__details__sidebar__payment">
                        <h5><i class="fa fa-phone" aria-hidden="true"></i>
                            Telefone </h5>
                        <p><button class="primary-btn" id="myDIV" onclick="myFunction()" style="padding-top: 0px;padding-bottom: 0px;padding-left: 5px;padding-right: 5px;margin-top: 10px;">Mostrar</button></p>

                        <script>
                            function myFunction() {
                                var x = document.getElementById("myDIV");
                                if (x.innerHTML === "Mostrar") {
                                    x.innerHTML = <?php echo e($utilizador->telefone); ?>;
                                } else {
                                    x.innerHTML = "Mostrar";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mix sale">


    </div>



 <div class="container" style="padding-bottom: 50px;">
<h3> Medidor de Preço </h3>

<?php $__currentLoopData = App\Http\Controllers\AnunciosController::grafico_preco($anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = App\Http\Controllers\AnunciosController::max_preco($anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $max): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = App\Http\Controllers\AnunciosController::min_preco($anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $min): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = App\Http\Controllers\AnunciosController::total_preco($anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
    <canvas id="myCanvas2" width="1140" height="100"
style="border:0px solid #d3d3d3 ">

</canvas>


<script>

var canvas = document.getElementById("myCanvas2");
var ctx = canvas.getContext("2d");
var media = <?php echo json_encode($media, JSON_HEX_TAG); ?>;
var preco = <?php echo json_encode($anuncio->preco, JSON_HEX_TAG); ?>;
var max = <?php echo json_encode($max, JSON_HEX_TAG); ?>;
var min = <?php echo json_encode($min, JSON_HEX_TAG); ?>;
var total = <?php echo json_encode($total, JSON_HEX_TAG); ?>;
var calc = (preco*100)/total ;
var medida = 1141 * (calc*0.01);
console.log(medida);
if(preco == max || medida > 990){
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.moveTo(100,0);
    ctx.beginPath();
    ctx.rect(990, 50, 150, 50);
    ctx.stroke();
    if(preco > media){
        ctx.font = "10px Arial";
        ctx.strokeText("O veiculo está acima da", 990, 60); 
        ctx.strokeText("média de preços", 990, 70); 
        ctx.strokeText(Number(media).toFixed(2) + "€", 990, 80); 
    }



}else if(preco == min || medida < 150){
ctx.fillStyle = "white";
ctx.fillRect(0, 0, canvas.width, canvas.height);
ctx.moveTo(100,0);
ctx.beginPath();
ctx.rect(0, 50, 150, 50);
ctx.stroke();
if(preco < media){
ctx.font = "10px Arial";
ctx.strokeText("O veiculo está abaixo da", 0, 60); 
ctx.strokeText("média de preços", 0, 70); 
ctx.strokeText(Number(media).toFixed(2) + "€", 0, 80); 
    }

}else  {
ctx.fillStyle = "white";
ctx.fillRect(0, 0, canvas.width, canvas.height);
ctx.moveTo(100,0);
ctx.beginPath();
ctx.rect(medida, 50, 150, 50);
ctx.stroke();

ctx.font = "10px Arial";
ctx.strokeText("O veiculo está dentro da", medida, 60); 
ctx.strokeText("média de preços", medida, 70); 
ctx.strokeText(Number(media).toFixed(2) + "€", medida, 80); 
    
}

</script>

<canvas id="myCanvas" width="1140" height="100"
style="border:0px solid #d3d3d3 ">

</canvas>


<script>

var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

var media = <?php echo json_encode($media, JSON_HEX_TAG); ?>;
var preco = <?php echo json_encode($anuncio->preco, JSON_HEX_TAG); ?>;
var max = <?php echo json_encode($max, JSON_HEX_TAG); ?>;
var min = <?php echo json_encode($min, JSON_HEX_TAG); ?>;
var total = <?php echo json_encode($total, JSON_HEX_TAG); ?>;

if(preco == max){
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.moveTo(1140,0);
    ctx.lineTo(1140,1140);
    ctx.stroke();
}else if(preco == min){

    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.moveTo(0,0);
    ctx.lineTo(0,100);
    ctx.stroke();
}else {
    var calc = (preco*100)/total ;
    var medida = 1141 * (calc*0.01);
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.moveTo(medida,0);
    ctx.lineTo(medida,medida);
    ctx.stroke();
}


</script>


<div class="progress ">
<div class="progress-bar bg-success"  role="progressbar" style="width: 34%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
<div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
<div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
</div>





<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>






    <div class="container-fluid">
        <div class="row" style="padding-left: 47px;">
            <?php $__currentLoopData = App\Http\Controllers\AnunciosController::randomAdds($anuncio->id_anuncio); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic ">
                        <img src="/storage/app/anunciosImg/<?php echo e($anuncio->id_utilizador); ?>/<?php echo e($anuncio->id_anuncio); ?>/<?php echo e($anuncio->foto_perfil); ?>" alt="" style="width:375px;height:200px;" class="center">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date"><?php echo e(App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo)); ?></div>
                            <h5><a href="/anuncios/show/<?php echo e($anuncio->id_anuncio); ?>" target="_blank" style="color:black;"><?php echo e($anuncio->titulo); ?></a></h5>
                            <ul>
                                <li><span><?php echo e($anuncio->quilometragem); ?></span> km</li>
                                <li><?php echo e($anuncio->caixa); ?></li>
                                <li><span><?php echo e($anuncio->potencia); ?></span> cv</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">Venda</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</section>
<!-- Car Details Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/Anuncios/detalhesanuncio.blade.php ENDPATH**/ ?>