<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title Ar</th>
                <th>Title En</th>
                <th>Project</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projectPhotos as $projectPhoto)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($projectPhoto->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td>{{ $projectPhoto->title_ar }}</td>
                    <td>{{ $projectPhoto->title_en }}</td>
                    <td>{{ $projectPhoto->project->title_en }}</td>
                    <td>
                        {!! Form::open(['route' => ['project-photos.destroy', $projectPhoto->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('project-photos.show', [$projectPhoto->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('project-photos.edit', [$projectPhoto->id]) }}"
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
{{--            @include('adminlte-templates::common.paginate', ['records' => $projectPhotos])--}}
        </div>
    </div>
</div>
