<?php $__env->startSection('content'); ?>


    <?php echo Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'patch']); ?>


            <div class="card-body">
                <div class="row">
                    <?php echo $__env->make('admin.contacts.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="card-footer">
                <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-default"> Cancel </a>
            </div>

            <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/contacts/edit.blade.php ENDPATH**/ ?>