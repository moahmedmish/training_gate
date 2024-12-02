<div class="table-responsive">
    <table class="table" id="myTable">
    <thead>
            <tr>
                <th>Image</th>
                <th>Title Ar</th>
                <th>Title En</th>
{{--                <th>Category</th>--}}
                <th>CategoryID</th>
{{--                <th>Summary Ar</th>--}}
{{--                <th>Summary En</th>--}}
                <th>Order</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($gallery->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>{{ $gallery->title_ar }}</td>
                    <td>{{ $gallery->title_en }}</td>
{{--                    <td>{{ $gallery->category }}</td>--}}
                    <td>{{ \App\Models\Category::find($gallery->category_id)?->name_ar ?? '' }}</td>
{{--                    <td>{{ $gallery->summary_ar }}</td>--}}
{{--                    <td>{{ $gallery->summary_en }}</td>--}}
                    <td>{{ $gallery->order }}</td>

                    <td>
                        {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('galleries.show', [$gallery->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('galleries.edit', [$gallery->id]) }}"
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
           {{-- @include('adminlte-templates::common.paginate', ['records' => $galleries])--}}
        </div>
    </div>
</div>
