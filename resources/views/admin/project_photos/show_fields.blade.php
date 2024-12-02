<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $projectPhoto->image ) }}">
            <td><img height="50" src="{{ asset( $projectPhoto->image ) }}"></td>
        </a>
    </p>
</div>


<!-- Title Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_ar', 'Title Ar:') !!}</h5>
    <p>{{ $projectPhoto->title_ar }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_en', 'Title En:') !!}</h5>
    <p>{{ $projectPhoto->title_en }}</p>
</div>

