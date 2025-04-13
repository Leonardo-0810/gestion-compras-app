<x-guest-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow border-0 rounded-4 w-100" style="max-width: 480px;">
            
            <!-- Encabezado con degradado -->
            <div class="card-header text-white text-center rounded-top-4 py-4"
                 style="background: linear-gradient(135deg, #0d6efd, #6610f2);">
                <h4 class="mb-1 fw-semibold">Crear una cuenta</h4>
                <p class="mb-0 small">Gestión de Compras</p>
            </div>

            <!-- Formulario -->
            <div class="card-body px-4 py-4 bg-white">
                <form method="POST" action="{{ route('register') }}">
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

                    <!-- Nombre -->
                    <label for="name" class="form-label">{{ __('Nombre completo') }}</label>
                    <input id="name" name="name" type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <!-- Correo electrónico -->
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" name="email" type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <!-- Contraseña -->
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" name="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <!-- Confirmar contraseña -->
                    <label for="password_confirmation" class="form-label">{{ __('Confirmar contraseña') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                           class="form-control" required>

                    <!-- Botón y enlace -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <a href="{{ route('login') }}" class="small text-muted text-decoration-none">
                            ¿Ya tienes una cuenta?
                        </a>
                        <button type="submit" class="btn text-white px-4 shadow-sm"
                                style="background: linear-gradient(to right, #0d6efd, #6610f2); border: none;">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
