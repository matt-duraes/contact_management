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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- JS -->
    <script src="/js/scripts.js"></script>
</head>
<body>
    <nav id="menu_site">
        <div class="bloco_logo">
            <a href="/">
                <img src="/img/hdcevents_logo.svg" alt="">
            </a>
        </div>
        <ul class="bloco_links_menu">
            <li>
                <a href="/events/create">Criar eventos</a>
            </li>
            <li>
                <a href="/">Eventos</a>
            </li>
            <li>
                <a href="/">Cadastrar</a>
            </li>
            <li>
                <a href="/">Entrar</a>
            </li>
        </ul>
    </nav>
    <div id="bloco_buscar"  style="background-image: url(/img/banner.jpg);">
        <div class="overlay_busca">
            <h1>Busque um evento</h1>
            <input type="text" name="buscar_evento" id="buscar_evento" placeholder="BUSCAR EVENTO">
        </div>
    </div>
    <main id="bloco_eventos">
        @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>
    <footer>
        <p>HDC Events &copy; 2033</p>
    </footer>
</body>
</html>