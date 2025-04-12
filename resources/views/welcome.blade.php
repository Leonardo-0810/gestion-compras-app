<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Compras</title>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

 
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #f8f9fa;
        }
        .hero {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
            color: white;
            padding: 80px 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

  
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Gestión de Compras</a>

            @if (Route::has('login'))
                <div class="ms-auto">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary me-2">Iniciar sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    
    <div class="container my-5">
        <div class="hero text-center">
            <h1 class="display-4">Bienvenido al Sistema de Gestión</h1>
            <p class="lead">Administra fácilmente proveedores, productos y órdenes de compra desde un solo lugar.</p>
            @guest
                <a href="{{ route('login') }}" class="btn btn-light btn-lg mt-3">Comenzar</a>
            @endguest
        </div>
    </div>

   
    <footer class="text-center mt-auto py-4 text-muted">
        <small>&copy; {{ date('Y') }} Sistema de Gestión de Compras. Todos los derechos reservados.</small>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
