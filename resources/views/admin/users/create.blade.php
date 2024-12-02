@extends('layouts.app1')

@section('content')

    {!! Form::open(['route' => 'users.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.users.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
