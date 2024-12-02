

<div class="col-sm-12">
    <h5>{!! Form::label('banner', 'Banner:') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $project->banner ) }}">
            <td><img height="50" src="{{ asset( $project->banner ) }}"></td>
        </a>
    </p>
</div>

<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Banner2:') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $project->image ) }}">
            <td><img height="50" src="{{ asset( $project->image ) }}"></td>
        </a>
    </p>
</div>
<!-- Title Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_ar', 'Title Ar:') !!}</h5>
    <p>{{ $project->title_ar }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('title_en', 'Title En:') !!}</h5>
    <p>{{ $project->title_en }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('category', 'Category:') !!}</h5>
    <p>{{ $project->category }}</p>
</div>

<!-- Summary Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_ar', 'Summary Ar:') !!}</h5>
    <p>{{ $project->summary_ar }}</p>
</div>

<!-- Summary En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('summary_en', 'Summary En:') !!}</h5>
    <p>{{ $project->summary_en }}</p>
</div>

<!-- Order Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('order', 'Order:') !!}</h5>
    <p>{{ $project->order }}</p>
</div>

