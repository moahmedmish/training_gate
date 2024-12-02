<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Recommended Dimensions</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photoSettings as $photoSetting)
                <tr>
                    <td>{{ $photoSetting->name }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{asset($photoSetting->image)}}" class="wh-40 rounded-3" alt="user">
                        </div>
                    </td>
                    <td>{{ $photoSetting->recommended_dimensions }}</td>
                    <td>
                        {!! Form::open(['route' => ['photo-settings.destroy', $photoSetting->id], 'method' => 'delete']) !!}

                        <div class="d-flex align-items-center gap-1">
                            <a href="{{ route('photo-settings.show', [$photoSetting->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                            </a>
                            <a href="{{ route('photo-settings.edit', [$photoSetting->id]) }}"
                               class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                            </a>
                        </div>
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
            {{--@include('adminlte-templates::common.paginate', ['records' => $photoSettings])--}}
        </div>
    </div>
</div>
