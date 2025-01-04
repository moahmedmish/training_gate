@extends('layouts.app-new')

@section('content')

    <div class="content px-3">

        @include('flash::message')

        @include('admin.sections.table')
    </div>

@endsection
