<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Categorias</h2>

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
        <ul>
            @foreach($listaCategoria as $cat)
                <li>{{ $cat->categoria }}</li>
            @endforeach    
        </ul>
    @endif
    
    @if(isset($lista) && count($lista) > 0 )
        <ul>
            @foreach($lista as $prod)
                <li>{{ $prod->nome }}</li>
            @endforeach
        </ul>    
    @endif        
</body>
</html>
