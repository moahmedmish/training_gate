<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 200, 'maxlength' => 200]) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control', 'required', 'maxlength' => 500, 'maxlength' => 500]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('value_ar', 'Value AR:') !!}
    {!! Form::text('value_ar', null, ['class' => 'form-control', 'maxlength' => 500]) !!}
</div>


{{--<!-- Path Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('path', 'Path:') !!}--}}
{{--    {!! Form::text('path', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}--}}
{{--</div>--}}
