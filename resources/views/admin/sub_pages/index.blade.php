@extends('layouts.app-new')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $page->name }} Sub Pages</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                    href="{{ route('sub_pages.create', ['page_id' => $page->id]) }}">
                     Add New
                 </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('admin.sub_pages.table')
        </div>
    </div>

@endsection
