@extends('layout')

@section('title', 'Cadastrar Espécie')

@section('content')

<h3>Cadastrar nova espécie</h1>

<form action="{{ action('EspecieController@update', $especie->id) }}" method="post">
    @csrf
    {{ method_field('put') }}
    <label for="especie">Nome da espécie: </label>
    <input type="text" name="especie" id="especie" value="{{ $especie->especie }}">
    <input type="submit" value="Salvar alterações">
</form>

@endsection