@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Painel de Controlo</h1>
        <p class="lead">Somente utilizadores autenticados têm acesso a essa página</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">Clique aqui para veres mais informações</a>
        @endauth
        @guest
        <h1>Portal Público</h1>
        <p class="lead">Página inicial de acesso público. Inicie sessão para ter acesso a área restrita</p>
        @endguest
    </div>
@endsection