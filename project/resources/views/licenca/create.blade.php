@extends('layout')

@section('title', 'Cadastrar Espécie')

@section('content')

<h3>Cadastrar nova espécie</h1>

<form action="{{ action('EspecieController@store') }}" method="post">
    @csrf
    <label for="especie">Nome da espécie: </label>
    <input type="text" name="especie" id="especie">
    <input type="submit" value="Cadastrar">
</form>

@endsection