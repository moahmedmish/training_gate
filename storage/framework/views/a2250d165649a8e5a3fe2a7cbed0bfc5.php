<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Recommended Dimensions</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $photoSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photoSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($photoSetting->name); ?></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($photoSetting->image)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td><?php echo e($photoSetting->recommended_dimensions); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['photo-settings.destroy', $photoSetting->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('photo-settings.show', [$photoSetting->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('photo-settings.edit', [$photoSetting->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                            </a>
                        </div>








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
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/photo_settings/table.blade.php ENDPATH**/ ?>