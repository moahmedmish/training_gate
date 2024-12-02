<!-- Name Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name_ar', 'Name Ar:') !!}</h5>
    <p>{{ $client->name_ar }}</p>
</div>

<!-- Name En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name_en', 'Name En:') !!}</h5>
    <p>{{ $client->name_en }}</p>
</div>


<div class="col-sm-12">
    <h5>{!! Form::label('logo', 'Logo') !!}</>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $client->logo ) }}">
            <td><img height="50" src="{{ asset( $client->logo ) }}"></td>
        </a>
    </p>
</div>


<!-- Url Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('url', 'Url:') !!}</h5>
    <p>{{ $client->url }}</p>
</div>

