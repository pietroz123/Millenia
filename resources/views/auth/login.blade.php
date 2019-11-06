@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="login-card">

    <div class="container">

        <h2 class="text-center mb-4">Login</h2>
        <p>Bem Vindo de Volta! Realize o login para acessar o sistema.</p>
        <p>
            Esqueceu sua senha? Clique 
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    aqui
                </a>
            @endif
        </p>

        <form method="POST" action="{{ route('login') }}" class="mt-5">
            @csrf
        
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Permanecer conectado
                    </label>
                </div>
            </div>
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-4 btn-block" style="padding: 0.5rem 1rem !important;">
                    Continuar
                </button>
            </div>
        
        </form>

    </div>
</div>

@endsection
