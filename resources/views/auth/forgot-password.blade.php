@extends('layouts.auth')

@section('title', 'Olvide mi Contraseña')

@section('content')

<section class="container-fluid auth-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4 col-md-6 col-sm 8">
                <div class="mb-2">
                    <a href="/login" class="auth-back">← Volver al login</a>
                </div>
                <div class="auth-card">
                    <div class="auth-header">
                        <div class="auth-brand">
                            <img src="{{asset('img/logo/filora-little.png')}}" class="img-fluid img-logo" alt="Logo de filora">
                        </div>
                        <h3 class="text-display">Olvide mi contraseña</h3>
                        <p class="auth-subtitle">¿has olvidado tu contraseña?</p>
                    </div>

                    <div class="form-container">
                        <form action="/reset-contrasena" class="login-form" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label auth-label">Email</label>
                                <input type="email" name="email" class="form-control auth-input" placeholder="tucorreo@filora.com">
                            </div>

                            <button type="button" class="btn auth-btn w-100">Enviar enlace</button>
                        </form>
                    </div>
                    <div class="auth-footer">
                        <p>
                            Filora v1.0 (Beta)
                        </p>
                        <span>Product of <a href="https://filora.akapellabs.com" target="_blank" class="link">Akapell Labs</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection