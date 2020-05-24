@extends('master')
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Customer</h3>
            </div>
            <div class="card-body">
                <form action="{{route('update.customer',['id'=>$customer->id])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            value="{{$customer->fullname}}" placeholder="Nguyen Van A">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$customer->phone}}"
                            placeholder="0987654321">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$customer->email}}"
                            placeholder="john.doe@example.com">
                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection