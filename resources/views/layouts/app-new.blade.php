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

@php
 $routename = \Illuminate\Support\Str::replace('.index','', request()->route()->getName())  ;
 $pageNamePlural = ucfirst($routename);
if(\Illuminate\Support\Str::contains($pageNamePlural, '-'))
{
$pageNamePlural = str_replace('-', ' ', $pageNamePlural);

}

if(\Illuminate\Support\Str::contains($pageNamePlural, '.'))
{
$pageNamePlural = str_replace('.', ' ', $pageNamePlural);

}



// dd(\Illuminate\Support\Facades\Route::current()->getName());
 $pageNameSingular = ucfirst(\Illuminate\Support\Str::singular($pageNamePlural));
@endphp
        <div class="main-content-container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">

                {{--                        <h3 class="mb-0">Sliders List</h3>--}}
                @if(
                    !\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::current()->getName(),'.show')

                )
                    @if(\Illuminate\Support\Facades\Route::current()->getName() == 'settings.index' || \Illuminate\Support\Facades\Route::current()->getName() == 'photo-settings.index' ) @else
                <a href="{{ route($routename.'.create') }}" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i>  Add {{$pageNameSingular == 'Gallery'? 'Collection': $pageNameSingular}}
                </a>
                    @endif
                @endif

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
                            <span class="fw-medium">{{$pageNamePlural == 'Galleries'? 'Collections': $pageNamePlural}}</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                        @if(\Illuminate\Support\Str::contains(request()->route()->getName(), '.show') && \Illuminate\Support\Str::contains($pageNamePlural, 'show'))

                            <h3 class="mb-0"> {{ $pageNamePlural == 'Galleries'? 'Collections': $pageNamePlural }} </h3>

                        @else
                            <h3 class="mb-0"> {{ $pageNamePlural == 'Galleries'? 'Collections': $pageNamePlural }} List</h3>
                        @endif
                    </div>

                    <div class="default-table-area all-products">
                        <div class="table-responsive">

                            @yield('content')


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

