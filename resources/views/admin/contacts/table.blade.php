<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
{{--                <th>Phone</th>--}}
{{--                <th>Subject</th>--}}
                <th>Message</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
{{--                    <td>{{ $contact->phone }}</td>--}}
{{--                    <td>{{ $contact->subject }}</td>--}}
                    <td>{{ $contact->message }}</td>

                    <td>
                        {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('contacts.show', [$contact->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('contacts.edit', [$contact->id]) }}"
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
{{--            @include('adminlte-templates::common.paginate', ['records' => $contacts])--}}
        </div>
    </div>
</div>
