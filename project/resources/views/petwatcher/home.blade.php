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
        <img style="display: block; margin-left: auto; margin-right: auto; width: 40%;" src="/img/pet_watcher_logo.png">
    </div>
@endsection
