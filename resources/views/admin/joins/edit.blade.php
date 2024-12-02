@extends('layouts.app1')

@section('content')
    {!! Form::model($join, ['route' => ['joins.update', $join->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('admin.joins.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('joins.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
