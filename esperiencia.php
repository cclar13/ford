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
  <div class="container">
    <h1 class="text-danger text-center"><b>Minhas Experiências com Everlight Ford</b></h1>
    <p class="text-danger text-center">Novo pacote de experiências desenhadas pela Ford especialmente para você - Conectividade, Conveniência e Personalização como você nunca viu.</p>
    <div class="mt-4">
      <h2 class="text-center text-danger"><b>Minhas Experiências Conectadas</b></h2>
      <div class="row mt-4">
        <div class="col-md-6">
          <img src="./img/experiencia/1.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-12">
          <h3 class=" text-danger"><b>Everlight Connect</b></h3>
          <h5 class="mt-2">Com o app FordPass, você poderá interagir com seu veículo de onde estiver. É possível travar e destravar as portas, dar a partida no veículo acionando o ar-condicionado, receber alertas, verificar dados do veículo, como pressão dos pneus, nível do combustível, assim como outras funções que trarão a você Conveniência e Personalização.</h5>
        </div>
        <h2 class="text-center text-danger mt-4"><b>Minhas Experiências Convenientes
          </b></h2>
        <div class="col-md-6 mt-4 boxxgo  col-sm-12">
          <h3 class=" text-danger"><b>Agendamento Online de Serviços</b></h3>
          <h5 class="mt-2">Por meio do app FordPass ou do site da Ford, você pode agendar serviços para o dia e horário que melhor lhe convém, escolhendo a concessionária e o consultor de sua preferência. Além disso, você terá acesso a todos os itens incluídos no serviço e aos preços, com transparência, praticidade e conveniência. Baixe o FordPass e agende seu serviço 100% online.</h5>
        </div>
        <div class="col-md-6  col-sm-12  mt-4">
          <img src="./img/experiencia/banner15.jpeg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6  col-sm-12  mt-4">
          <img src="./img/experiencia/2.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6  col-sm-12 mt-4">
          <h3 class=" text-danger"><b>Serviço Leva e Traz</b></h3>
          <h5 class="mt-2">Conte com a Ford para otimizar o seu tempo através do Serviço Leva e Traz: após o agendamento do serviço online, retiramos o veículo em sua casa ou escritório (até 30km) e o devolvemos após a conclusão do serviço1. Através do app FordPass, você será informado de todas as etapas do processo.</h5>
        </div>
        <div>
          <h2 class="text-center text-danger mt-4"><b>Minhas Experiências Personalizadas</b></h2>
        </div>
        <div class="col-md-6  col-sm-12 mt-4 boxxgo">
          <h3 class=" text-danger"><b>Benefícios</b></h3>
          <h5 class="mt-4">Quem tem Ford tem mais do que um carro, tem conectividade, conveniência e vantagens exclusivas. <br>Descubra uma variedade de benefícios e experiências personalizadas, tudo dentro do FordPass.</h5>
        </div>
        <div class="col-md-6  col-sm-12  mt-4">
          <img src="./img/experiencia/3.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6  col-sm-12 mt-4">
          <img src="./img/experiencia/4.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6  mt-4">
          <h3 class=" text-danger"><b>Everlight Expert</b></h3>
          <h5 class="mt-2">Agora você tem um especialista altamente capacitado para te auxiliar em todas as possíveis dúvidas sobre as funcionalidades e equipamentos da sua Ranger ou do seu Mustang Mach-E. Conte com um atendimento personalizado para aproveitar ao máximo a experiência com a sua picape Raça Forte ou também com o único elétrico que também é um Mustang. Escolha o seu modelo e fale com um especialista através do WhatsApp.</h5>
        </div>

      </div>
    </div>
  </div>
  <!-- selecionar o carro -->
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