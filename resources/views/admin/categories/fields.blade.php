<!-- Name Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    {!! Form::text('name_ar', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>

<!-- Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_en', 'Name En:') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>

{{--<!-- Parent Id Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('parent_id', 'Parent Id:') !!}--}}
{{--    {!! Form::number('parent_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
