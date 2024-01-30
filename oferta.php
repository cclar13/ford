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
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/o1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/o2.png" class="d-block w-100" alt="...">
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
    <div class="row text-danger">
      <div class="col-md-12">
        <h3 class="text-center mt-3 mb-3"> Selecione seu carro:</h3>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/novageracao.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ranger</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/mave.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maverick</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/suvsbronk.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bronco sport</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/minibus.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Transit Minibus</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/chassi.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Transit Chassi</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <div class="card text-danger">
          <img src="./img/pcarros/forgao.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Transit Furgão</h5>
            <a href=""data-bs-toggle="modal" data-bs-target="#compra" class="btn btn-danger">+</a>
          </div>
        </div>
      </div>
    </div>
    <h3 class="text-center mt-3 mb-3">Escolha abaixo suas ofertas:</h3>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="card text-danger">
          <img src="./img/mave.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <b><h5 class="card-title">Maverick</h5></b>
            <p>Lariat FX4 2.0L - 2023 (SGA3)</p>
            <p>----</p>
            <p>Valorização do seu Usado</p>
            <h6>Taxa 0% em 18x</h6>
            <p>Condição com Entrada mínima de 60% e saldo em 18x. Válido até 31/12/2023.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#proposta" class="btn btn-danger">Solicite a proposta</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="card text-danger">
          <img src="./img/minibus.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <b><h5 class="card-title ">MiniBus</h5></b>
            <p>Lariat FX4 2.0L - 2023 (SGA3)</p>
            <p>----</p>
            <p>Valorização do seu Usado</p>
            <h6>Taxa 0% em 12x</h6>
            <p>Condição com Entrada mínima de 60% e saldo em 12x. Válido até 31/12/2023.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#proposta" class="btn btn-danger">Solicite a proposta</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="card text-danger">
          <img src="./img/suvsbronk.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <b><h5 class="card-title"> Suv's Bronk</h5></b>
            <p>Lariat FX4 2.0L - 2023 (SGA3)</p>
            <p>----</p>
            <p>Valorização do seu Usado</p>
            <h6>Taxa 0% em 18x</h6>
            <p>Condição com Entrada mínima de 60% e saldo em 18x. Válido até 31/12/2023.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#proposta" class="btn btn-danger">Solicite a proposta</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="card text-danger">
          <img src="./img/chassi.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
           <b> <h5 class="card-title">Chassi</h5></b>
            <p>Lariat FX4 2.0L - 2023 (SGA3)</p>
            <p>----</p>
            <p>Valorização do seu Usado</p>
            <h6>Taxa 0% em 12x</h6>
            <p>Condição com Entrada mínima de 60% e saldo em 12x. Válido até 31/12/2023.</p>
            <a href="" data-bs-toggle="modal" data-bs-target="#proposta" class="btn btn-danger">Solicite a proposta</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="boxoferta mt-3">
        <h4>Não encontrou sua oferta ideal?
        </h4>
        <h6>Não se desespere,deixe seu contato que uma e selecione um modelo que quando surgir uma oferta entraremos em contato</h6>
        <select class="form-select selecte" aria-label="Default select example">
          <option selected>Selecione:</option>
          <option value="1">Ranger</option>
          <option value="2">Maverick</option>
          <option value="3">Minebus</option>
          <option value="4">Suv's</option>
        </select>
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
   

<!-- Modal de compra -->
<div class="modal fade" id="compra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Foi enviado ao seu e-mail a finalização para a conquista da sua oferta.</h4>
        <h6>Qualquer dúvida pode entrar em contato com a empresa</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-outline-danger">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de propsta -->
<div class="modal fade" id="proposta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Recebemos sua proposta.Aguarde em seu e-mail a conclusão da proposta e depois vá na Everlight mais proxima de você.</h4>
        <h6>Qualquer dúvida pode entrar em contato com a empresa</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-outline-danger">Salvar</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>