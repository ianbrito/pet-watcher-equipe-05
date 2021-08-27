@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Animal')

@section('content')
<div class="limiter-table">
    <div class="container-table100">
        <div class="container-button-table-page">
            <a href="{{ action('AnimalController@create') }}">
                <button class="button-table-page">Cadastrar novo animal</button>
            </a>
        </div>
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead class="table100-head">
                        <tr>
                            <th scope="row" class="column_id">ID</th>
                            <th class="column_razao">Nome do Animal</th>
                            <th class="column_tel">Especie do Animal</th>
                            <th class="column_email">Sexo do Animal</th>
                            <th class="column-actions" colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($animais as $animal)
                        <tr>
                            <td class="column_id"><a>{{ $animal->id }}</a></td>
                            <td class="column_razao"> {{ $animal->nome }} </td>
                            <td class="column_tel"> {{ $animal->especie }} </td>
                            <td class="column_email"> {{ $animal->sexo }} </td>
                            <td>
                                <form action="{{ action('AnimalController@show', $animal->id) }}">
                                    <input class="button-table-view" type="submit" value="Ver">
                                </form>
                            </td>
                            <td>
                                <form action="{{ action('AnimalController@edit', $animal->id) }}">
                                    <input class="button-table-edit" type="submit" value="Editar">
                                </form>
                            </td>
                            <td>
                                @if(!$animal->deleted_at)
                                <form action="{{ action('AnimalController@destroy', $animal->id) }}" method="post" onsubmit="return confirm('Você deseja deletar este registro (&quot;{{ $animal->nome }}&quot;) do sistema?')">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <input class="button-table-delete" type="submit" value="DESATIVAR">
                                </form>
                                @else
                                <p>Animal desativado</p>

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
