@extends('layout')

@section('title', 'Espécies')

@section('content')
    <div class="container-sm">
        <a href="{{ action('EspecieController@create') }}">
            <button>Cadastrar nova espécie</button>
        </a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome da espécie</th>
                <th colspan="2">Ações</th>
            </tr>
            @foreach($especies as $especie)
                <tr>
                    <td><a href="/especie/especie_{{ $especie->id }}">{{ $especie->id }}</a></td>
                    <td> {{ $especie->especie }} </td>
                    <td><a href="/especie/especie_{{ $especie->id }}/edit">Editar</a></td>
                    <td>
                        <form action="{{ action('EspecieController@destroy', $especie->id) }}" method="post"
                              onsubmit="return confirm('Você deseja deletar este registro (&quot;{{ $especie->especie }}&quot;) do sistema?')">
                            @csrf
                            {{ method_field('delete') }}
                            <input type="submit" value="Apagar">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
