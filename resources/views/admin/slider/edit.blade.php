@extends('admin.main')
@section('content')
    <div class="card card-primary">
    <form action="" method="POST">
      <div class="card-body">
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" name="name" class="form-control" value="{{$slider->name}}">
          </div>

          <div class="form-group">
            <label>Đường Dẫn </label>
            <input type="text" name="url" class="form-control" value="{{$slider->url}}">
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file"  class="form-control" id="upload">
            <div>
                <a href="{{ asset('/storage/uploads/'.$slider->thumb) }}" target="_blank">
                    <img src="{{ asset('/storage/uploads/'.$slider->thumb) }}" width="100px">
                </a>
            </div>
            <input type="hidden" name="thumb" value="{{ $slider->thumb }}" id="thumb">
        </div>

        <div class="form-group">
            <label for="menu">Sắp xếp</label>
            <input type="number" name="sort_by" value="{{$slider->sort_by}}"  class="form-control" >
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" {{$slider->active == 1 ? 'checked=""' : ''}}>
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="active" name="active" {{$slider->active == 0 ? 'checked=""' : ''}}>
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập Nhật Slider</button>
      </div>
      @csrf
    </form>
  </div>
@endsection