@extends('layouts.app')


@section('title','login')

@section('content')
<div class="container mt-5">
        <h1>write your login</h1>
    <hr>
    <form action="{{ route('seller-login') }}" method="post">
        @csrf
    <div class="form-group">
        <label for="email"> email:  </label>
        <input type="text" class="form-control" name="email" placeholder="write your email">
    </div>
    <div class="form-group">
        <label for="password"> Password:  </label>
        <input type="password" class="form-control" name="password">
    </div>
    <br>
    <div class="form-group">
        <button class="btn btn-primary"> login </button>
    </div>
    </div>
</form>
</div>







@endsection