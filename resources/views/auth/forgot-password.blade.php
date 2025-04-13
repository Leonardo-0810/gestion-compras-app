<x-guest-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow border-0 rounded-4 w-100" style="max-width: 480px;">
            
            <!-- Encabezado con degradado -->
            <div class="card-header text-white text-center rounded-top-4 px-4 py-4"
                 style="background: linear-gradient(135deg, #0d6efd, #6610f2);">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-2" style="font-size: 2rem;">🔑</div>
                    <h2 class="mb-1 fw-bold" style="font-size: 1.5rem;">Restablecer Contraseña</h2>
                    <small class="text-white-50">Gestión de Compras</small>
                </div>
            </div>

            <!-- Instrucciones -->
            <div class="card-body px-4 py-4 bg-white">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('¿Olvidaste tu contraseña? No te preocupes. Solo déjanos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña que te permitirá elegir una nueva.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Formulario -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Correo electrónico -->
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" name="email" type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <!-- Botón -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="submit" class="btn text-white px-4 shadow-sm"
                                style="background: linear-gradient(to right, #0d6efd, #6610f2); border: none;">
                            Enviar enlace para restablecer contraseña
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
