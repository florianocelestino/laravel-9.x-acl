@extends('layouts.auth-master')
@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Iniciar Sessão</h1>
        @include('layouts.partials.messages')
        <div class="form-group form-floating mb-3">
            
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Informe o Nome" required="required" autofocus>
            <label for="floatingName">Email ou nome de Utilizador</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Informe a Palavra-Passe" required="required">
            <label for="floatingPassword">Palavra-Passe</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Entrar</button>
        <a class="text-primary text-decoration-none" href="{{url('/')}}">Ir na Página Inicial</a>
        @include('auth.partials.copy')
    </form>
@endsection