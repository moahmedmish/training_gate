<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
        <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Cv</th>
                <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $joins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $join): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($join->name); ?></td>
                    <td><?php echo e($join->email); ?></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="<?php echo e(asset($join->cv)); ?>" target="_blank" class="text-decoration-none">
                                <span>CV</span>
                            </a>
                        </div>
                    </td>
                    <td><?php echo e($join->message); ?></td>

                    <td>
                        <?php echo Form::open(['route' => ['joins.destroy', $join->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('joins.show', [$join->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('joins.edit', [$join->id])); ?>"
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
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/joins/table.blade.php ENDPATH**/ ?>