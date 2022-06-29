@extends('admin.main')
@section('content')
    <div class="card card-primary">
    <form action="" method="POST">
      <div class="card-body">
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
          </div>

          <div class="form-group">
            <label>Đường Dẫn </label>
            <input type="text" name="url" class="form-control" value="{{old('url')}}">
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file" name="thumb"  class="form-control" id="upload">
        </div>

        <div class="form-group">
            <label for="menu">Sắp xếp</label>
            <input type="number" name="sort_by" value="1"  class="form-control" >
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm Slider</button>
      </div>
      @csrf
    </form>
  </div>
@endsection