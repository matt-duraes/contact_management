
@props(
    [
        'tipo',
        'titulo',
        'texto',
        'link',
        'textoLink'
    ]
)

<div class="card_parceiro {{$tipo}}">
    <h1>
        {{$titulo}}
    </h1>
    <p>
        {{$texto}}
    </p>
    <a href="{{$link}}">
        {{$textoLink}}
    </a>
</div>

