    <div class="table-responsive" ">
        <table class="table table-sm" style="width: 100%; table-layout: auto;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <!--<th style="width: 120px">Action</th>-->
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
                    <!-- 
                        <td>
                            {!! Form::open(['route' => ['sectionTypes.destroy', $sectionType->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('sectionTypes.show', [$sectionType->id]) }}"
                                    class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                    <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                </a>
                                <a href="{{ route('sectionTypes.edit', [$sectionType->id]) }}"
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
                    --!-->
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
