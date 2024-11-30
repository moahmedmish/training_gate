<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title Ar</th>
                <th>Title En</th>
                <th>Project</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $projectPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectPhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($projectPhoto->image)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td><?php echo e($projectPhoto->title_ar); ?></td>
                    <td><?php echo e($projectPhoto->title_en); ?></td>
                    <td><?php echo e($projectPhoto->project->title_en); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['project-photos.destroy', $projectPhoto->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('project-photos.show', [$projectPhoto->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('project-photos.edit', [$projectPhoto->id])); ?>"
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
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/project_photos/table.blade.php ENDPATH**/ ?>