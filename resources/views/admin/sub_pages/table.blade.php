<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Title En</th>
                <th>Publish</th>
                <th>Menu Order</th>
                <th>Route Name</th>
                <th>Page</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subPages as $subPage)
                <tr>
                    <td>{{ $subPage->name }}</td>
                    <td>{{ $subPage->title_en }}</td>
                    
                    @if($subPage->publish)
                        <td><span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Published</span></td>
                    @else
                        <td><span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">No</span></td>
                    @endif
                    
                    <td>{{ $subPage->menu_order }}</td>
                    <td>{{ $subPage->route_name }}</td>
                    
                    <td>{{ $subPage->page ? $subPage->page->name : 'N/A' }}</td> <!-- Display page name -->

                    <td>
                        {!! Form::open(['route' => ['sub_pages.destroy', $page->id, $subPage->id], 'method' => 'delete']) !!}
                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('sub_pages.show', [$page->id, $subPage->id]) }}" 
                                class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('sub_pages.edit', [$page->id, $subPage->id]) }}" 
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
            {{-- @include('adminlte-templates::common.paginate', ['records' => $subPages]) --}}
        </div>
    </div>
</div>
