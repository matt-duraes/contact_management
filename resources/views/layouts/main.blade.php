<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="/js/scripts.js"></script>
</head>
<body>
    <nav id="menu">
        <ul id="menu_site">
            <li class="nav-item">
                <a class="nav-link" href="{{route('contato.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="{{route('contato.create')}}">Novo Contato</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="/dashboard">Edite e Delete contatos</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registar</a>
                </li>
            @endguest
        </ul>
    </nav>
    <main id="bloco_eventos">
        @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>
    <footer>
        <p>Matt &copy; 2024</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>