<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-image:url('<?php echo e(asset('images/vector2.png')); ?>')">
                    <?php echo e(__('Clientes')); ?>

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
                    <a href="<?php echo e(route('clientesCreate')); ?>" class="btn btn-info" title="Registrar cliente">Registrar</a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive" id="tableClientes">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo app('translator')->get("Nombre"); ?></th>
                                <th scope="col"><?php echo app('translator')->get("Email"); ?></th>
                                <th scope="col"><?php echo app('translator')->get("Teléfono"); ?></th>
                                <th scope="col"><?php echo app('translator')->get("More"); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($i); ?></th>
                                    <td><?php echo e($cliente->nombreCompleto); ?></td>
                                    <td><?php echo e($cliente->correo); ?></td>
                                    <td><?php echo e($cliente->telefono); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('clientesEdit', [$cliente->id])); ?>"
                                           class="btn btn-primary btn-sm" title="<?php echo app('translator')->get("Editar"); ?>"><?php echo app('translator')->get("Editar"); ?></a>
                                        <input type="hidden" value="/clientesDelete/<?php echo e($cliente->id); ?>" id="urlEliminar"
                                               name="urlEliminar[]">
                                        <button type="button" class="btn btn-danger btn-sm btnEliminar" data-toggle="modal" id="btnEliminar"
                                                data-target="#MyModal" data-dato="<?php echo e($cliente->nombreCompleto); ?> &nbsp;&nbsp;&nbsp; <?php echo e($cliente->correo); ?>">
                                            <?php echo app('translator')->get("Eliminar"); ?>
                                        </button>
                                    </td>
                                </tr>
                                    <?php
                                    $i++;
                                    ?>
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
<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script>
        $( document ).ready(function() {
            MyDataTable("tableClientes");

            $("#tableClientes").on('click', ".btnEliminar", function (e){
                var $tr = $(this).closest('tr');
                var deleteUrl = $tr.find('input[id="urlEliminar"]').val();
                var dato = $tr.find('button[id="btnEliminar"]').data("dato");
                MyModal(deleteUrl, dato);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\victor.arrollo\Downloads\lavanderiacleanup_V2\resources\views/clientes/index.blade.php ENDPATH**/ ?>