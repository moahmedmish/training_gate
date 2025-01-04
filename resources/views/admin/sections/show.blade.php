@extends('layouts.app1')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Section Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('sections.index', ['page_id' => $section->page_id, 'sub_page_id' => $section->sub_page_id]) }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card-body">
            <div class="row">
                @include('admin.sections.show_fields')
            </div>
        </div>
    </div>
@endsection