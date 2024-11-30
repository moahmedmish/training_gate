@extends('layouts.app1')

@section('content')

            {!! Form::open(['route' => 'pages.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.pages.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('pages.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
