<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Title En</th>
                <th>Publish</th>
                <th>On Menu</th>
                <th>Has Sub</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{ $page->name }}</td>
                    <td>{{ $page->title_en }}</td>
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
                    @if($page->has_sub)
                        <td><span
                                class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Yes</span>
                        </td>
                    @else
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span>
                        </td>
                    @endif
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
                        @if($page->has_sub)
                            <a href="{{ url('admin/sub_pages', $page->id) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-success">subdirectory_arrow_right</i>
                            </a>
                        @endif
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