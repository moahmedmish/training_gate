<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title Ar</th>
{{--                <th>Video Url</th>--}}
                <th>Title En</th>
                <th>Summary Ar</th>
                <th>Summary En</th>
                <th>Publish</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                <tr>
{{--                    <td>{{ $slider->image }}</td>--}}
                    <td><img src="{{ $slider->image }}" width=50 /></td>
                    <td>{{ $slider->title_ar }}</td>
{{--                    <td>{{ $slider->video_url }}</td>--}}
                    <td>{{ $slider->title_en }}</td>
                    <td>{{ \Illuminate\Support\Str::words($slider->summary_ar, 5, ' ...') }}</td>
                    <td>{{ \Illuminate\Support\Str::words($slider->summary_en, 5, ' ...') }}</td>
                    <td>{{ $slider->publish }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('sliders.show', [$slider->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('sliders.edit', [$slider->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            {{--@include('adminlte-templates::common.paginate', ['records' => $sliders])--}}
        </div>
    </div>
</div>
