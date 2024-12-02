<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
        <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Cv</th>
                <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($joins as $join)
                <tr>
                    <td>{{ $join->name }}</td>
                    <td>{{ $join->email }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($join->cv) }}" target="_blank" class="text-decoration-none">
                                <span>CV</span>
                            </a>
                        </div>
                    </td>
                    <td>{{ $join->message }}</td>

                    <td>
                        {!! Form::open(['route' => ['joins.destroy', $join->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('joins.show', [$join->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('joins.edit', [$join->id]) }}"
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
{{--            @include('adminlte-templates::common.paginate', ['records' => $joins])--}}
        </div>
    </div>
</div>
