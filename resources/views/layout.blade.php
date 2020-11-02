<!DOCTYPE html>
<html>
<head>
     @yield('titulo-pagina')
    <meta charset="utf-8">
    <meta content="width=device=width, initial-scale=1.0" name="viewport">
    <title>Repro Power</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="{{('jumbotrom.css')}}">
    <title>Repro Power</title>

</head>

@yield('navbar')
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="welcome">Repro Power</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('mostrar.form')}}">Contactos<span class="sr-only">(actual)</span></a>
                </li>
               
                
                

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('onde.form')}}">Onde estamos<span class="sr-only">(actual)</span></a>
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('empresa.form')}}">Empresa<span class="sr-only">(actual)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('noticias.form')}}">Noticias<span class="sr-only">(actual)</span></a>
                </li>
                                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login.form')}}">Login<span class="sr-only">(actual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{('http://example.com')}}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver Mais</a>
                    <div class="dropdown-menu" aria-labelledy="dropdown01">
                        <a class="dropdown-item" href="turbos">Preparação Turbos</a>
                        <a class="dropdown-item" href="">Reprogramções de centralinas</a>
                        <a class="dropdown-item" href="">Linhas Escape</a>
                    </div>
                </li>
                </li>
            </ul>

        </div>
    </nav>

  

@yield('menupr')
    <main role="main">
        <div class="jumbotrom " >
            <div class="container u2" >
                <div class="container" align="center">
            <h1 class="display-3 " ><br><br></h1>
            <p style="color:white;" class="te"></p>
            <p><a class="" href="" target="blank"></a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Preparação Turbos</h2>
                    <p>Colocamos qualquer turbo!</p>
                    <p><a class="btn btn-secondary " href="turbos" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Reprogramções de centralinas</h2>
                    <p>Mlehoramos a performance do seu carro</p>
                    <p><a class="btn btn-secondary " href="marktingdig.html" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Linhas Escape</h2>
                    <p>Metemos o escape a seu gosto</p>
                    <p><a class="btn btn-secondary " href="design.html" role="button">Ver detalhes &raquo;</a></p>
                </div>



<br><br><br><br><br><br><br><br><br><br>

@yield('conteudo')


@yield('rodape')

<br>

<br><br>
    <footer class="container">
        <p>&copy;Repro Power 2020-2021</p>
    </footer>

    <script src="js/jquery.min.js" ></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>
