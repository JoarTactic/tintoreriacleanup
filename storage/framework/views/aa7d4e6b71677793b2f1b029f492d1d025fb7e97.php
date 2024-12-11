<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:aqua;"><?php echo e(__('Prendas - edición')); ?></div>

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
                            <a href="<?php echo e(route('prendas')); ?>" class="btn btn-dark"
                               title="<?php echo app('translator')->get("Volver al menú"); ?>"><?php echo app('translator')->get("Volver al menú"); ?></a>
                            <hr>
                        </div>
                        <form method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo e(route('prendasUpdate', ['id' => $prenda->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label for="nombre"><?php echo app('translator')->get("Nombre"); ?></label>
                                    <input type="text" class="form form-control" title="<?php echo app('translator')->get("Nombre"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Nombre"); ?>" value="<?php echo e($prenda->nombre); ?>" name="nombre"
                                           id="nombre" minlength="5" maxlength="200">
                                    <?php $__errorArgs = ['nombre'];
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
                                    <label for="precioPorPrenda"><?php echo app('translator')->get("Precio por prenda lavada"); ?></label>
                                    <input type="text" class="form form-control" title="<?php echo app('translator')->get("Precio por prenda lavada"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Precio por prenda lavada"); ?>" value="<?php echo e($prenda->precioPorPrenda); ?>" name="precioPorPrenda" id="precioPorPrenda"
                                            minlength="1" maxlength="6" oninput="syncPrices(this)">
                                    <?php $__errorArgs = ['precioPorPrenda'];
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
                                <div style="display: none;" class="col-12 col-md-12">
                                    <label for="precioPorKilo"><?php echo app('translator')->get("Precio por kilo"); ?></label>
                                    <input type="text" class="form form-control" title="<?php echo app('translator')->get("Precio por kilo"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Precio por kilo"); ?>" value="<?php echo e($prenda->precioPorKilo); ?>" name="precioPorKilo" id="precioPorKilo"
                                           minlength="1" maxlength="6">
                                    <?php $__errorArgs = ['precioPorKilo'];
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
                                <script>
    function syncPrices(input) {
        const precioPorKilo = document.getElementById('precioPorKilo');
        precioPorKilo.value = input.value;
    }
</script>
                                <div class="col-12 col-md-12">
                                    <label for="precioPlanchado"><?php echo app('translator')->get("Precio por prenda planchada"); ?></label>
                                    <input type="text" class="form form-control" title="<?php echo app('translator')->get("Precio por prenda planchada"); ?>" required
                                           placeholder="<?php echo app('translator')->get("Precio por prenda planchada"); ?>" value="<?php echo e($prenda->precioPlanchado); ?>" name="precioPlanchado" id="precioPlanchado"
                                           minlength="1" maxlength="6">
                                    <?php $__errorArgs = ['precioPlanchado'];
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
                                    <a href="<?php echo e(route('prendas')); ?>" class="btn btn-dark"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\victor.arrollo\Downloads\lavanderiacleanup_V2\resources\views/prendas/edit.blade.php ENDPATH**/ ?>