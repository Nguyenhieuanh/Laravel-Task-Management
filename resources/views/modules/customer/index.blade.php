@extends('master')
@section('content')
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Danh sách khách hàng</h1>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers ?? '' as $key => $customer)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$customer->fullname}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <a href="{{route('info.customer',['id'=>$customer->id])}}">Sửa</a>
                                | <a href="{{route('delete.customer',['id'=>$customer->id])}}">Xóa</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{route('form.add.customer')}}">Add customer</a>
            </div>
        </div>
    </div>
</div>
@endsection