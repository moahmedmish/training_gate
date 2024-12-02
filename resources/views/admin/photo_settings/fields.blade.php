<!-- Name Field -->


<div class="col-lg-6">
    <div class="form-group mb-4">
        {!! Form::label('name', 'Name:', ['class' => 'label text-secondary']) !!}
        <div class="form-group position-relative">
            {!! Form::text('name', null, ['class' => 'form-control text-dark ps-5 h-55', 'required', 'placeholder' => 'Name']) !!}
            <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
        </div>
    </div>
</div>


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
                @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $photoSetting->image)
                    <div class="mx-1 font-weight-bolder">
                        <a target="_blank" href="{{asset($photoSetting->image)}}">
                            <img style="height: 50px" src="{{ asset($photoSetting->image) }}" class="border border-secondary">
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
