@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Section Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right" href="{{ route('sections.index', [$section->page_id, $section->sub_page_id]) }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Name:') !!}
                        <input type="text" class="form-control" value="{{ $section->name }}" readonly>
                    </div>

                    <!-- Title Ar Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('title_ar', 'Title (Arabic):') !!}
                        <input type="text" class="form-control" value="{{ $section->title_ar }}" readonly>
                    </div>

                    <!-- Title En Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('title_en', 'Title (English):') !!}
                        <input type="text" class="form-control" value="{{ $section->title_en }}" readonly>
                    </div>

                    <!-- Page Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('page_name', 'Page:') !!}
                        <input type="text" class="form-control" value="{{ $section->page->name }}" readonly>
                        {!! Form::hidden('page_id', $section->page->id) !!}
                    </div>

                    <!-- Sub Page Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('sub_page_name', 'Sub Page:') !!}
                        <input type="text" class="form-control" value="{{ $section->subPage->name }}" readonly>
                        {!! Form::hidden('sub_page_id', $section->subPage->id) !!}
                    </div>

                    <!-- Content Ar Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('content_ar', 'Content Ar:') !!}
                        <textarea class="form-control" rows="5" readonly>{{ $section->content_ar }}</textarea>
                    </div>

                    <!-- Content En Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('content_en', 'Content En:') !!}
                        <textarea class="form-control" rows="5" readonly>{{ $section->content_en }}</textarea>
                    </div>

                    <!-- Order Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('order', 'Order:') !!}
                        <input type="number" class="form-control" value="{{ $section->order }}" readonly>
                    </div>

                    <!-- Is Publish Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('is_publish', 'Is Publish:') !!}
                        <input type="checkbox" class="form-check-input" {{ $section->is_publish ? 'checked' : '' }} disabled>
                    </div>

                    <!-- Image Path Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('image_path', 'Image:') !!}
                        @if($section->image_path)
                            <div>
                                <img src="{{ asset($section->image_path) }}" alt="Image" class="img-fluid" style="max-width: 200px; max-height: 200px; object-fit: cover;">
                            </div>
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
