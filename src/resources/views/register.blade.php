@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row justify-content-center align-items-center" >
        <div class="col-md-4">
            <form action="register" method="POST">
            @csrf
                <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <a href="/login">Go back...</a>
        </div>
    </div>
</div>

@endsection
