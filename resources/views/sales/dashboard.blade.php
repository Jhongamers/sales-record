@extends('layouts.app')

@section('title','register seller')

@section('content')

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('seller-createproduct') }}">Create Product</a>
    </li>
  </ul></nav>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">costumer name</th>
      <th scope="col">form payment</th>
      <th scope="col">product name</th>
      <th scope="col">price</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
 
  </tbody>
</table>
@endsection('content')