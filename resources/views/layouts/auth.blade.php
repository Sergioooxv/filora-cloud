<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Batang&display=swap" rel="stylesheet">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>Filora — @yield('title')</title>
</head>
<body class="auth-body">

    <div class="auth-wrapper">
        @yield('content')
    </div>

</body>
</html>