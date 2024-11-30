@extends('layouts.app1')

@section('content')


    {!! Form::open(['route' => 'projects.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.projects.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('projects.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
