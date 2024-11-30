@extends('layouts.app1')

@section('content')

    {!! Form::open(['route' => 'contacts.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.contacts.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('contacts.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

@endsection
