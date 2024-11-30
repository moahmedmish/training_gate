<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name Ar</th>
                <th>Name En</th>
                <th>Role Ar</th>
                <th>Role En</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($members as $member)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($member->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>

                    <td>{{ $member->name_ar }}</td>
                    <td>{{ $member->name_en }}</td>
                    <td>{{ $member->role_ar }}</td>
                    <td>{{ $member->role_en }}</td>

                    <td>
                        {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('members.show', [$member->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('members.edit', [$member->id]) }}"
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
            {{--@include('adminlte-templates::common.paginate', ['records' => $members])--}}
        </div>
    </div>
</div>
