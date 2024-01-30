<?php
include_once('bd.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> OFERTAS EVERLIGHT FROD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" &gt;>
</head>

<body class="text-danger">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="" width="70px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  navbar-collapse flex-grow-0" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-end  text-danger">
          <li class="nav-item  text-danger">
            <a class="nav-link active" aria-current="page" href="veiculo.php">Veiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="oferta.php">Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Comprar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Serviços</a>
          </li>
          <li class="nav-item">

            <a class="nav-link active" aria-disabled="true" href="login.php">Iniciar sessão</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/e3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3">
          <h3 class="text-center text-danger"><b>O compromisso Everlight Ford com a Eletrificação para Minas Gerais</b></h3>
        </div>
        <div>
          <p class="text-center mt-3">Ao pensar em eletrificação, não estamos apenas imaginando como será o amanhã, estamos construindo o futuro da mobilidade! Por isso, para integrar o portfólio de veículos conectados e altamente tecnológicos que a Everlight Ford já oferece, anunciamos a chegada de três produtos que trazem tecnologia e eletrificação para nossa região em 2023, sendo um em cada segmento:</p>
        </div>
      </div>
      <div class="container">
        <div class="row ">
          <div class="col-md-4">
            <div class="card ttc text-danger">
              <img src="./img/eletrificacao/mustang.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mustang Mach-E</h5>
                <p class="card-text">Primeiro SUV totalmente elétrico da Ford, o Mach-E já é sucesso de vendas nos EUA aliando tecnologia, conectividade, o espírito de liberdade do Mustang e um design incomparável.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card ttc text-danger">
              <img src="./img/eletrificacao/mave.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Maverick Hybrid</h5>
                <p class="card-text">Primeira picape híbrida do Brasil, com tecnologia avançada e muita performance.Com muito mais novidade que você perde se não tiver a experiência</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card ttc text-danger">
              <img src="./img/eletrificacao/minibus.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">E-Transit</h5>
                <p class="card-text">Versão elétrica do ícone mundial em veículos comerciais chegará a Minas Gerais para um programa de testes com grandes frotistas em centros urbanos.</p>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center text-dange mt-4 mb-4r">E nosso compromisso com a eletrificação não para por aqui. Os mais de 1.500 profissionais do Centro de Desenvolvimento e Tecnologia da Ford no Brasil também estão na linha de frente do desenvolvimento dos futuros veículos elétricos da marca! Por isso, seja qual for sua necessidade, trabalhar ou se divertir, você poderá escolher o Ford elétrico ideal para você!</p>
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="./img/banner19.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2>Surpreenda-se com o Mustang Mach-E 100% elétrico</h2>
            <h5>Chegou a versão 100% elétrica de um ícone da Ford: o Mustang Mach-E. Descubra, em primeira mão, cada detalhe do SUV que é sucesso de vendas no Estados Unidos e representa um marco na construção do futuro dos veículos eletrificados. </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h2 class="mt-5">Conheça a primeira picape híbrida do Brasil</h2>
            <h5>Mais uma integrante da família raça forte: Maverick Hybrid. Além de todo o conforto e versatilidade, a primeira picape híbrida do Brasil vem equipada com motor 2.5L Atkinson e transmissão automática eCVT, entregando uma autonomia que pode passar dos 800km e mais dinamismo para a sua rotina.</h5>
          </div>
          <div class="col-md-6">
            <img src="./img/mama.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <img src="./img/4.png" alt="" class="img-fluid mt-4" style="border: 1px red;">
      </div>
      <div class="text-center  mt-5">
        <h2><b>Investindo no futuro da Eletrificação</b></h2>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card text-danger">
              <img src="./img/car.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Compromisso
                  Ford com a
                  Descarbonização</h5>
                  <a href="#" class="btn btn-outline-danger ">Saber mais</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-danger">
              <img src="./img/renovavel.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Uso de energia
                  renovável
                </h5>
                <a href="#" class="btn btn-outline-danger mt-4">Saber mais</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-danger">
              <img src="./img/dados.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A estratégia para
                  a Eletrificação
                </h5>
                <a href="#" class="btn btn-outline-danger mt-4">Saber mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ofertas de carro -->
      <footer class="mt-5">
        <div class="container-footer">
          <div class="row-footer">
            <!-- col-comeco -->
            <div class="footer-col">
              <h4>Explore</h4>
              <ul>
                <li><a href="index.php">Veiculos</a></li>
                <li><a href="index.php">Ofertas</a></li>
                <li><a href="index.php">Comprar</a></li>
                <li><a href="index.php">Serviços</a></li>
              </ul>
            </div>
            <!-- col-fim -->
            <div class="footer-col">
              <h4>Contato</h4>
              <ul>
                <li><a href="index.php">Gov.Valadares , Rua Ivalia Rodrigo , 123º</a></li>
                <li><a href="index.php">+55 (33) 9853-3534</a></li>
                <li><a href="index.php">everlightford.hotmail.com</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Termos</h4>
              <ul>
                <li><a href="index.php">Veiculos</a></li>
                <li><a href="index.php">Ofertas</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Receber mais ofertas</h4>
              <!-- form -->
              <div class="form-sub">
                <form action="">
                  <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                  <button> Enviar</button>
                </form>
              </div>
              <!-- form -->
              <div class="medias-socias">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
            <div class="footer-col">
              <p>© 2023 Everlight ford</p>
            </div>
          </div>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>