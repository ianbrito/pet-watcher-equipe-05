@extends('layout')

@section('title', 'Login')

@section('content')

    @if(Session::has('message'))
        <div class="container-md" style="margin-top:20px;">
            <div class="alert {{Session::get('type')}} alert-dismissible row-md" role="alert" id="liveAlert">
                {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif



    <div class="container-md">
        <form action="{{ action('CredenciadaController@updatePassword',$user->id) }}" method="post">
            @csrf
            {{ method_field('put') }}
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h3>Trocar Senha de {{$credenciada->cnpj}}</h3>
                    <div class="mb-3" style="margin-top: 20px">
                        <label for="exampleInputPassword1" class="form-label">Senha atual</label>
                        <input type="password" class="form-control" id="inputPassword1" name="senha_atual">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Nova senha </label>
                        <input type="password" class="form-control" id="inputPassword1" name="senha_nova">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Alterar Senha">
                </div>
            </div>
        </form>
    </div>

@endsection
