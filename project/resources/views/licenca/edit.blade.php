@extends('layout')

@section('title', 'Editar Credenciada')

@section('content')
    <div class="container-sm">
        @if(Session::has('message'))
            <div class="container-md" style="margin-top:20px;">
                <div class="alert {{Session::get('type')}} alert-dismissible row-md" role="alert" id="liveAlert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible row-md" role="alert" id="liveAlert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">
                <div class="container-fluid" >
                    <label for="cnpj" class="form-label">Digite o CNPJ do estabelicimento: </label>
                    <form class="d-flex" action="{{ action('LicencaController@find') }}" method="post"
                          style="width: 100%">
                        @csrf
                        {{ method_field('put') }}

                        <input class="form-control me-2" type="search" placeholder="CNPJ" aria-label="Search"
                               name="cnpj" id="cnpj">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">
                <table class="table table-bordered align-middle">
                    @if(!empty($licencas))
                    <tr>
                        <th scope="row">id</th>
                        <th>Estabelecimento</th>
                        <th>Emissão</th>
                        <th>Validade</th>
                        <th>Status da Licença</th>
                    </tr>

                        @foreach($licencas as $licenca)
                            <tr>
                                <td> {{ $licenca->id }} </td>
                                <td> {{ $licenca->credenciada->razao_social }}</td>
                                <td> {{ $licenca->emissao }} </td>
                                <td> {{ $licenca->validade }} </td>
                                <td>
                                    @if($licenca->active ==1)
                                        <form action="{{ action('LicencaController@destroy', $licenca->id) }}"
                                              method="post"
                                              onsubmit="return confirm('Você deseja Revogar a Licença do sistema?')">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <input class="btn btn-primary" type="submit" value="Revogar Licença">
                                        </form>
                                    @else
                                        Licença revogada
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>

@endsection
