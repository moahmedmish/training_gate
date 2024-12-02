@extends('layouts.app1')

@section('content')

    {!! Form::open(['route' => 'services.store', 'files' => true]) !!}

    <div class="card-body">

        <div class="row">
                    @include('admin.services.fields')
        </div>

    </div>

    <div class="card-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('members.index') }}" class="btn btn-default"> Cancel </a>
    </div>

    {!! Form::close() !!}

@endsection
