@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Funcionarios')

@section('content')
<div class="limiter-table">
    <div class="container-table100">
        <div class="container-button-table-page">
            <a href="{{ action('FuncionarioController@create') }}">
                <button class="button-table-page">Cadastrar novo funcionario</button>
            </a>
        </div>
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead class="table100-head">
                        <tr>
                            <th scope="row" class="column_id">ID</th>
                            <th class="column_razao">Nome da Funcionario</th>
                            <th class="column_tel">Telefone</th>
                            <th class="column_email">E-mail</th>
                            <th class="column_address">Endereço</th>
                            <th class="column-actions" colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($funcionarios as $funcionario)
                        <tr>
                            <td class="column_id"><a>{{ $funcionario->id }}</a></td>
                            <td class="column_razao"> {{ $funcionario->nome }} </td>
                            <td class="column_tel"> {{ $funcionario->telefone }} </td>
                            <td class="column_email"> {{ $funcionario->email }} </td>
                            <td class="column_address"> {{ $funcionario->endereco }} </td>
                            <td>
                                <form action="/funcionario/{{ $funcionario->id }}">
                                    <input class="button-table-view" type="submit" value="Ver">
                                </form>
                            </td>
                            <td>
                                <form action="/funcionario/{{ $funcionario->id }}/edit">
                                    <input class="button-table-edit" type="submit" value="Editar">
                                </form>
                            </td>
                            <td>
                                @if(!$funcionario->deleted_at)
                                <form action="{{ action('FuncionarioController@destroy', $funcionario->id) }}" method="post" onsubmit="return confirm('Você deseja deletar este registro (&quot;{{ $funcionario->nome }}&quot;) do sistema?')">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <input class="button-table-delete" type="submit" value="DESATIVAR">
                                </form>
                                @else
                                <p>Funcionario desativado</p>

                                @endif
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
