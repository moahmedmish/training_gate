<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name Ar</th>
                <th>Name En</th>
                <th>Logo</th>
                <th>Url</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name_ar }}</td>
                    <td>{{ $client->name_en }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($client->logo)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>{{ $client->url }}</td>

                    <td>
                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('clients.show', [$client->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('clients.edit', [$client->id]) }}"
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
{{--            @include('adminlte-templates::common.paginate', ['records' => $clients])--}}
        </div>
    </div>
</div>
