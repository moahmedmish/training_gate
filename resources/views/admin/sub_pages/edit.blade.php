@extends('layouts.app1')

@section('content')

    <!-- Correct route for updating the sub-page -->
    {!! Form::model($subPage, ['route' => ['sub_pages.update', $page->id, $subPage->id], 'method' => 'put', 'files' => true]) !!}

        <div class="card-body">
            <div class="row">
                @include('admin.sub_pages.fields')
            </div>
        </div>

        <div class="card-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <!-- Correct route for cancel, pointing to sub_pages.index with the page_id -->
            <a href="{{ route('sub_pages.index', ['page_id' => $page->id]) }}" class="btn btn-default">Cancel</a>
        </div>

    {!! Form::close() !!}

@endsection

