

    <div class="col-lg-6">
        <!-- Image Field -->
        <div class="form-group mb-4">
            {!! Form::label('image', 'Image:(1280x540)', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">

                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>

                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $slider->image)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{asset($slider->image)}}">
                                <img style="height: 50px" src="{{ asset($slider->image) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-6" style="visibility: hidden">
        <!-- Video Url Field -->
        <div class="form-group mb-4">
            {!! Form::label('video_url', 'Video Url:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('video_url', null, ['class' => 'form-control text-dark ps-5 h-55', 'maxlength' => 255, 'placeholder' => 'Enter Video URL']) !!}
                <i class="ri-link-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- Title Ar Field -->
        <div class="form-group mb-4">
            {!! Form::label('title_ar', 'Title Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('title_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in Arabic']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>


    <div class="col-lg-6">
        <!-- Title En Field -->
        <div class="form-group mb-4">
            {!! Form::label('title_en', 'Title En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('title_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in English']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Summary Ar Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('summary_ar', 'Summary Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_ar', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Summary in Arabic']) !!}
                <i class="ri-align-left-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Summary En Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('summary_en', 'Summary En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_en', null, ['class' => 'form-control text-dark ps-5', 'required', 'placeholder' => 'Enter Summary in English']) !!}
                <i class="ri-align-left-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>


    <div class="col-lg-6">
        <!-- Publish Field -->
        <div class="form-group mb-4">
            <div class="form-check">
                {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
                {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
                {!! Form::label('publish', 'Publish', ['class' => 'form-check-label text-secondary']) !!}
            </div>
        </div>
    </div>

