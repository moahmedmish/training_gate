

<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $gallery->image ) }}">
            <td><img height="50" src="{{ asset( $gallery->image ) }}"></td>
        </a>
    </p>
</div>

<!-- Video Url Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('video_url', 'Video Url:') !!}</h5>
    <p>{{ $gallery->video_url }}</p>
</div>

<!-- Title Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_ar', 'Title Ar:') !!}</h5>
    <p>{{ $gallery->title_ar }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_en', 'Title En:') !!}</h5>
    <p>{{ $gallery->title_en }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('category', 'Category:') !!}</h5>
    <p>{{ $gallery->category }}</p>
</div>

<!-- Summary Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_ar', 'Summary Ar:') !!}</h5>
    <p>{{ $gallery->summary_ar }}</p>
</div>

{{--<!-- Summary En Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    <h5>{!! Form::label('summary_en', 'Summary En:') !!}</h5>--}}
{{--    <p>{{ $gallery->summary_en }}</p>--}}
{{--</div>--}}

{{--<!-- Order Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    <h5>{!! Form::label('order', 'Order:') !!}</h5>--}}
{{--    <p>{{ $gallery->order }}</p>--}}
{{--</div>--}}

