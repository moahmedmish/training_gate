<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Title Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ar', 'Title Ar:') !!}
    {!! Form::text('title_ar', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Title En:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    <div class="form-check">
        {!! Form::hidden('publish', 0) !!} <!-- Hidden field to submit 0 if unchecked -->
        {!! Form::checkbox('publish', 1, null, ['class' => 'form-check-input']) !!}
        <label class="form-check-label" for="publish">Yes</label>
    </div>
</div>

<!-- Menu Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu_order', 'Menu Order:') !!}
    {!! Form::number('menu_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route_name', 'Route Name:') !!}
    {!! Form::text('route_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Page Id Field -->
<div class="col-sm-6">
    {!! Form::label('page_id', 'Page:') !!}
    {!! Form::select('page_id', $pages->pluck('name', 'id'), $page->id, [
        'class' => 'form-control', 
        'disabled' => 'disabled'
    ]) !!}
</div>