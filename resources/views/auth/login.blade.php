<x-guest-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow border-0 rounded-4 w-100" style="max-width: 480px;">
            
            <!-- Encabezado con degradado -->
            <div class="card-header text-white text-center rounded-top-4 py-4"
                 style="background: linear-gradient(135deg, #0d6efd, #6610f2);">
                <h4 class="mb-1 fw-semibold">Iniciar sesión</h4>
                <p class="mb-0 small">Gestión de Compras</p>
            </div>

            <!-- Cuerpo del formulario -->
            <div class="card-body px-4 py-4 bg-white">
                <!-- Mensaje de estado -->
                @if (session('status'))
                    <div class="alert alert-success small mb-3">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <style>
                        .form-label {
                            display: block;
                            margin-bottom: 0.25rem;
                            font-weight: 500;
                        }
                        .form-control {
                            display: block;
                            width: 100%;
                            margin-bottom: 1rem;
                        }
                    </style>

                    <!-- Correo -->
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" name="email" type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror

                    <!-- Contraseña -->
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" name="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror

                    <!-- Recordarme -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                        <label class="form-check-label small text-muted" for="remember_me">
                            {{ __('Recuérdame') }}
                        </label>
                    </div>

                    <!-- Enlace y botón -->
                    <div class="d-flex justify-content-between align-items-center">
                        @if (Route::has('password.request'))
                            <a class="small text-muted text-decoration-none" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif

                        <button type="submit" class="btn text-white px-4 shadow-sm"
                                style="background: linear-gradient(to right, #0d6efd, #6610f2); border: none;">
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
