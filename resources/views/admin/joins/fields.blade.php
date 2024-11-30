<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required', 'maxlength' => 150, 'maxlength' => 150]) !!}
</div>

<!-- Cv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cv', 'Cv:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('cv', ['class' => 'custom-file-input']) !!}
            {!! Form::label('cv', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'required']) !!}
</div>