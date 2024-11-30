@extends('layouts.app1')

@section('content')


    {!! Form::open(['route' => 'photo-settings.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.photo_settings.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('photo-settings.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection