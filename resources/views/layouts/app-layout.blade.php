<!-- resources/views/layouts/app-layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    @vite('resources/js/app.js') <!-- Si estás utilizando Vite, agrega este código -->
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Barra de navegación o cualquier estructura común -->
    <nav class="bg-gray-800 text-white p-4">
        <a href="{{ route('dashboard') }}" class="font-bold">Dashboard</a>
        <!-- Agrega enlaces de navegación según lo necesites -->
    </nav>

    <!-- Contenido principal -->
    <main>
        {{ $slot }} <!-- Este es el lugar donde se inyectará el contenido de la vista que usa este layout -->
    </main>
</body>
</html>
