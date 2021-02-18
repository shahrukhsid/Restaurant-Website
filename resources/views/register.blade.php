@extends('layout')


@section('content')
<div >
<br>
<h1> User Register Page </h1>
<div class="col-sm-6">
<form method="post" action="register">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
    </div>
    <br>
    <div class="form-group">
    <label>email</label>
    <input type="text" name="email" class="form-control"  placeholder="Enter Email"> <br>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password"> <br>
    </div>
    <div class="form-group">
    <label>Contact No.</label>
    <input type="text" name="contact" class="form-control"  placeholder="Enter Contact.No#"> <br>
    </div>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@stop