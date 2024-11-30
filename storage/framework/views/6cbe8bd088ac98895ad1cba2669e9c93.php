<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Banner</th>
                <th>Title Ar</th>
                <th>Title En</th>
                <th>Summary Ar</th>
                <th>Summary En</th>
                <th>Publish</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($service->image)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($service->banner)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td><?php echo e($service->title_ar); ?></td>
                    <td><?php echo e($service->title_en); ?></td>
                    <td><?php echo e(\Illuminate\Support\Str::words($service->summary_ar, 5, ' ...')); ?></td>
                    <td><?php echo e(\Illuminate\Support\Str::words($service->summary_en, 5, ' ...')); ?></td>
                    <?php if($service->publish): ?>
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Published</span>
                        </td>
                    <?php else: ?>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    <?php endif; ?>
                    <td>
                        <?php echo Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('services.show', [$service->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('services.edit', [$service->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                            </a>
                            <?php echo Form::button('<i class="material-symbols-outlined fs-16 text-danger">delete</i>', [
                                'type' => 'submit',
                                'class' => 'ps-0 border-0 bg-transparent lh-1 position-relative top-2',
                                'onclick' => "return confirm('Are you sure you want to delete this?')"
                            ]); ?>

                        </div>
                        <?php echo Form::close(); ?>


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
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/services/table.blade.php ENDPATH**/ ?>