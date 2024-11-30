<!-- Image Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image:') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $service->image ) }}">
            <td><img height="50" src="{{ asset( $service->image ) }}"></td>
        </a>
    </p>
</div>

<!-- Icon Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('icon', 'Icon:') !!}</h5>
    <p>{{ $service->icon }}</p>
</div>

<!-- Banner Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('banner', 'Banner:') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $service->banner ) }}">
            <td><img height="50" src="{{ asset( $service->banner ) }}"></td>
        </a>
    </p>
</div>
<!-- Title Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_ar', 'Title Ar:') !!}</h5>
    <p>{{ $service->title_ar }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_en', 'Title En:') !!}</h5>
    <p>{{ $service->title_en }}</p>
</div>

<!-- Summary Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_ar', 'Summary Ar:') !!}</h5>
    <p>{{ $service->summary_ar }}</p>
</div>

<!-- Summary En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_en', 'Summary En:') !!}</h5>
    <p>{{ $service->summary_en }}</p>
</div>

<!-- Desc Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('desc_ar', 'Desc Ar:') !!}</h5>
    <p>{{ $service->desc_ar }}</p>
</div>

<!-- Desc En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('desc_en', 'Desc En:') !!}</h5>
    <p>{{ $service->desc_en }}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('publish', 'Publish:') !!}</h5>
    <p>{{ $service->publish }}</p>
</div>

