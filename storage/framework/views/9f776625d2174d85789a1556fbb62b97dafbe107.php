

<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="/resources/css/novoanuncio.css" rel="stylesheet">
<!--  Error handle -->
<?php if($errors->any()): ?>
<div class="row collapse">
    <ul class="alert-box warning radius">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<div class="container-fluid">
    <form class="tm-edit-product-form" action="<?php echo e($anuncio->id_anuncio); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <input type="hidden" name="id_anuncio" value="<?php echo e($anuncio->id_anuncio); ?>">
        <div class="row">
            <div class="col-12">
                <h2>Editar anúncio </h2>
            </div>
        </div>
        <br>
        <div class="form-group mb-3">
            <label for="titulo">Titulo do anúncio:
            </label>
            <input id="titulo" name="titulo" type="text" maxlength="90" placeholder="Máx. 90 caracteres" value="<?php echo e($anuncio->titulo); ?>" class="form-control validate" required="">
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="id_marca"><?php echo e(__('Marca:')); ?></label>
                    <div class="col-xs-6">
                        <select class="form-control" name="id_marca" id="id_marca">
                            <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findMarcas(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($marca->id_marca); ?>"><?php echo e($marca->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="id_modelo"><?php echo e(__('Modelo:')); ?></label>
                    <div class="col-xs-6">
                        <select class="form-control" name="id_modelo" id="id_modelo">
                            <?php $__currentLoopData = App\Http\Controllers\AnunciosController::findModelos(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($modelo->id_marca); ?>-<?php echo e($modelo->id_modelo); ?>"><?php echo e($modelo->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="descricao_id">Descrição:</label>
            <textarea name="descricao" id="descricao_id" class="form-control validate" placeholder="<?php echo e($anuncio->descricao); ?>" value="<?php echo e($anuncio->descricao); ?>" rows="5" required=""></textarea>
        </div>

        <label for="preco">Preço:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <input type="number" id="preco" name="preco" placeholder="Ex: 5999.99" value="<?php echo e($anuncio->preco); ?>" min="1" max="10000000" class="form-control" aria-label="Euro amount (with dot and two decimal places)">
        </div>
        <div style="margin-bottom: 16px;">
            <label style="margin-right: 3px;"><?php echo e(__('Valor Negociável:')); ?></label>
            <div class="form-check-inline" style="margin-right: 3px;">
                <label class="form-check-label">
                    Sim
                </label>
                <input class="form-check-input" type="radio" name="valor_fixo" id="radio" value="1" <?php echo e($anuncio->valor_fixo=="1" ? 'checked' : ''); ?>>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    Não
                </label>
                <input class="form-check-input" type="radio" name="valor_fixo" id="radio" value="0" <?php echo e($anuncio->valor_fixo=="0" ? 'checked' : ''); ?>>
            </div>
        </div>

        <label for="cor">Cor:</label>
        <div style="margin-bottom: 16px;">
            <select id="cor" name="cor" class="form-select">
                <option value="Vermelho" <?php echo e($anuncio->cor === 'Vermelho' ? 'selected' : ""); ?>>Vermelho</option>
                <option value="Azul" <?php echo e($anuncio->cor === 'Azul' ? 'selected' : ""); ?>>Azul</option>
                <option value="Preto" <?php echo e($anuncio->cor === 'Preto' ? 'selected' : ""); ?>>Preto</option>
                <option value="Amarelo" <?php echo e($anuncio->cor === 'Amarelo' ? 'selected' : ""); ?>>Amarelo</option>
                <option value="Verde" <?php echo e($anuncio->cor === 'Verde' ? 'selected' : ""); ?>>Verde</option>
                <option value="Cinza" <?php echo e($anuncio->cor === 'Cinza' ? 'selected' : ""); ?>>Cinza</option>
                <option value="Branco" <?php echo e($anuncio->cor === 'Branco' ? 'selected' : ""); ?>>Branco</option>
                <option value="Outro" <?php echo e($anuncio->cor === 'Outro' ? 'selected' : ""); ?>>Outro</option>
            </select>
        </div>

        <div class="row" style="margin-bottom: 16px;">
            <div class="col-3">
                <label style="margin-right: 6px;"><?php echo e(__('Data de Registo:')); ?></label>
                <input type="date" id="data_registo" max="<?php echo date("Y-m-d");  ?>" value="<?php echo e($anuncio->data_registo); ?>" name="data_registo">
            </div>

            <div class="col-6">
                <label style="margin-right: 3px;"><?php echo e(__('Estado do Veiculo:')); ?></label>
                <div class="form-check-inline" style="margin-right: 3px;">
                    <label class="form-check-label">
                        Novo
                    </label>
                    <input class="form-check-input" type="radio" name="estado" id="radio" value="1" <?php echo e($anuncio->estado=="1" ? 'checked' : ''); ?>>

                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        Usado
                    </label>
                    <input class="form-check-input" type="radio" name="estado" id="radio" value="0" <?php echo e($anuncio->estado=="0" ? 'checked' : ''); ?>>
                </div>
            </div>
        </div>

        <label for="versao">Versão:</label>
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="versao" name="versao" placeholder="Ex: Mini Cooper D, Mini Cooper S..." value="<?php echo e($anuncio->versao); ?>" max="60" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <label for="combustivel">Tipo de combustível do veículo: </label>
        <div style="margin-bottom: 16px;">
            <select id="combustivel" name="combustivel" class="form-select" aria-label="Default select example">
                <option selected value="Gasolina" <?php echo e($anuncio->combustivel === 'Gasolina' ? 'selected' : ""); ?>>Gasolina</option>
                <option value="Diesel" <?php echo e($anuncio->combustivel === 'Diesel' ? 'selected' : ""); ?>>Diesel</option>
                <option value="GPL" <?php echo e($anuncio->combustivel === 'GPL' ? 'selected' : ""); ?>>GPL</option>
                <option value="Híbrido" <?php echo e($anuncio->combustivel === 'Híbrido' ? 'selected' : ""); ?>>Híbrido</option>
                <option value="Elétrico" <?php echo e($anuncio->combustivel === 'Elétrico' ? 'selected' : ""); ?>>Elétrico</option>
            </select>
        </div>

        <div>
            <label for="quilometragem">Quilometragem:</label>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm_quilometragem">KMs</span>
                <input name="quilometragem" id="quilometragem" type="number" placeholder="Máx. 3000000" min="0" max="3000000" value="<?php echo e($anuncio->quilometragem); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>

            <label for="potencia">Potência:</label>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm_potencia">CV</span>
                <input name="potencia" id="potencia" type="number" placeholder="Máx. 1000" min="0" max="1000" value="<?php echo e($anuncio->potencia); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>

            <label for="cilindrada">Cilindrada:</label>
            <div class="input-group input-group-sm mb-3">
                <input name="cilindrada" id="cilindrada" type="number" placeholder="Máx. 10000" min="0" max="10000" value="<?php echo e($anuncio->cilindrada); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>

        <div class="row" style="margin-bottom: 16px;">
            <div class="col-3">
                <label style="margin-right: 3px;"><?php echo e(__('Retoma:')); ?></label>
                <div class="form-check-inline" style="margin-right: 3px;">
                    <label class="form-check-label">
                        Sim
                    </label>
                    <input class="form-check-input" type="radio" name="retoma" id="radio" value="1" <?php echo e($anuncio->retoma == '1' ? 'checked' : ""); ?>>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        Não
                    </label>
                    <input class="form-check-input" type="radio" name="retoma" id="radio" value="0" <?php echo e($anuncio->retoma == '0' ? 'checked' : ""); ?>>
                </div>
            </div>

            <div class="col-3">
                <label style="margin-right: 3px;"><?php echo e(__('Financiamento:')); ?></label>
                <div class="form-check-inline" style="margin-right: 3px;">
                    <label class="form-check-label">
                        Sim
                    </label>
                    <input class="form-check-input" type="radio" name="financiamento" id="radio" value="1" <?php echo e($anuncio->financiamento == '1' ? 'checked' : ""); ?>>

                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        Não
                    </label>
                    <input class="form-check-input" type="radio" name="financiamento" id="radio" value="0" <?php echo e($anuncio->financiamento == '0' ? 'checked' : ""); ?>>
                </div>
            </div>
        </div>

        <label for="segmento">Segmento:</label>
        <div style="margin-bottom: 16px;">
            <select id="segmento" name="segmento" class="form-select">
            <option value="Pequeno Citadino" <?php echo e($anuncio->segmento === 'Pequeno Citadino' ? 'selected' : ""); ?>>Pequeno Citadino</option>
               <option value="Citadino" <?php echo e($anuncio->segmento === 'Citadino' ? 'selected' : ""); ?>>Citadino</option>
                <option value="Utilitario" <?php echo e($anuncio->segmento === 'Utilitario' ? 'selected' : ""); ?>>Utilitario</option>
                <option value="Sedan" <?php echo e($anuncio->segmento === 'Sedan' ? 'selected' : ""); ?>>Sedan</option>
                <option value="Carrinha" <?php echo e($anuncio->segmento === 'Carrinha' ? 'selected' : ""); ?>>Carrinha</option>
                <option value="Monovolume" <?php echo e($anuncio->segmento === 'Monovolume' ? 'selected' : ""); ?>>Monovolume</option>
                <option value="SUV/TT" <?php echo e($anuncio->segmento === 'SUV/TT' ? 'selected' : ""); ?>>SUV/TT</option>
                <option value="Cabrio" <?php echo e($anuncio->segmento === 'Cabrio' ? 'selected' : ""); ?>>Cabrio</option>
                <option value="Coupe" <?php echo e($anuncio->segmento === 'Coupe' ? 'selected' : ""); ?>>Coupe</option>
            </select>
        </div>

        <label for="lotacao">Lotação:</label>
        <div class="input-group input-group-sm mb-3">
            <input type="number" class="form-control" id="lotacao" placeholder="Mín: 1  Máx: 9" min="2" max="9" name="lotacao" value="<?php echo e($anuncio->lotacao); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <label for="portas">Nº de portas:</label>
        <div class="input-group input-group-sm mb-3">
            <input type="number" id="portas" class="form-control" placeholder="Mín: 2   Máx: 5" min="2" max="5" name="portas" value="<?php echo e($anuncio->portas); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="row" style="margin-bottom: 16px;">
            <div class="col-4">
                <label for="classe">Classe do veículo:</label>
                <select name="classe_veiculo" id="classe" class="form-select" aria-label="Default select example">
                    <option value="classe 1" <?php echo e($anuncio->classe === 'classe 1' ? 'selected' : ""); ?>>Classe 1 (Motociclos e veículos com altura inferior a 1,1m)</option>
                    <option value="classe 2" <?php echo e($anuncio->classe === 'classe 2' ? 'selected' : ""); ?>>Classe 2 (Veículos com 2 eixos com altura superior a 1,1m)</option>
                </select>
            </div>

            <div class="col-4">
                <label for="tracao">Tração do veículo:</label>
                <select name="tracao" id="tracao" class="form-select" aria-label="Default select example">
                    <option value="Dianteira " <?php echo e($anuncio->tracao === 'Dianteira ' ? 'selected' : ""); ?>>Tração dianteira</option>
                    <option value="Traseira" <?php echo e($anuncio->tracao === 'Traseira' ? 'selected' : ""); ?>>Tração traseira</option>
                    <option value="Integral" <?php echo e($anuncio->tracao === 'Integral' ? 'selected' : ""); ?>>Tração integral</option>
                </select>
            </div>
        </div>

        <div class="form-check mb-3" style="padding-left: 24px;">
            <input name="garantia_stand" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_garantia_stand" <?php echo e($anuncio->garantia_stand == '1' ? 'checked' : ""); ?>>
            <label class="form-check-label" for="flexCheckChecked">
                Garantia de stand
            </label>
        </div>


        <label for="nr_registos">Número de Registos:</label>
        <div class="input-group input-group-sm mb-3">
            <input type="number" id="nr_registos" class="form-control" value="<?php echo e($anuncio->nr_registos); ?>" placeholder="Mín: 0" name="nr_registos" min="0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="row row-col-cols-6" style="margin-bottom: 16px;">
            <div class="form-check mb-3 col" style="padding-left: 38px;">
                <input name="livro_revisoes" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_livro_revisoes" <?php echo e($anuncio->livro_revisoes == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked">
                    Livro de Revisões
                </label>
            </div>

            <div class="form-check mb-3 col">
                <input name="seg_chave" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_seg_chave" <?php echo e($anuncio->seg_chave == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked">
                    Segunda Chave
                </label>
            </div>

            <div class="form-check mb-3 col">
                <input name="jantes_liga_leve" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_jantes_liga_leve" <?php echo e($anuncio->jantes_liga_leve == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked_jantes_liga_leve">
                    Jantes Liga-Leve
                </label>
            </div>
        </div>

        <label for="nr_registos">Medida das Jantes (polegadas):</label>
        <div class="input-group input-group-sm mb-3">
            <input type="number" class="form-control" name="medida_jantes" value="<?php echo e($anuncio->medida_jantes); ?>" placeholder="Mín: 5  Máx: 24" id="medida_jantes" min="5" max="24" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="row row-col-cols-4" style="margin-bottom: 16px;">
            <div class="form-check mb-3 col" style="padding-left: 38px;">
                <input name="airbags" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_jantes_airbags" <?php echo e($anuncio->airbags == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked_jantes_airbags">
                    Airbags
                </label>
            </div>

            <div class="form-check mb-3 col">
                <input name="ar_condicionado" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_ar_condicionado" <?php echo e($anuncio->ar_condicionado == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked_ar_condicionado">
                    Ar condicionado
                </label>
            </div>

            <div class="form-check mb-3 col">
                <input name="importado" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_importado" <?php echo e($anuncio->importado == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked_importado">
                    Importado
                </label>
            </div>

            <div class="form-check mb-3 col">
                <input name="metalizado" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked_metalizado" <?php echo e($anuncio->metalizado == '1' ? 'checked' : ""); ?>>
                <label class="form-check-label" for="flexCheckChecked_metalizado">
                    Metalizado
                </label>
            </div>
        </div>

        <div class="row" style="margin-bottom: 16px;">
            <div class="col-3">
                <label for="caixa">Caixa de velocidades:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="number" id="caixa" class="form-control" placeholder="Mín: 5    Máx: 9" value="<?php echo e($anuncio->caixa); ?>" min="5" max="9" name="caixa" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col-3">
                <label for="estofos">Estofos:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" id="estofos" class="form-control" placeholder="Couro, pele..." name="estofos" value="<?php echo e($anuncio->estofos); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <label for="nr_registos">Fotos do veículo (pode selecionar mais do que uma):</label>
        <div class="input-group mb-3">
            <input name="fotos[]" type="file" class="form-control" id="inputGroupFile_fotos" multiple>
        </div>


        <div>
            <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Editar Anúncio</button>
        </div>



        <?php if(isset($errors) && count($errors)): ?>

        There were <?php echo e(count($errors->all())); ?> Error(s)
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <?php endif; ?>




    </form>
</div>
<script src="/resources/theme/js/jquery-3.3.1.min.js"></script>
<script src="/resources/theme/js/bootstrap.min.js"></script>
<script src="/resources/theme/js/popper.js"></script>
<script src="/resources/theme/js/jquery.nice-select.min.js"></script>
<script src="/resources/theme/js/jquery-ui.min.js"></script>
<script src="/resources/theme/js/jquery.magnific-popup.min.js"></script>
<script src="/resources/theme/js/mixitup.min.js"></script>
<script src="/resources/theme/js/owl.carousel.min.js"></script>
<script src="/resources/theme/js/main.js"></script>
<script>
    $(document).ready(function() {
        var $options = $("#id_modelo").clone(); // this will save all initial options in the second dropdown

        $("#id_marca").change(function() {
            var filters = [];
            if ($(this).val() == "") {
                $(this).find("option").each(function(index, option) {
                    if ($(option).val() != "")
                        filters.push($(option).val());
                });
            } else {
                filters.push($(this).val())
            }

            $("#id_modelo").html("");

            $.each(filters, function(index, value) {
                $options.find("option").each(function(optionIndex, option) { // a second loop that check if the option value starts with the filter value
                    var val = $(option).val().split("-");
                    if (value.localeCompare(val[0]) == 0)
                        $(option).clone().appendTo($("#id_modelo"));
                });

            });

        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/Anuncios/editAnuncio.blade.php ENDPATH**/ ?>