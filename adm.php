<?php
session_start();
include('bd.php');

if (isset($_SESSION['emai'])) {
    $email = $_SESSION['email'];
} else {
    $email = '';
}
;

if (isset($_SESSION['senha'])) {
    $senha = $_SESSION['senha'];
} else {
    $senha = '';
}
;


if ($senha == 1) {
    $senha = "ADM $email";
} elseif ($senha == 2) {
    $senha = "Úsuario $email";
} elseif ($senha == 3) {
    $senha = "Cliente $email";
}
;
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVERLIGHT FROD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary" style="border:1px solid black">
        <div class="container-fluid">
            <a class="navbar-brand" href="adm.php?page=index">
                <img src="./img/icon.png" alt="" width="60px">
                <?php echo $senha;?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title text-danger" id="offcanvasNavbarLabel">Menu</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="veiculo.php">Veiculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Comprar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Limpeza</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Troca de peças</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Verificação no motor</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Qual registo deseja?"
                            aria-label="Search" style="border:1px solid red">
                        <button class="btn btn-outline-danger" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-md-2 <?php
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'index') {
                    echo 'd-none';
                }
                ;
            }
            ?> text-dark" style="border: 2px solid black;">
                <ul>
                    <li>
                        <a href="http://">
                            <div class="h5 pb-2 mb-4 text-dark border-bottom border-dark">
                                #PAINEL
                            </div>
                        </a>
                    </li>
                    <li class="m-5">
                        <a href="adm.php?page=produto" class="nav-link align-middle px-0">
                            Produto</a>
                    </li>
                </ul>
            </div>
            <div class=" <?php if (isset($_GET['page']) && !empty($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'index') {
                    echo 'col-md-12 "';
                } else {
                    echo 'col-md-10 " ';
                }
                ;
            } ?>
                <?php
                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 'produto') {
                        include_once 'produto.php';
                    } else if ($page == 'veiculo') {
                        include_once 'veiculo.php';
                    } else if ($page == 'text') {
                        include_once 'text.php';
                    } else if ($page == 'index') {
                        include_once 'index.php';
                    }
                } else {
                    echo '<h3 >BOM DIA</h3>';
                }
                ;
                ?>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous">
                </script>
</body>

</html>