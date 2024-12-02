<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Banner1</th>
                <th>Banner2</th>
                <th>Parent</th>
                <th>Title Ar</th>
{{--                <th>Video Url</th>--}}
                <th>Title En</th>
{{--                <th>Summary Ar</th>--}}
{{--                <th>Summary En</th>--}}
                <th>Publish</th>
                <th>On Menu</th>
                <th>Order</th>
{{--                <th>Description Ar</th>--}}
{{--                <th>Description En</th>--}}
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($page->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($page->banner1)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($page->banner2)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td>{{ $page->parent ? $page->parent->title_ar : 'No Parent' }}</td>

                    <td>{{ $page->title_ar }}</td>
{{--                    <td>{{ $page->video_url }}</td>--}}
                    <td>{{ $page->title_en }}</td>
{{--                    <td>{{ \Illuminate\Support\Str::words($page->summary_ar, 3, ' ...') }}</td>--}}
{{--                    <td>{{ \Illuminate\Support\Str::words($page->summary_en, 3, ' ...') }}</td>--}}
{{--                    <td>{{ \Illuminate\Support\Str::words($page->description_ar, 5, ' ...') }}</td>--}}
{{--                    <td>{{ \Illuminate\Support\Str::words($page->description_en, 5, ' ...') }}</td>--}}
                    @if($page->publish)
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Published</span>
                        </td>
                    @else
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    @endif

                    @if($page->on_menu)
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Yes</span>
                        </td>
                    @else
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    @endif
                    <td>{{ $page->menu_order }}</td>



                    <td>
                        {!! Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('pages.show', [$page->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('pages.edit', [$page->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            {{--@include('adminlte-templates::common.paginate', ['records' => $pages])--}}
        </div>
    </div>
</div>
