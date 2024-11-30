<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('banner', 'Banner:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('banner', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                    {!! Form::label('banner', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                </div>
                @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $project->banner)
                    <div class="mx-1 font-weight-bolder">
                        <a target="_blank" href="{{asset($project->banner)}}">
                            <img style="height: 50px" src="{{ asset($project->banner) }}" class="border border-secondary">
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- Image Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('banner2', 'Banner2:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                    {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                </div>
                @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $project->image)
                    <div class="mx-1 font-weight-bolder">
                        <a target="_blank" href="{{asset($project->image)}}">
                            <img style="height: 50px" src="{{ asset($project->image) }}" class="border border-secondary">
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div><div class="clearfix"></div>

<!-- Title Ar Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('title_ar', 'Title Ar:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::text('title_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in Arabic']) !!}
            <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>

<!-- Title En Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('title_en', 'Title En:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::text('title_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Title in English']) !!}
            <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>

<!-- Category Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('category', 'Category:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::select('category', ['exterior' => 'exterior','interior' => 'interior','washbasins' => 'washbasins','flooring' => 'flooring','stairs' => 'stairs','table' => 'table','others' => 'others'], null, ['class' => 'form-control text-dark ps-5 h-55 custom-select', 'required']) !!}
            <i class="ri-apps-2-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
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


<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control', 'required', 'min' => 1]) !!}
</div>
