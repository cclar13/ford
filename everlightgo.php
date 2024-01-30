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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/banner12/banner12.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/banner12/banner13.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/banner12/banner14.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <h2 class="text-center text-danger mt-4"><b>A FORMA MAIS PRÁTICA
        DE CONQUISTAR SEU FORD.</b></h2>
    <p class="text-center text-danger mt-4"><b>Tenha sempre um Everlight Ford 0Km na garagem sem se preocupar com taxas e burocracia. Você dirige, a Everlight Ford cuida.</b></p>
    <div class="row mt-5">
      <div class="col-md-2  col-sm-4">
        <div class="card mb-3 text-danger">
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined" widht='40px'>
                clinical_notes
              </span></h5>
            <p class="card-text">IPVA, impostos, documentação, emplacamento, revisões e manutenção inclusos.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger">Quero</a>
          </div>
        </div>
      </div>
      <div class="col-md-2  col-sm-4">
        <div class="card mb-3 text-danger">
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined">
                directions_car
              </span></h5>
            <p class="card-text">Ford 0km disponível por um valor mensal, sem necessidade de investimento inicial.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger mt-5">Quero</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card mb-3 text-danger">
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined">
                timer
              </span></h5>
            <p class="card-text">Assistência 24h com proteção contra roubo, furto incêndio, colisão e direito a veículo reserva.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger">Quero</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card mb-3 text-danger">
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined">
                feed
              </span></h5>
            <p class="card-text">Planos a partir de um ano que se adequam às suas necessidades.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger" style="margin-top: 45%;">Quero</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card mb-3 text-danger">
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined">
                language_us
              </span></h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger" style="margin-top: 30%;">Quero</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card mb-3 text-danger" >
          <div class="card-body">
            <h5 class="card-title"><span class="material-symbols-outlined">
                loyalty
              </span></h5>
            <p class="card-text">Benefícios com Veloe para evitar filas em pedágios e estacionamentos.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#everlightgo" class="btn btn-outline-danger mt-5">Quero</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row boxgo">
      <h2 class="text-center text-danger"><b>COMO FUNCIONA?</b></h2>
      <div class="col-md-4">
        <h1>1</h1>
        <p>----</p>
        <h5>Escolha o plano e o veículo que deseja assinar.</h5>
      </div>
      <div class="col-md-4">
        <h1>2</h1>
        <p>----</p>
        <h5>Faça a contratação 100% on-line ou fale com um vendedor Ford.</h5>
      </div>
      <div class="col-md-4">
        <h1>3</h1>
        <p>----</p>
        <h5>Receba seu Ford 0Km em cerca de 45 dias após aprovação do pedido e nós cuidamos do resto.</h5>
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

<!-- Modal -->
<div class="modal fade" id="everlightgo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Recebemos  seu 'Quero' mandaremos no seu e-mail mais infomações sobre.</h4>
        <input type="text" name="emailford" placeholder="Email">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-outline-danger">Salvar</button>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>