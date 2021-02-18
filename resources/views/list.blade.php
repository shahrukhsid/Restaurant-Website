@extends('layout')


@section('content')

<h1> Restaurants List Page Is Here </h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
  
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th> Operations </th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
       <a href="delete/{{$item->id}}"> <i class="fa fa-trash"></i> 
       <a href="edit/{{$item->id}}"> <i class="fa fa-edit"></i> 

      </td>
    </tr>
    @endforeach

   
  </tbody>
</table>
@stop
