@extends('layouts.app1')

@section('content')
    {!! Form::open(['route' => 'clients.store', 'files' => true]) !!}

        <div class="card-body">

            <div class="row">
                @include('admin.clients.fields')
            </div>

        </div>

        <div class="card-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('clients.index') }}" class="btn btn-default"> Cancel </a>
        </div>

    {!! Form::close() !!}
@endsection
