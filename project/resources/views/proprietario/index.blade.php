@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Proprietarios')

@section('content')
<div class="limiter-table">
    <div class="container-table100">
        <div class="container-button-table-page">
            <a href="{{ action('ProprietarioController@create') }}">
                <button class="button-table-page">Cadastrar novo Proprietario</button>
            </a>
        </div>
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead class="table100-head">
                        <tr>
                            <th scope="row" class="column_id">ID</th>
                            <th class="column-specie-name">Nome da Proprietario</th>
                            <th class="column-specie-name">Telefone da Proprietario</th>
                            <th class="column-specie-name">Email da Proprietario</th>
                            <th class="column-actions" colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proprietarios as $proprietario)
                        <tr>
                            <td class="column_id"><a>{{ $proprietario->id }}</a></td>
                            <td class="column-specie-name"> {{ $proprietario->nome }} </td>
                            <td class="column-specie-name"> {{ $proprietario->telefone }} </td>
                            <td class="column-specie-name"> {{ $proprietario->email }} </td>
                            <td>
                                <form action="/proprietario/{{ $proprietario->id }}/info">
                                    <input class="button-table-view" type="submit" value="Ver">
                                </form>
                            </td>
                            <td>
                                <form action="/proprietario/edit/{{ $proprietario->id }}">
                                    <input class="button-table-edit" type="submit" value="Editar">
                                </form>
                            </td>
                            <td>
                                <form action="{{ action('ProprietarioController@destroy', $proprietario->id) }}" method="post" onsubmit="return confirm('Você deseja deletar este registro (&quot;{{ $proprietario->nome }}&quot;) do sistema?')">
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
