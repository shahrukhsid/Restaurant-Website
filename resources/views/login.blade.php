@extends('layout')


@section('content')
<div >
<br>
<h1> Login User </h1>
<div class="col-sm-6">
<form method="post" action="login">
@csrf
    <div class="form-group">
    <label>email</label>
    <input type="text" name="email" class="form-control"  placeholder="Enter Email"> <br>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password"> <br>
    </div>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@stop