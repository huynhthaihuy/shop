@extends('admin.main')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoaij</th>
                <th>Email</th>
                <th>Ngày Đặt Hàng</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->created_at}}</td>
                <td style="width: 100px">
                <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{$customer->id}}">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                onclick="removeRow({{ $customer->id }}, '/admin/customers/destroy')">
                <i class="fa fa-trash"></i>
                </a>
                </td>
                </tr>      
                @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
    {!! $customers->links() !!}
</div>
@endsection
