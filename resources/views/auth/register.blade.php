@extends('layouts.app')

@section('content')
<div class="container apple-style">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card apple-card">
                <div class="card-header apple-card-header">
                    <h1 class="apple-title">{{ __('Crea una cuenta') }}</h1>
                    <p class="apple-subtitle">{{ __('Únete a nuestra comunidad') }}</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="apple-form-group">
                            <label for="name" class="apple-label">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="apple-input @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   placeholder="Introduce tu nombre completo">
                            @error('name')
                                <span class="apple-error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="apple-form-group">
                            <label for="email" class="apple-label">{{ __('Dirección de correo electrónico') }}</label>
                            <input id="email" type="email" class="apple-input @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                   placeholder="Introduce tu correo electrónico">
                            @error('email')
                                <span class="apple-error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="apple-form-group">
                            <label for="password" class="apple-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="apple-input @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="new-password"
                                   placeholder="Crea una contraseña">
                            @error('password')
                                <span class="apple-error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="apple-form-group">
                            <label for="password-confirm" class="apple-label">{{ __('Confirmar contraseña') }}</label>
                            <input id="password-confirm" type="password" class="apple-input" 
                                   name="password_confirmation" required autocomplete="new-password"
                                   placeholder="Confirma tu contraseña">
                        </div>

                        <div class="apple-form-group">
                            <button type="submit" class="apple-button">
                                {{ __('Continuar') }}
                            </button>
                        </div>

                        <div class="apple-footer">
                            <p>{{ __('¿Ya tienes una cuenta?') }} <a href="{{ route('login') }}" class="apple-link">{{ __('Iniciar sesión') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Fuente similar a San Francisco (usar sistema o alternativa) */
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        background-color: #f5f5f7;
        color: #1d1d1f;
        line-height: 1.5;
        font-weight: 400;
    }

    .apple-style {
        max-width: 480px;
        padding-top: 2rem;
        padding-bottom: 4rem;
    }

    .apple-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        background: #ffffff;
    }

    .apple-card-header {
        background: transparent;
        border: none;
        padding: 2rem 2rem 1rem;
        text-align: center;
    }

    .apple-title {
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1d1d1f;
    }

    .apple-subtitle {
        font-size: 1rem;
        color: #86868b;
        margin-bottom: 0;
    }

    .apple-form-group {
        margin-bottom: 1.5rem;
        padding: 0 2rem;
    }

    .apple-label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #1d1d1f;
    }

    .apple-input {
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        border: 1px solid #d2d2d7;
        border-radius: 8px;
        background-color: #ffffff;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .apple-input:focus {
        border-color: #0071e3;
        box-shadow: 0 0 0 3px rgba(0, 125, 250, 0.1);
        outline: none;
    }

    .apple-input::placeholder {
        color: #86868b;
        opacity: 1;
    }

    .apple-error {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.8125rem;
        color: #ff3b30;
    }

    .apple-button {
        width: 100%;
        padding: 0.875rem;
        font-size: 1rem;
        font-weight: 500;
        color: #ffffff;
        background-color: #0071e3;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .apple-button:hover {
        background-color: #0077ed;
    }

    .apple-footer {
        text-align: center;
        padding: 1rem 2rem 2rem;
        font-size: 0.875rem;
        color: #86868b;
    }

    .apple-link {
        color: #0071e3;
        text-decoration: none;
        font-weight: 500;
    }

    .apple-link:hover {
        text-decoration: underline;
    }
</style>
@endsection