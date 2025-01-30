<div class="row">
    <!-- Service Image Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('image', 'Service Image:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $service->image)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{ asset($service->image) }}">
                                <img style="height: 50px" src="{{ asset($service->image) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Service Banner Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('banner', 'Service Banner:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('banner', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('banner', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $service->banner)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{ asset($service->banner) }}">
                                <img style="height: 50px" src="{{ asset($service->banner) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Service Title Ar Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('title_ar', 'Service Title (Arabic):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('title_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Service Title in Arabic']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Service Title En Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('title_en', 'Service Title (English):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('title_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Service Title in English']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Service Summary Ar Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('summary_ar', 'Service Summary (Arabic):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Service Summary in Arabic']) !!}
            </div>
        </div>
    </div>

    <!-- Service Summary En Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('summary_en', 'Service Summary (English):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Service Summary in English']) !!}
            </div>
        </div>
    </div>

    <!-- Service Description Ar Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('desc_ar', 'Service Description (Arabic):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('desc_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Service Description in Arabic']) !!}
            </div>
        </div>
    </div>

    <!-- Service Description En Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('desc_en', 'Service Description (English):', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('desc_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Service Description in English']) !!}
            </div>
        </div>
    </div>

    <!-- Service Position Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('position', 'Position:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::select('position',
                    [
                        '1' => 'Position 1',
                        '2' => 'Position 2',
                        '3' => 'Position 3',
                        '4' => 'Position 4',
                        '5' => 'Position 5',
                        '6' => 'Position 6'
                    ],
                    null,
                    ['class' => 'form-control text-dark ps-5 h-55', 'placeholder' => 'Select Position']
                ) !!}
                <i class="ri-sort-asc position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Publish Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('publish', 'Publish:', ['class' => 'label text-secondary']) !!}
            <div class="form-check position-relative">
                {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
                {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
                {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
            </div>
        </div>
    </div>
</div>
