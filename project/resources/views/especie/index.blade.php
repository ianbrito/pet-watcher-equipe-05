@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Espécies')

@section('content')
    <div class="limiter-table">
        <div class="container-table100">
            <div class="container-button-table-page">
                <a href="{{ action('EspecieController@create') }}">
                    <button class="button-table-page">Cadastrar nova espécie</button>
                </a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead class="table100-head">
                            <tr>
                                <th scope="row" class="column_id">ID</th>
                                <th class="column-specie-name">Nome da espécie</th>
                                <th class="column-actions" colspan="3">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($especies as $especie)
                                <tr>
                                    <td class="column_id"><a>{{ $especie->id }}</a></td>
                                    <td class="column-specie-name"> {{ $especie->especie }} </td>
                                    <td>
                                        <form action="/especie/especie_{{ $especie->id }}">
                                            <input class="button-table-view" type="submit" value="Ver">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/especie/especie_{{ $especie->id }}/edit">
                                            <input class="button-table-edit" type="submit" value="Editar">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ action('EspecieController@destroy', $especie->id) }}" method="post"
                                              onsubmit="return confirm('Você deseja deletar este registro (&quot;{{ $especie->especie }}&quot;) do sistema?')">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <input class="button-table-delete" type="submit" value="Apagar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
