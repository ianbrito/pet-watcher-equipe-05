@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Ver Espécie')

@section('content')
<div class="limiter-default">
    <div class="container-view100">
        <div class="wrap-view100">
            <span class="home100-form-title">
                Ver espécie
            </span>
            <div class="container-login100-form-btn">
                <h4><b>ID: </b>{{ $especie->id }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <h4><b>Nome da espécie: </b>{{ $especie->especie }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <form action="/especie">
                    <input type="submit" class="button-table-delete" value="Retornar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
