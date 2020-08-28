<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- scripts -->
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.bundle.js') }}"></script>
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <title>Consumindo Apis</title>
</head>
<body>
    <header>
        <div class="jumbotron bg-info text-center">
            <h2 class="text-white">Consumindo Api de Pokemons</h2>
        </div>
    </header>

    @yield('content')

    @yield('script')
</body>
</html>