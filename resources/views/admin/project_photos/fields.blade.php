<!-- Image Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('image', 'Image:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                    {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                </div>
                @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $projectPhoto->image)
                    <div class="mx-1 font-weight-bolder">
                        <a target="_blank" href="{{asset($projectPhoto->image)}}">
                            <img style="height: 50px" src="{{ asset($projectPhoto->image) }}"
                                 class="border border-secondary">
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('project_id', 'Select Project:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::select('project_id', \App\Models\Project::pluck('title_en', 'id')->toArray(), null, ['class' => 'form-control custom-select text-dark ps-5 h-55', 'placeholder' => 'Select Project']) !!}
            <i class="ri-folder-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>


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
