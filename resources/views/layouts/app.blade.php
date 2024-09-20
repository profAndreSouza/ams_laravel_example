<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="p-4">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Biblioteca Virtual</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Buscar</a></li>
            <li class="nav-item"><a href="{{ route('books.index') }}" class="nav-link {{ Route::is('books.index') ? 'active' : '' }}">Livros</a></li>
            <li class="nav-item"><a href="" class="nav-link">Categorias</a></li>
        </ul>
    </header>


    @yield('template')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>