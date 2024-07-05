<!DOCTYPE html>
<html>
<head>
    <title>{{ $vacante->titulo }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h1 { color: #636b6f; }
        p { font-size: 14px; }
    </style>
    @livewireStyles
</head>
<body>
    <h1 class="text-2xl">{{ $vacante->titulo }}</h1>
    <p><strong>Empresa:</strong> {{ $vacante->empresa }}</p>
    <p><strong>Salario:</strong> {{ $vacante->salario->salario }}</p>
    <p><strong>Categoría:</strong> {{ $vacante->categoria->categoria }}</p>
    <p><strong>Último día para aplicar:</strong> {{ $vacante->ultimo_dia}}</p>
    <p><strong>Descripción:</strong> {{ $vacante->descripcion }}</p>
    @if ($vacante->imagen)
    <div>
        <img src="{{ public_path('storage/vacantes/' . $vacante->imagen) }}" alt="{{ 'imagen vacante ' . $vacante->titulo }}" style="width: 100%; max-width: 300px;">
    </div>
@endif

    @livewireScripts
</body>
</html>
