<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TGI- Admin Dashborad</title>
    <!-- Styles -->
    @include('partials.styles')
</head>
<body class="boxed-size">
@include('partials.preloader')
@include('partials.sidebar')

<div class="container-fluid">
    <div class="main-content d-flex flex-column">
        <!-- Start Header Area -->
        @include('partials.header')
        <!-- End Header Area -->


        <div class="main-content-container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                {{--                        <h3 class="mb-0">Sliders List</h3>--}}
                <a href="{{ route('sliders.create') }}" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i> Add Slider
                </a>

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb align-items-center mb-0 lh-1">
                        <li class="breadcrumb-item">
                            <a href="#" class="d-flex align-items-center text-decoration-none">
                                <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                <span class="text-secondary fw-medium hover">Dashboard</span>
                            </a>
                        </li>
{{--                        <li class="breadcrumb-item active" aria-current="page">--}}
{{--                            <span class="fw-medium">Tables</span>--}}
{{--                        </li>--}}
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="fw-medium">Sliders</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                        <h3 class="mb-0">Sliders List</h3>
                    </div>

                    <div class="default-table-area all-products">
                        <div class="table-responsive">
                            <table class="table align-middle" id="myTable">
                                <thead>
                                <tr>
                                    {{--                                            <th scope="col">ID</th>--}}
                                    <th scope="col">Image</th>
                                    <th scope="col">Title Ar</th>
{{--                                    <th scope="col">Video Url</th>--}}
                                    <th scope="col">Title En</th>
                                    <th scope="col">Summary Ar</th>
                                    <th scope="col">Summary En</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col" colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)

                                    <tr>
                                        {{--                                            <td class="text-body">#JAN-999</td>--}}
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset($slider->image)}}" class="wh-40 rounded-3" alt="user">
                                            </div>
                                        </td>
                                        <td class="text-secondary">{{ $slider->title_ar }}</td>
{{--                                        <td class="text-secondary">{{ $slider->video_url }}</td>--}}
                                        <td class="text-secondary">{{ $slider->title_en }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($slider->summary_ar, 5, ' ...') }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($slider->summary_en, 5, ' ...') }}</td>
                                        @if($slider->publish)
                                            <td><span
                                                    class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Published</span>
                                            </td>
                                        @else
                                            <td><span
                                                    class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                                            </td>
                                        @endif

                                        <td>
                                            {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}

                                            <div class="d-flex align-items-center gap-1">
                                                <a href="{{ route('sliders.show', [$slider->id]) }}"
                                                   class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                    <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                </a>
                                                <a href="{{ route('sliders.edit', [$slider->id]) }}"
                                                   class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                    <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                </a>
                                                {!! Form::button('<i class="material-symbols-outlined fs-16 text-danger">delete</i>', [
                                                    'type' => 'submit',
                                                    'class' => 'ps-0 border-0 bg-transparent lh-1 position-relative top-2',
                                                    'onclick' => "return confirm('Are you sure you want to delete this?')"
                                                ]) !!}
                                            </div>
                                            {!! Form::close() !!}

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="flex-grow-1"></div>

<!-- Start Footer Area -->
@include('partials.footer')
<!-- End Footer Area -->
</div>
</div>


@include('partials.theme_settings')
@include('partials.scripts')
</body>
</html>
