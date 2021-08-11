@extends('layout')

@section('title', 'Início')

@section('content')
    <div class="container-md">
        @if(!empty(($message ?? '')))
            <div class="container-md" style="margin-top:20px;">
                <div class="alert {{$message_type}} alert-dismissible row-md" role="alert" id="liveAlert">
                    <strong>Alerta!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <h1>Seja bem vindo(a) ao Pet Watcher da Equipe 05!</h1>
    </div>
@endsection
