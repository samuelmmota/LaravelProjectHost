



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



<div class="container">
    <div class="card">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa fa-user" aria-hidden="true"></i> Editar Dados
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <form method="POST" action="<?php echo e(url('/dashboard/definicoes/update/'.Auth::user()->id )); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nome')); ?></label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nome" value="<?php echo e(Auth::user()->nome); ?>" required autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Apelido')); ?></label>

                                <div class="col-md-6">
                                    <input id="apelido" type="text" class="form-control <?php $__errorArgs = ['apelido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="apelido" value="<?php echo e(Auth::user()->apelido); ?>" required autocomplete="apelido" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Telefone')); ?></label>

                                <div class="col-md-6">
                                    <input id="telefone" type="integer" class="form-control <?php $__errorArgs = ['telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="telefone" value="<?php echo e(Auth::user()->telefone); ?>" required autocomplete="telefone" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Data Nascimento')); ?></label>

                                <div class="col-md-6">
                                    <input id="data_nascimento" type="date" class="form-control <?php $__errorArgs = ['data_nascimento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="data_nascimento" value="<?php echo e(Auth::user()->data_nascimento); ?>" required autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Sexo')); ?></label>

                                <div class="col-md-6">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="sexo" id="inlineRadio1" value="M" <?php echo e(Auth::user()->sexo=="M" ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="F" <?php echo e(Auth::user()->sexo=="F" ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="inlineRadio2">Feminino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio3" value="O" <?php echo e(Auth::user()->sexo=="O" ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="inlineRadio3">Outro</label>
                                    </div>
                                    <?php $__errorArgs = ['sexo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tipo de Vendedor')); ?></label>
                                <div class="col-md-6">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="tipovendedor" id="inlineRadio1" value="particular" <?php echo e(Auth::user()->tipovendedor=="particular" ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="inlineRadio1">Particular</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipovendedor" id="inlineRadio2" value="profissional" <?php echo e(Auth::user()->tipovendedor=="profissional" ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="inlineRadio2">Profissional</label>

                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Distrito')); ?></label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="distrito" id="distrito">
                                            <?php $__currentLoopData = App\Http\Controllers\Auth\RegisterController::findDistritos(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distrito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($distrito->nome); ?>"><?php echo e($distrito->nome); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Concelho')); ?></label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="concelho" id="concelho">
                                            <?php $__currentLoopData = App\Http\Controllers\Auth\RegisterController::findConcelhos(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concelho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($concelho->distrito); ?>-><?php echo e($concelho->nome); ?>"><?php echo e($concelho->nome); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Freguesia')); ?></label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="id_freguesia" id="freguesia">
                                            <?php $__currentLoopData = App\Http\Controllers\Auth\RegisterController::findFreguesias(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freguesias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($freguesias->concelho); ?>-><?php echo e($freguesias->id_freguesia); ?>"><?php echo e($freguesias->nome); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                <script>
                                    src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
                                </script>


                                <script>
                                    $(document).ready(function() {
                                        var $options = $("#concelho").clone(); // this will save all initial options in the second dropdown

                                        $("#distrito").change(function() {
                                            var filters = [];
                                            if ($(this).val() == "") {
                                                $(this).find("option").each(function(index, option) {
                                                    if ($(option).val() != "")
                                                        filters.push($(option).val());
                                                });
                                            } else {
                                                filters.push($(this).val())
                                            }

                                            $("#concelho").html("");

                                            $.each(filters, function(index, value) {
                                                $options.find("option").each(function(optionIndex, option) { // a second loop that check if the option value starts with the filter value
                                                    var val = $(option).val().split("->");
                                                    //console.log(val);
                                                    if (value.localeCompare(val[0]) == 0)
                                                        $(option).clone().appendTo($("#concelho"));
                                                });

                                            });

                                        });
                                    });
                                </script>

                                <script>
                                    $(document).ready(function() {
                                        var $options = $("#freguesia").clone(); // this will save all initial options in the second dropdown

                                        $("#concelho").change(function() {
                                            var filters = [];
                                            if ($(this).val() == "") {
                                                $(this).find("option").each(function(index, option) {
                                                    if ($(option).val() != "")
                                                        filters.push($(option).val());
                                                });
                                            } else {
                                                filters.push($(this).val())
                                            }

                                            $("#freguesia").html("");

                                            $.each(filters, function(index, value) {
                                                $options.find("option").each(function(optionIndex, option) { // a second loop that check if the option value starts with the filter value
                                                    var val2 = value.split("->");
                                                    var val = $(option).val().split("->");
                                                    console.log(val2);
                                                    if (val2[1].localeCompare(val[0]) == 0)
                                                        $(option).clone().appendTo($("#freguesia"));
                                                });

                                            });

                                        });
                                    });
                                </script>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Foto Perfil')); ?></label>

                                    <div class="col-md-6">
                                        <input id="foto_perfil" type="file" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="foto_perfil" value="/storage/app/utilizadoresImg/<?php echo e(Auth::user()->id); ?>/" autocomplete="name" autofocus>

                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>



                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Confirmar')); ?>

                                        </button>
                                    </div>
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
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Editar E-mail
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <form method="POST" action="<?php echo e(url('/dashboard/definicoes/updateemail/'.Auth::user()->id )); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="oldemail" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-mail Antigo')); ?></label>

                                <div class="col-md-6">
                                    <input id="oldemail" type="email" class="form-control <?php $__errorArgs = ['oldemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="oldemail" value="" required autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['oldemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nvemail" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Novo E-mail')); ?></label>

                                <div class="col-md-6">
                                    <input id="nvemail" type="email" class="form-control <?php $__errorArgs = ['nvemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nvemail" value="" required autocomplete="apelido" autofocus>

                                    <?php $__errorArgs = ['nvemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nvemailc" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Novo E-mail Confirmação')); ?></label>

                                <div class="col-md-6">
                                    <input id="nvemailc" type="email" class="form-control <?php $__errorArgs = ['nvemailc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nvemailc" value="" required autocomplete="email">

                                    <?php $__errorArgs = ['nvemailc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Confirmar')); ?>

                                    </button>
                                </div>
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
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        Editar Password
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form method="POST" action="<?php echo e(url('/dashboard/definicoes/updatepassword/'.Auth::user()->id )); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="oldpass" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password Antiga')); ?></label>

                                <div class="col-md-6">
                                    <input id="oldpass" type="password" class="form-control <?php $__errorArgs = ['oldpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="oldpass" value="" required autocomplete="oldpass" autofocus>

                                    <?php $__errorArgs = ['oldpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nvpass" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nova Password')); ?></label>

                                <div class="col-md-6">
                                    <input id="nvpass" type="password" class="form-control <?php $__errorArgs = ['nvpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nvpass" value="" required autocomplete="nvpass" autofocus>

                                    <?php $__errorArgs = ['nvpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nvpassc" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nova Password Confirmação')); ?></label>

                                <div class="col-md-6">
                                    <input id="nvpassc" type="password" class="form-control <?php $__errorArgs = ['nvpassc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nvpassc" value="" required autocomplete="nvpassc">

                                    <?php $__errorArgs = ['nvpassc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Confirmar')); ?>

                                    </button>
                                </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/public/resources/views/Utilizadores/utilizadorDashDef.blade.php ENDPATH**/ ?>