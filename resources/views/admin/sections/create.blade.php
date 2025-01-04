@extends('layouts.app1')

@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Sections
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')


        {!! Form::open(['route' => ['sections.store', $page->id, $subPage->id], 'files' => true]) !!}
            <div class="card-body">

                <div class="row">
                    @include('admin.sections.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('sections.index', ['page_id' => $page->id, 'sub_page_id' => $subPage->id]) }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}
    </div>
@endsection
