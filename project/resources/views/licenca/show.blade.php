@extends('layout')

@section('title', 'Ver Espécie')

@section('content')

<h3>Editar espécie</h1>

<p><b>ID: </b>{{ $especie->id }}</p>
<p><b>Nome da espécie: </b>{{ $especie->especie }}</p>

<a href="{{ action('EspecieController@index') }}">Retornar</a>

@endsection