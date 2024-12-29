@extends('layouts.app1')

@section('content')

{!! Form::open(['route' => ['sub_pages.store', $page->id], 'files' => true]) !!}

    <div class="card-body">

        <div class="row">
            @include('admin.sub_pages.fields')
        </div>

    </div>

    <div class="card-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('sub_pages.index', ['page_id' => $page->id]) }}" class="btn btn-default"> Cancel </a>
    </div>

    {!! Form::close() !!}

@endsection
