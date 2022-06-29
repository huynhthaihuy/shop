@extends('admin.main')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Danh Mục</th>
                <th>Giá Gốc</th>
                <th>Giá Khuyến Mãi</th>
                <th>Active</th>
                <th>Update</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->menu->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->price_sale}}</td>
                <td>{!! \App\Helpers\Helper::active($product->active) !!}</td>
                <td>{{$product->updated_at}}</td>
                <td style="width: 100px">
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{$product->id}}">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                onclick="removeRow({{ $product->id }}, '/admin/products/destroy')">
                <i class="fa fa-trash"></i>
                </a>
                </td>
                </tr>      
                @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
    {!! $products->links() !!}
</div>
@endsection
