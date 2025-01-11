    <div class="table-responsive" ">
        <table class="table table-sm" id="myTable" style="width: 100%; table-layout: auto;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th style="width: 120px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sectionTypes as $sectionType)
                <tr>
                    <td>{{ $sectionType->name }}</td>
                    <td>
                        <img src="{{ asset($sectionType->image) }}" alt="{{ $sectionType->name }}" style="width: 100px; height: 70px; object-fit: cover;">
                    </td>
                    <td>{{ $sectionType->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        {!! Form::open(['route' => ['sectionTypes.destroy', $sectionType->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('sectionTypes.show', [$sectionType->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('sectionTypes.edit', [$sectionType->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $sectionTypes])
        </div>
    </div>
