<!-- Page Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page_id', 'Page:') !!}
    <input type="text" class="form-control" value="{{ $page->name }}" readonly>
    {!! Form::hidden('page_id', $page->id) !!}
</div>

<!-- Sub Page Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_page_id', 'Sub Page:') !!}
    <input type="text" class="form-control" value="{{ $subPage->name }}" readonly>
    {!! Form::hidden('sub_page_id', $subPage->id) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('section_type', 'Section Type:') !!}
    {!! Form::select('section_type_id', $sectionTypes, null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title_en', 'Title En:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title_ar', 'Title Ar:') !!}
    {!! Form::text('title_ar', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Content Ar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content_ar', 'Content Ar:') !!}
    {!! Form::textarea('content_ar', null, ['class' => 'form-control', 'required', 'maxlength' => 65535]) !!}
</div>

<!-- Content En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content_en', 'Content En:') !!}
    {!! Form::textarea('content_en', null, ['class' => 'form-control', 'required', 'maxlength' => 65535]) !!}
</div>


<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Is Publish Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_publish', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_publish', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_publish', 'Is Publish', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_path', 'Image:') !!}
    @if(isset($section) && $section->image_path)
    <div class="image-preview">
        <img src="{{ asset($section->image_path) }}" alt="Current Image" class="img-fluid" style="max-width: 200px; margin-bottom: 10px;">
        <p><strong>Current Image:</strong> {{ basename($section->image_path) }}</p>
    </div>
@endif
    {!! Form::file('image_path', ['class' => 'form-control']) !!}
</div>