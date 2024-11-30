@extends('layouts.app1')

@section('content')

            {!! Form::open(['route' => 'categories.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.categories.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('categories.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
