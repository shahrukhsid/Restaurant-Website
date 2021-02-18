@extends('layout')


@section('content')
<div class="col-sm-6">
<h1>Edit Restaurant </h1>
<form method="post" action="/edit">
@csrf
  <div class="form-group">
    <br>
    <label>Name</label>
    <input type="hidden" name="id"  value="{{$data['id']}}" > <br>

    <input type="text" name="name" class="form-control" value="{{$data['name']}}"  placeholder="Enter Name"> <br>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{$data['email']}}"   placeholder="Enter Email"><br>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" value="{{$data['address']}}"   placeholder="Enter Address">
    </div>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop