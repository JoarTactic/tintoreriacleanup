<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:aqua;"><?php echo e(__('Clientes - Registro')); ?></div>

                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('danger')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(session('danger')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="col-12 col-md-12" align="right">
                            <a href="<?php echo e(route('clientes')); ?>" class="btn btn-dark"
                               title="<?php echo app('translator')->get("Volver al menú"); ?>"><?php echo app('translator')->get("Volver al menú"); ?></a>
                            <hr>
                        </div>
                        <form method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo e(route('clientesStore')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label for="nombreCompleto"><?php echo app('translator')->get("Nombre"); ?></label>
                                    <input type="text" class="form form-control" title="<?php echo app('translator')->get("Nombre completo"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Nombre completo"); ?>" value="" name="nombreCompleto"
                                           id="nombreCompleto" minlength="5" maxlength="200">
                                    <?php $__errorArgs = ['nombreCompleto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="telefono"><?php echo app('translator')->get("Teléfono"); ?></label>
                                    <input type="number" class="form form-control" title="<?php echo app('translator')->get("Teléfono"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Teléfono"); ?>" value="" name="telefono" id="telefono"
                                            minlength="7" maxlength="10">
                                    <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="correo"><?php echo app('translator')->get("Email"); ?></label>
                                    <input type="email" class="form form-control" title="<?php echo app('translator')->get("Correo electrónico"); ?>"
                                           required placeholder="<?php echo app('translator')->get("Correo electrónico"); ?>" value="" name="correo"
                                           id="correo" minlength="5" maxlength="320">
                                    <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-md-12"><br><hr></div>
                                <div class="col-4 col-md-4"></div>
                                <div class="col-4 col-md-4" align="center">
                                    <input type="submit" class="btn btn-success" value="<?php echo app('translator')->get("Guardar"); ?>">
                                    <a href="<?php echo e(route('clientes')); ?>" class="btn btn-dark"
                                       title="<?php echo app('translator')->get("Volver al menú"); ?>"><?php echo app('translator')->get("Volver al menú"); ?></a>
                                </div>
                                <div class="col-4 col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\victor.arrollo\Downloads\lavanderiacleanup_V2\resources\views/clientes/create.blade.php ENDPATH**/ ?>