<!-- Image Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $slider->image ) }}">
            <td><img height="50" src="{{ asset( $slider->image ) }}"></td>
        </a>
    </p>
</div>
<!-- Title Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_ar', 'Title Ar:') !!}</h5>
    <p>{{ $slider->title_ar }}</p>
</div>

<!-- Video Url Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('video_url', 'Video Url:') !!}</h5>
    <p>{{ $slider->video_url }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_en', 'Title En:') !!}</h5>
    <p>{{ $slider->title_en }}</p>
</div>

<!-- Summary Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_ar', 'Summary Ar:') !!}</h5>
    <p>{{ $slider->summary_ar }}</p>
</div>

<!-- Summary En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_en', 'Summary En:') !!}</h5>
    <p>{{ $slider->summary_en }}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('publish', 'Publish:') !!}</h5>
    <p>{{ $slider->publish }}</p>
</div>

