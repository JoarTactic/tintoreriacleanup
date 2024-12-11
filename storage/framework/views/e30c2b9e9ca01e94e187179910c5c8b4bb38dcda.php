<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-image:url('<?php echo e(asset('images/vector2.png')); ?>')">
                    <?php echo e(__('Dashboard')); ?>

                </div>
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

                    <div class="table table-responsive">
                        <table class="table table-striped table-responsive" style="font-size:10px;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha registro</th>
                                    <th scope="col">Monto total</th>
                                    <th scope="col">Anticipo</th>
                                    <th scope="col">Total pendiente</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Fecha entregado</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Correo Cliente</th>
                                    <th scope="col">Teléfono Cliente</th>
                                    <th style="display: none;" scope="col">Empleado</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ordenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $orden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($k+1); ?></th>
                                        <td><?php echo e($orden->id); ?></td>
                                        <td><?php echo e(\App\Librarys\AdditionalMethods::getDataTimeI18n($orden->fecha)." ".date("H:i:s", strtotime($orden->fecha))); ?></td>
                                        <td><?php echo e($orden->montoTotal); ?></td>
                                        <td><?php echo e($orden->anticipo); ?></td>
                                        <td><?php echo e(number_format($orden->totalPendiente, 2)); ?></td>
                                        <td><?php echo e($orden->observaciones); ?></td>
                                        <td><?php echo e($orden->fechaEntregado); ?></td>
                                        <td><?php echo e($orden->nombreCliente); ?></td>
                                        <td><?php echo e($orden->correoCliente); ?></td>
                                        <td><?php echo e($orden->telefonoCliente); ?></td>
                                        <td style="display: none;"><?php echo e($orden->nombreEmpleado); ?></td>
                                        <td><?php echo e($orden->nombreEstatus); ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm btn-xs" title="Ver detalles de la orden"
                                                href="/ordenesEdit/<?php echo e($orden->id); ?>" style="font-size:8px;">
                                                Ver detalles
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\victor.arrollo\Downloads\lavanderiacleanup_V2\resources\views/home.blade.php ENDPATH**/ ?>