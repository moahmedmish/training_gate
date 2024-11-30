<div class="row">
    <!-- Image Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('image', 'Image:(400x450)', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $member->image)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{ asset($member->image) }}">
                                <img style="height: 50px" src="{{ asset($member->image) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Name Ar Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('name_ar', 'Name Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('name_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Name in Arabic']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Name En Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('name_en', 'Name En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('name_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Name in English']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>


    <!-- Role Ar Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('role_ar', 'Role Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('role_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Role in Arabic']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Role En Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('role_en', 'Role En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('role_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'maxlength' => 255, 'placeholder' => 'Enter Role in English']) !!}
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>


</div>
