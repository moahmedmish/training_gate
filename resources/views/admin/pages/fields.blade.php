<div class="row">
    <!-- Name Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('name', 'Name:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('name', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Page Name']) !!}
            </div>
        </div>
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

    <!-- Title Ar Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('title_ar', 'Title (Arabic):', ['class' => 'label text-secondary']) !!}
            {!! Form::text('title_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in Arabic']) !!}
        </div>
    </div>

    <!-- Title En Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('title_en', 'Title (English):', ['class' => 'label text-secondary']) !!}
            {!! Form::text('title_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in English']) !!}
        </div>
    </div>

    <!-- Has Sub Field -->
    <div class="col-lg-6">
        <div class="form-check mb-4">
            {!! Form::hidden('has_sub', 0) !!}
            {!! Form::checkbox('has_sub', 1, null, ['class' => 'form-check-input']) !!}
            {!! Form::label('has_sub', 'Has Submenu', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Publish Field -->
    <div class="col-lg-6">
        <div class="form-check mb-4">
            {!! Form::hidden('publish', 0) !!}
            {!! Form::checkbox('publish', 1, null, ['class' => 'form-check-input']) !!}
            {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Menu Order Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('menu_order', 'Menu Order:', ['class' => 'label text-secondary']) !!}
            {!! Form::number('menu_order', null, ['class' => 'form-control text-dark ps-5 h-55', 'placeholder' => 'Enter Menu Order']) !!}
        </div>
    </div>

    <!-- Route Name Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('route_name', 'Route Name:', ['class' => 'label text-secondary']) !!}
            {!! Form::text('route_name', null, ['class' => 'form-control text-dark ps-5 h-55', 'placeholder' => 'Enter Route Name']) !!}
        </div>
    </div>

    <!-- Show Footer Field -->
    <div class="col-lg-6">
        <div class="form-check mb-4">
            {!! Form::hidden('show_footer', 0) !!}
            {!! Form::checkbox('show_footer', 1, null, ['class' => 'form-check-input']) !!}
            {!! Form::label('show_footer', 'Show in Footer', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- On Menu Field -->
    <div class="col-lg-6">
        <div class="form-check mb-4">
            {!! Form::hidden('on_menu', 0) !!}
            {!! Form::checkbox('on_menu', 1, null, ['class' => 'form-check-input']) !!}
            {!! Form::label('on_menu', 'Show on Menu', ['class' => 'form-check-label']) !!}
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
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('desc_ar', 'Page Description (Arabic):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('desc_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Description in Arabic']) !!}
            </div>
        </div>
    </div>

    <!-- page Description En Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('desc_en', 'Page Description (English):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('desc_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Page Description in English']) !!}
            </div>
        </div>
    </div>
</div>
