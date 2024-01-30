<?php
include_once("bd.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veiculos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;border:2px solid red">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./img/logo.png" alt="" width="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nvnv " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:black">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Veiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ofertas</a>
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="O que está a proucura?" aria-label="Search" style="border:1px solid red">
                    <button class="btn btn-outline-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="conatainer">
            <h2 class="text-center text-danger mt-4">VEÍCULOS FORD</h2>
        </div>
        <hr class="bg-danger">
        <div class="row">
            <h3 class="text-danger mt-5">Picapes</h3>
            <?php
            foreach ($veiculo as $itemveiculo) {
                $foto = $itemveiculo['foto'];
                $nome = $itemveiculo['nome'];
                $valor = $itemveiculo['preco'];
                if ($itemveiculo['tipo'] == 'p' && $itemveiculo['ativo'] == 'a' && $itemveiculo['veiculo'] == 'picape') {
            ?>
                    <div class="col-md-3 col-ms-6">
                        <div class="card" style="background-color:#F2F2F2;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nome ?></h5>
                                <img src="./img/pcarros/<?php echo $foto ?>" alt="" class="img-fluid" style="border: 1px solid red;">
                                <h4 class="mt-2"><?php echo $valor ?></h4>
                                <a href="#" class="btn btn-outline-danger">Comprar</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            };
            ?>
        </div>
        <hr>
        <div class="row mt-3">
            <h3 class="text-danger mt-5">SUV'S</h3>
            <?php
            foreach ($veiculo as $itemveiculo) {
                $foto = $itemveiculo['foto'];
                $nome = $itemveiculo['nome'];
                $valor = $itemveiculo['preco'];
                if ($itemveiculo['tipo'] == 'p' && $itemveiculo['ativo'] == 'a' && $itemveiculo['veiculo'] == 'suvs') {
            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="card"  style="background-color:#F2F2F2;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nome ?></h5>
                                <img src="./img/pcarros/<?php echo $foto ?>" alt="" class="img-fluid" style="border: 1px solid red;">
                                <h4 class="mt-2"><?php echo $valor ?></h4>
                                <a href="#" class="btn btn-outline-danger">Comprar</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            };
            ?>
        </div>
        <hr>
        <div class="row mt-3">
            <h3 class="text-danger mt-5">Peformace</h3>
            <?php
            foreach ($veiculo as $itemveiculo) {
                $foto = $itemveiculo['foto'];
                $nome = $itemveiculo['nome'];
                $valor = $itemveiculo['preco'];
                if ($itemveiculo['tipo'] == 'p' && $itemveiculo['ativo'] == 'a' && $itemveiculo['veiculo'] == 'peformace') {
            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="card"  style="background-color:#F2F2F2;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nome ?></h5>
                                <img src="./img/pcarros/<?php echo $foto ?>" alt="" class="img-fluid" style="border: 1px solid red;">
                                <h4 class="mt-2"><?php echo $valor ?></h4>
                                <a href="#" class="btn btn-outline-danger">Comprar</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            };
            ?>
        </div>
        <hr>
        <div class="row mt-3">
            <h3 class="text-danger mt-5">Comerciais</h3>
            <?php
            foreach ($veiculo as $itemveiculo) {
                $foto = $itemveiculo['foto'];
                $nome = $itemveiculo['nome'];
                $valor = $itemveiculo['preco'];
                if ($itemveiculo['tipo'] == 'p' && $itemveiculo['ativo'] == 'a' && $itemveiculo['veiculo'] == 'comerciais') {
            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="card"  style="background-color:#F2F2F2;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nome ?></h5>
                                <img src="./img/pcarros/<?php echo $foto ?>" alt="" class="img-fluid" style="border: 1px solid red;">
                                <h4 class="mt-2"><?php echo $valor ?></h4>
                                <a href="#" class="btn btn-outline-danger">Comprar</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            };
            ?>
        </div>
    </div>
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