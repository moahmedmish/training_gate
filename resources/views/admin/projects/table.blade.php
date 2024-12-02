<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Banner</th>
                <th>Banner2</th>
                <th>Title Ar</th>
                <th>Title En</th>
                <th>Category</th>
                <th>Summary Ar</th>
                <th>Summary En</th>
                <th>Order</th>
                <th>Project Photos</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($project->banner)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($project->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>{{ $project->title_ar }}</td>
                    <td>{{ $project->title_en }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ \Illuminate\Support\Str::words($project->summary_ar, 5, ' ...') }}</td>
                    <td>{{ \Illuminate\Support\Str::words($project->summary_en, 5, ' ...') }}</td>
                    <td>{{ $project->order }}</td>
                    <td><a href="{{route('project-photos.index')}}?project_id={{$project->id}}">Photos</a></td>
                    <td>
                        {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('projects.show', [$project->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('projects.edit', [$project->id]) }}"
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
{{--            @include('adminlte-templates::common.paginate', ['records' => $projects])--}}
        </div>
    </div>
</div>
