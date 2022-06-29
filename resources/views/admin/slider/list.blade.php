@extends('admin.main')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                <th>Đường Dẫn</th>
                <th>Ảnh</th>
                <th>Trạng Thái</th>
                <th>Cập Nhật</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $key => $slider)
            <tr>
                <td>{{$slider->id}}</td>
                <td>{{$slider->name}}</td>
                <td><a href="{{$slider->url}}">{{$slider->url}}</a></td>
                <td>
                <a href="{{ asset('/storage/uploads/'.$slider->thumb) }}" target="_blank">
                    <img src="{{ asset('/storage/uploads/'.$slider->thumb) }}" height="40px">
                </a>
                </td>
                <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                <td>{{$slider->updated_at}}</td>
                <td style="width: 100px">
                <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{$slider->id}}">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                onclick="removeRow({{ $slider->id }}, '/admin/sliders/destroy')">
                <i class="fa fa-trash"></i>
                </a>
                </td>
                </tr>      
                @endforeach
        </tbody>
    </table>

    {!! $sliders->links() !!}
@endsection
