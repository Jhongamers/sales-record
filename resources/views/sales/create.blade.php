@extends('layouts.app')

@section('title','register seller')

@section('content')

    <div class="container mt-5">
        <h1> register your seller</h1>
    <hr>
    <form action="{{ route('seller-store') }}" method="post">
        @csrf
        <div class="form-group">
        <div class="form-group">
        <label for="name"> Name:  </label>
        <input type="text" class="form-control" name="name" placeholder="write your name">
    </div>
    <div class="form-group">
        <label for="email"> Name:  </label>
        <input type="text" class="form-control" name="email" placeholder="write your email">
    </div>
    <div class="form-group">
        <label for="email"> Select your user:  </label>
        <select name="user_type" class="form-select" aria-label="Default select example">
        <option selected>Please Select your user type</option>
         <option value="1">costumer</option>
         <option value="2">seller</option>
</select>
    </div>
    <div class="form-group">
        <label for="password"> Name:  </label>
        <input type="password" class="form-control" name="password">
    </div>
    <br>
    <div class="form-group">
        <button class="btn btn-primary"> Register </button>
    </div>
    </div>
</form>
</div>


@endsection
