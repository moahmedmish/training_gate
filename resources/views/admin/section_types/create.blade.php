@extends('layouts.app1')

@section('content')


            {!! Form::open(['route' => 'sectionTypes.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.section_types.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('sectionTypes.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}
@endsection
