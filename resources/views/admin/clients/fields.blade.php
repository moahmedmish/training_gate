<!-- Title Ar Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('name_ar', 'Name Ar:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::text('name_ar', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Name in Arabic']) !!}
            <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>

<!-- Name En Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('name_en', 'Name En:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::text('name_en', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Enter Name in English']) !!}
            <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>


<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('logo', 'Logo:(131x61)', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('logo', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                    {!! Form::label('logo', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                </div>
                @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $client->logo)
                    <div class="mx-1 font-weight-bolder">
                        <a target="_blank" href="{{asset($client->logo)}}">
                            <img style="height: 50px" src="{{ asset($client->logo) }}" class="border border-secondary">
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>


<!-- Url Field -->
<!-- Name En Field -->
<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('url', 'Url:') !!}
        {!! Form::text('url', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
    </div>
</div>
