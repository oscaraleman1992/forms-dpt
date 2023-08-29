<div class="table-responsive">
    <table class="table" id="formularios-table">
        <thead>
        <tr>
            <th>Id Sitio</th>
        <th>Capa De Red</th>
        <th>Tecnico</th>
        <th>Coordinado Con Instalaciones</th>
        
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $formularios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formulario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($formulario->id_sitio); ?></td>
                <td><?php echo e($formulario->capa_de_red); ?></td>
                <td><?php echo e($formulario->tecnico); ?></td>
                <td><?php echo e($formulario->coordinado_con_instalaciones); ?></td>
                
                <td width="120">
                    <?php echo Form::open(['route' => ['formularios.destroy', $formulario->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('formularios.show', [$formulario->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('formularios.edit', [$formulario->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="<?php echo e(route('formularios.pdf', [$formulario->id])); ?>"
                            class='btn btn-default btn-xs'>
                            <i class="fas fa-print"></i>
                         </a>
                        <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\dpt\adminlte-generator\resources\views/formularios/table.blade.php ENDPATH**/ ?>