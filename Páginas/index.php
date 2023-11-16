<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="icon" href="\imagensprojeto/icons/icone.jpg" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Contatos</title>
    <!--Thiago Garcia Talarico e Maria Fernanda Ventura dos Santos Leite - grupo 3-->
    <!--Nat, tivemos bastante dificuldade em utilizar o figma, então a pagina ficou bem simples. Segue o link:
    https://www.figma.com/file/cUMfzI5XFgfYZAW3fQQFTc/Untitled?type=design&node-id=2%3A2&mode=design&t=VeyqfIf090Ngl5Gg-1
    ps: A paleta está como um arquivo html pois não conseguimos baixar a imagem. Abraços e boas férias!
    -->
</head>
<body>
        <header>
      <nav class="navbar navbar-expand-lg" style="background-color: #008f49;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/imagens/logonova.png" width = 200> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-5 mb-lg-0" style="color:white">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="novidades.php">Novidades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="quemsomos.php">Quem Somos</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
        </header>
    <section>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/imagens/slide1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/imagens/slide2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/imagens/slide3.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
