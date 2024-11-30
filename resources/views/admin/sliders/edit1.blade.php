@extends('layouts.app1')

@section('content')

    {!! Form::model($slider, ['route' => ['sliders.update', $slider->id], 'method' => 'patch', 'files' => true]) !!}

    <div class="card-body">
        <div class="row">
            @include('admin.sliders.fields')
        </div>
    </div>

    <div class="card-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('sliders.index') }}" class="btn btn-default"> Cancel </a>
    </div>

    {!! Form::close() !!}

@endsection
