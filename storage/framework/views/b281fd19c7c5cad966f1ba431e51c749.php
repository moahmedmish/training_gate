<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control', 'required', 'maxlength' => 150, 'maxlength' => 150]); ?>

</div>













<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('message', 'Message:'); ?>

    <?php echo Form::textarea('message', null, ['class' => 'form-control', 'required']); ?>

</div>
<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/admin/contacts/fields.blade.php ENDPATH**/ ?>