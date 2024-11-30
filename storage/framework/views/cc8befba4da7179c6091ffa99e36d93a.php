<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Banner1</th>
                <th>Banner2</th>
                <th>Title Ar</th>

                <th>Title En</th>


                <th>Publish</th>
                <th>On Menu</th>
                <th>Order</th>


                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($page->image)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($page->banner1)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($page->banner2)); ?>" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td><?php echo e($page->title_ar); ?></td>

                    <td><?php echo e($page->title_en); ?></td>




                    <?php if($page->publish): ?>
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Published</span>
                        </td>
                    <?php else: ?>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    <?php endif; ?>

                    <?php if($page->on_menu): ?>
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Yes</span>
                        </td>
                    <?php else: ?>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    <?php endif; ?>
                    <td><?php echo e($page->menu_order); ?></td>



                    <td>
                        <?php echo Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'delete']); ?>


                        <div class="d-flex align-items-center gap-1">
                            <a href="<?php echo e(route('pages.show', [$page->id])); ?>"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="<?php echo e(route('pages.edit', [$page->id])); ?>"
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
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/pages/table.blade.php ENDPATH**/ ?>