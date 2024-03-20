<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sigs Vasco')</title>
    <!-- Link para o arquivo de estilo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap');
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <img src="{{ asset('assets/img/logo-vasco.png') }}" alt="Logo do Vasco" width="90" height="110">
        <a class="navbar-brand" href="/">VASCO DA GAMA</a>
        <h2>Sistema Integrado de Gerenciamento de Sócios e Produtos da Loja do Vasco</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('socios') }}">Sócios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('planos') }}">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Sobre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container mt-n3">
        @yield('content')
    </div>
</body>
</html>
