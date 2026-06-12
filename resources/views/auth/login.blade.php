@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')

<section class="container-fluid aut-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="auth-card">

                    <div class="auth-header">
                        <div class="auth-brand">
                            <img src="{{asset('img/logo/filora-little.png')}}" class="img-fluid img-logo" alt="Logo de filora">
                        </div>
                        <h3 class="text-display">Bienvenido de nuevo</h3>
                        <p class="auth-subtitle">Inicia sesión en tu cuenta</p>
                    </div>

                    <div class="form-container">
                        <form action="/login" class="login-form" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label auth-label">Email</label>
                                <input type="email" name="email" class="form-control auth-input" placeholder="tucorreo@filora.com" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label auth-label">Contraseña</label>
                                <input type="password" name="password" class="form-control auth-input" placeholder="••••••••" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label auth-remember" for="remember">Recordarme</label>
                                </div>
                                <a href="/forgot-password" class="login-forgot">¿Olvidaste tu contraseña?</a>
                            </div>

                            <button type="submit" class="btn auth-btn w-100">Iniciar sesión</button>
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