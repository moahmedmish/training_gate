<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Page</th>
                <th>Sub Page</th>
                <th>Is Publish</th>
                <th>Order</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr>
            <td>{{ $section->name }}</td>
              <!-- Display Page Name -->
              <td>{{ $page->name }}</td>

              <!-- Display Sub Page Name for the current Page -->
              <td>{{ $page->subPage->name ?? 'No Sub Page' }}</td> <!-- Handle if no subPage -->

              <!-- Display Is Publish Status with success/warning tag -->
              <td>
                  @if($section->is_publish)
                      <span class="badge bg-success">Published</span>
                  @else
                      <span class="badge bg-warning">Not Published</span>
                  @endif
              </td>
                <td>{{ $section->order }}</td>
                <td style="width: 120px">
                    {!! Form::open(['route' => ['sections.destroy', $section->page_id, $section->sub_page_id, $section->id], 'method' => 'delete']) !!}
                    <div class="d-flex align-items-center gap-1">
                        <a href="{{ route('sections.show', [$section->page_id, $section->sub_page_id, $section->id]) }}" 
                           class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                        </a>
                        <a href="{{ route('sections.edit', [$section->page_id, $section->sub_page_id, $section->id]) }}" 
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