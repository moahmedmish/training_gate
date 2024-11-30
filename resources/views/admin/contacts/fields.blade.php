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

{{--<!-- Phone Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('phone', 'Phone:') !!}--}}
{{--    {!! Form::text('phone', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}--}}
{{--</div>--}}

{{--<!-- Subject Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('subject', 'Subject:') !!}--}}
{{--    {!! Form::text('subject', null, ['class' => 'form-control', 'required', 'maxlength' => 500, 'maxlength' => 500]) !!}--}}
{{--</div>--}}

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'required']) !!}
</div>
