@extends('layouts.app-new')

@section('content')

    <div class="content px-3">

        @include('flash::message')

{{--        <div class="clearfix"></div>--}}

            @include('admin.pages.table')
    </div>

@endsection
