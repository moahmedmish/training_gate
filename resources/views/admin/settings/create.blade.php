@extends('layouts.app1')

@section('content')

    {!! Form::open(['route' => 'settings.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.settings.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('settings.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
