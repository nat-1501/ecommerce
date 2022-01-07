<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatiShoes - Ecommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">NatiShoes</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{route('home')}}">Home</a>
                <a class="nav-link" href="{{route('categoria')}}">Categorias</a>
                <a class="nav-link" href="{{route('cadastrar')}}">Cadastrar</a>
                <a class="nav-link" href="{{route('pedidos')}}">Pedidos</a>
            </div>
        </div>

        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Busque aqui</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="" aria-label="Buscar">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>
        <a href="#" class="btn btn-sm"></a>
       <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>

        
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-2 mb-2">
                <div class="card">
                    <img src="{{ asset('imagens/01.jpg') }}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-title">Sapato Mocassim</h6>
                        <p class="card-text">R$69,90</p>
                        <a href="#" type="button" class="btn btn-outline-dark">Adicionar item</a>
                    </div>

                </div>
            </div>   
            
       
    </div>
</body>
</html>