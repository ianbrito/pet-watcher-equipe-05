@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Ver Animal')

@section('content')
<div class="limiter-default">
    <div class="container-view100">
        <div class="wrap-view100">
            <span class="home100-form-title">
                Ver Animal
            </span>
            <div class="container-login100-form-btn">
                <h4><b>ID: </b>{{ $animal->id }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Nome: </b>{{ $animal->tipo_aquisicao }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>CPF: </b>{{ $animal->proprietario_id }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Telefone: </b>{{ $animal->nome }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>E-mail: </b>{{ $animal->microship }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->especie }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->data_nascimento }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->fase }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->porte }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->sexo }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->pedigree }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->codigo_pedigree }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $animal->origem_pedigree }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <form action="/animal">
                    <input type="submit" class="button-table-delete" value="Retornar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
