<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>

                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($setting->name); ?></td>
                    <td><?php echo e($setting->value); ?></td>

                    <td>
                        <?php echo Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('settings.show', [$setting->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('settings.edit', [$setting->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                            </a>








                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    <div class="card-footer clearfix">
        <div class="float-right">

        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/settings/table.blade.php ENDPATH**/ ?>