<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
{{--                <th>Path</th>--}}
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($settings as $setting)
                <tr>
                    <td>{{ $setting->name }}</td>
                    <td>{{ $setting->value }}</td>
{{--                    <td>{{ $setting->path }}</td>--}}
                    <td>
                        {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('settings.show', [$setting->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('settings.edit', [$setting->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                            </a>
{{--                            {!! Form::button('<i class="material-symbols-outlined fs-16 text-danger">delete</i>', [--}}
{{--                                'type' => 'submit',--}}
{{--                                'class' => 'ps-0 border-0 bg-transparent lh-1 position-relative top-2',--}}
{{--                                'onclick' => "return confirm('Are you sure you want to delete this?')"--}}
{{--                            ]) !!}--}}
{{--                        </div>--}}
{{--                        {!! Form::close() !!}--}}

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    <div class="card-footer clearfix">
        <div class="float-right">
{{--            @include('adminlte-templates::common.paginate', ['records' => $settings])--}}
        </div>
    </div>
</div>
