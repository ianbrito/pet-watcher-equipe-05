@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="container-sm">
        <form action="{{ action('Auth\LoginController@login') }}" method="post">
        @csrf
            <div class="card" style="width: 400px; margin: auto; margin-top: 20px;">
                <div class="card-body">
                    <h3>login</h3>
                    <div class="mb-3" style="margin-top: 20px">
                        <label for="exampleInputPassword1" class="form-label">Login</label>
                        <input type="email" class="form-control" id="inputPassword1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputPassword1" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="login">
                </div>
            </div>
        </form>
    </div>

@endsection
