@extends('layouts.app-new')

@section('content')

    <div class="content px-3">

        @include('flash::message')
                    @include('admin.project_photos.show_fields')

    </div>
@endsection
