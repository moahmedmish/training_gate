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

<!-- Image Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('image', 'Image:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            <div class="custom-file">
                {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
            </div>
            @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && isset($page->image))
                <div class="mx-1 font-weight-bolder">
                    <a target="_blank" href="{{ asset($page->image) }}">
                        <img style="height: 50px" src="{{ asset($page->image) }}" class="border border-secondary">
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Service Summary Ar Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('summary_ar', 'Page Summary (Arabic):', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::textarea('summary_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Summary in Arabic']) !!}
        </div>
    </div>
</div>

<!-- page Summary En Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('summary_en', 'page Summary (English):', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::textarea('summary_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Summary in English']) !!}
        </div>
    </div>
</div>

<!-- page Description Ar Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('desc_ar', 'Page Description (Arabic):', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::textarea('desc_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Description in Arabic']) !!}
        </div>
    </div>
</div>

<!-- page Description En Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('desc_en', 'Page Description (English):', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::textarea('desc_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Description in English']) !!}
        </div>
    </div>
</div>

<!-- Menu Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu_order', 'Menu Order:') !!}
    {!! Form::number('menu_order', null, ['class' => 'form-control']) !!}
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

