@extends('layout')


@section('content')
<div class="col-sm-6">
<h1>Add a new Restaurant </h1>
<form method="post" action="add">
@csrf
  <div class="form-group">
    <br>
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Name"> <br>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter Email"><br>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"  placeholder="Enter Address">
    </div>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop