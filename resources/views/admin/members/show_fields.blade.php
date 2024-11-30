

<div class="col-sm-12">
    <h5>{!! Form::label('image', 'Image') !!}</h5>
    {{--    <p>{{ $page->banner }}</p>--}}
    <p class="mx-1 font-weight-bolder">
        <a target="_blank" href="{{ asset(  $member->image ) }}">
            <td><img height="50" src="{{ asset( $member->image ) }}"></td>
        </a>
    </p>
</div>



<!-- Name Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name_ar', 'Name Ar:') !!}</h5>
    <p>{{ $member->name_ar }}</p>
</div>

<!-- Name En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name_en', 'Name En:') !!}</h5>
    <p>{{ $member->name_en }}</p>
</div>


<!-- Role Ar Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('role_ar', 'Role Ar:') !!}</h5>
    <p>{{ $member->role_ar }}</p>
</div>

<!-- Role En Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('role_en', 'Role En:') !!}</h5>
    <p>{{ $member->role_en }}</p>
</div>

