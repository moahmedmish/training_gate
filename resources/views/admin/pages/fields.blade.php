{{--<div class="row">--}}
    <!-- Image Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('image', 'Image:(400x600 service, and 660x800 about)', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $page->image)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{asset($page->image)}}">
                                <img style="height: 50px" src="{{ asset($page->image) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner1 Field -->
    <div class="col-lg-6">
            <div class="form-group mb-4">
            {!! Form::label('banner1', 'Banner1:(1393x584)', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('banner1', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('banner1', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $page->banner1)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{asset($page->banner1)}}">
                                <img style="height: 50px" src="{{ asset($page->banner1) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner2 Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('banner2', 'Banner2:(1393x584)', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                <div class="input-group">
                    <div class="custom-file">
                        {!! Form::file('banner2', ['class' => 'custom-file-input form-control text-dark ps-5 h-55']) !!}
                        {!! Form::label('banner2', 'Choose file', ['class' => 'custom-file-label position-absolute top-50 start-0 translate-middle-y fs-20 ps-20']) !!}
                    </div>
                    @if(\Illuminate\Support\Str::contains(request()->route()->getName(), 'edit') && $page->banner2)
                        <div class="mx-1 font-weight-bolder">
                            <a target="_blank" href="{{asset($page->banner2)}}">
                                <img style="height: 50px" src="{{ asset($page->banner2) }}" class="border border-secondary">
                            </a>
                        </div>
                    @endif

                </div>
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

    <!-- Video Url Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            {!! Form::label('video_url', 'Video Url:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::text('video_url', null, ['class' => 'form-control text-dark ps-5 h-55', 'maxlength' => 255, 'placeholder' => 'Enter Video URL']) !!}
                <i class="ri-link-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
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



    <div class="row">
        <!-- Other fields... -->
    
        <!-- On Menu Field -->
        <div class="col-lg-4">
            <div class="form-group mb-4" style="margin-top: 40px">
                <div class="form-check">
                    {!! Form::hidden('on_menu', 0, ['class' => 'form-check-input']) !!}
                    {!! Form::checkbox('on_menu', '1', null, ['class' => 'form-check-input']) !!}
                    {!! Form::label('on_menu', 'Show on Menu', ['class' => 'form-check-label text-secondary']) !!}
                </div>
            </div>
        </div>
    
        <!-- Menu Order Field -->
        <div class="col-lg-4">
            <div class="form-group mb-4">
                {!! Form::label('menu_order', 'Menu Order:', ['class' => 'label text-secondary']) !!}
                <div class="form-group position-relative">
                    {!! Form::number('menu_order', null, ['class' => 'form-control text-dark ps-5 h-55', 'placeholder' => 'Enter Menu Order']) !!}
                    <i class="ri-sort-asc-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                </div>
            </div>
        </div>
    
        <!-- Parent ID Field -->
        <div class="col-lg-4">
            <div class="form-group mb-4">
                {!! Form::label('parent_id', 'Parent Page:', ['class' => 'label text-secondary']) !!}
                {!! Form::select('parent_id', $pagesArray, isset($page) ? $page->parent_id : null, ['class' => 'form-control text-dark']) !!}
            </div>
        </div>
    
        <!-- Other fields... -->
    </div>



    <!-- Summary Ar Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('summary_ar', 'Summary Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_ar', null, ['class' => 'form-control text-dark ps-5', '', 'placeholder' => 'Enter Summary in Arabic']) !!}
                <i class="ri-align-left-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Summary En Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('summary_en', 'Summary En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('summary_en', null, ['class' => 'form-control text-dark ps-5', '', 'placeholder' => 'Enter Summary in English']) !!}
                <i class="ri-align-left-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>

    <!-- Description Ar Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('description_ar', 'Description Ar:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('description_ar', null, ['class' => 'form-control text-dark ps-5', '', 'placeholder' => 'Enter Description in Arabic']) !!}
            </div>
        </div>
    </div>

    <!-- Description En Field -->
    <div class="col-lg-12">
        <div class="form-group mb-4">
            {!! Form::label('description_en', 'Description En:', ['class' => 'label text-secondary']) !!}
            <div class="form-group position-relative">
                {!! Form::textarea('description_en', null, ['class' => 'form-control text-dark ps-5', '', 'placeholder' => 'Enter Description in English']) !!}
            </div>
        </div>
    </div>

    <!-- Publish Field -->
    <div class="col-lg-6">
        <div class="form-group mb-4">
            <div class="form-check">
                {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
                {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
                {!! Form::label('publish', 'Publish', ['class' => 'form-check-label text-secondary']) !!}
            </div>
        </div>
    </div>
{{--</div>--}}
