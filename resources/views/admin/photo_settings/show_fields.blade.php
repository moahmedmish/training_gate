<!-- Name Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name', 'Name:') !!}</h5>
    <p>{{ $photoSetting->name }}</p>
</div>


<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $photoSetting->image ) }}">
            <td><img height="50" src="{{ asset( $photoSetting->image ) }}"></td>
        </a>
    </p>
</div>
