<?php
include_once('bd.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVERLIGHT FROD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" &gt;>
</head>

<body class="text-danger">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="" width="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  flex-grow-1 " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-end">
                    <li class="nav-item">
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="O que está a proucura?" aria-label="Search" style="border:1px solid red;">
                    <button class="btn btn-outline-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- banner principal -->
    <div class="container-fluid">
        <div class="row">
            <?php
            foreach ($banner as $itembanner) {
                $foto = $itembanner['foto'];

                if ($itembanner['tipo'] == 'principal' && $itembanner['ativo'] == 'a') {
            ?>
                    <div class="col-md-12">
                        <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid w-100">
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div>
            <h2 class="text-center mt-5">
                Escolha um Ford para o seu estilo de vida
            </h2>
        </div>
        <div class="btnn mt-5">
            <a href="veiculo.php"><button class="btn btn-outline-danger ml-4"> VER MAIS VERSÕES > </button></a>
        </div>
        <div class="row">
            <?php
            foreach ($banner as $itembanner) {
                $foto = $itembanner['foto'];
                if ($itembanner['tipo'] == 'secundario' && $itembanner['ativo'] == 'a') {
            ?>
                    <div class="col-md-12">
                        <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid  w-100">
                    </div>
            <?php
                }
            };
            ?>
        </div>

        <div class="row content">
            <?php
            foreach ($banner as $itembanner) {
                $foto = $itembanner['foto'];
                if ($itembanner['tipo'] == 'oferta' && $itembanner['ativo'] == 'a') {
            ?>
                    <div class="col-md-12">
                        <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid w-100">
                        <h3 class="texto">Ofertas</h3>
                        <p class="text">Encontre a oferta ideal para adquirir
                            <br> seu novo ford
                        </p>
                        <a href="oferta.php"><button class="btnon btn btn-outline-light"> Ver Ofertas</button></a>
                    </div>
            <?php
                }
            };
            ?>
        </div>
        <div class="row mt-3 content">
            <?php
            foreach ($banner as $itembanner) {
                $foto = $itembanner['foto'];
                if ($itembanner['tipo'] == 'eletrificados' && $itembanner['ativo'] == 'a') {
            ?>
                    <div class="col-md-12">
                        <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid w-100">
                        <h3 class="texto">Eletrificados</h3>
                        <p class="text">Descubra como usurfruir de todas as
                            <br> qualidades de seu ford
                        </p>
                        <a href="eletrico.php"> <button class="btnon btn btn-outline-light" style="color:white;"> Saiba mais</button></a>
                    </div>
            <?php
                }
            };
            ?>
        </div>
        <div class="row mt-3 content">
            <?php
            foreach ($banner as $itembanner) {
                $foto = $itembanner['foto'];
                if ($itembanner['tipo'] == 'esperiencia' && $itembanner['ativo'] == 'a') {
            ?>
                    <div class="col-md-6">
                        <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid w-100 imgp">
                        <h3 class="textop">Minhas Everlight Ford
                            <br> Esperiencias
                        </h3>
                        <p class="textp">Harmonia,Tranqulidade <br> e Segurança</p>
                        <a href="esperiencia.php"> <button class="btnnp btn btn-outline-light">Conheça mais</button></a>
                    </div>
                    <!-- fim -->
                    <?php
                    foreach ($banner as $itembanner) {
                        $foto = $itembanner['foto'];
                        if ($itembanner['tipo'] == 'everlightgo' && $itembanner['ativo'] == 'a') {
                    ?>
                            <!-- fim -->
                            <div class="col-md-6">
                                <img src="./img/<?php echo $foto ?>" alt="" class="img-fluid imgpp w-100">
                                <h3 class="txpp">EVERLIGHT GO</h3>
                                <p class="tpp">Conheça planos com maior <br>segurança e suporte as <br> seus carros ford</p>
                                <a href="everlightgo.php"><button class="btx btn btn-outline-light">Conheça mais</button></a>
                            </div>
            <?php
                        }
                    }
                }
            };
            ?>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h3 class="mt-3">Conheça mais sobre a Everlight Ford</h3>
                <p class="mt-3">Saiba mais sobre historia e origem da ford e everlight ford.</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <div class="card">
                    <img src="./img/fordlogo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ford Motor Company</h5>
                        <p class="card-text">A Ford Motor Company foi fundada por Henry Ford, um visionário pioneiro na fabricação em massa de automóveis. Sua história remonta ao final do século XIX e início do século XX nos Estados Unidos. Aqui está um resumo da história de origem da Ford..</p>
                        <a href="" data-bs-toggle="modal" data-bs-target="#ford" class="btn btn-outline-danger">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <div class="card">
                    <img src="./img/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Everlight Ford </h5>
                        <p class="card-text">A história da "Everlight Ford" remonta ao final do século XX, quando dois amigos e engenheiros apaixonados por automóveis, Rafael Santos e Luiza Mendes, decidiram transformar sua paixão por carros em um empreendimento...</p>
                        <a href="" data-bs-toggle="modal" data-bs-target="#everlight" class="btn btn-outline-danger">Ler mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row text-center mt-3">
            <div class="col-md-12 ">
                <h4 class="frase" style="border: 1px solid red;">EVERLIGHT FORD É VIDA</h4>
            </div>
            <div class="col-md-12 ">
                <h4 class="frase" style="border: 1px solid red;">É ECOLOGIA</h4>
            </div>
            <div class="col-md-12 ">
                <h4 class="frase" style="border: 1px solid red;">É TECNOLOGIA</h4>
            </div>
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


    <!-- Modal -->
    <div class="modal fade" id="ford" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ford Motor Company</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>A Ford Motor Company foi fundada por Henry Ford, um visionário pioneiro na fabricação em massa de automóveis. Sua história remonta ao final do século XIX e início do século XX nos Estados Unidos. Aqui está um resumo da história de origem da Ford:

                        Em 1903, Henry Ford e um grupo de investidores fundaram a Ford Motor Company em Detroit, Michigan. Antes disso, Henry Ford havia trabalhado em várias empresas automotivas e adquirido conhecimento e experiência valiosos na área.

                        O grande avanço de Henry Ford foi a introdução do conceito de linha de montagem móvel, que revolucionou a fabricação de automóveis. Em 1913, a Ford Motor Company implementou com sucesso uma linha de montagem em série para produzir em massa o Modelo T, um dos primeiros carros acessíveis para a classe média nos Estados Unidos.

                        A produção em massa permitiu a produção eficiente e econômica de veículos, o que reduziu drasticamente os custos de produção e tornou os automóveis mais acessíveis para um público mais amplo. Isso também reduziu o tempo de fabricação de um carro de várias horas para apenas alguns minutos.

                        A Ford Model T tornou-se um fenômeno de sucesso e foi um dos fatores fundamentais para a popularização do automóvel. A visão de Henry Ford era tornar os carros acessíveis para as massas, e ele foi capaz de realizar isso através de sua inovação na linha de montagem e na produção em massa.

                        Ao longo dos anos, a Ford Motor Company continuou a crescer, expandir sua linha de veículos e desempenhar um papel significativo no desenvolvimento da indústria automobilística em todo o mundo.

                        A história da Ford é apenas um exemplo de como uma empresa automobilística pode ter surgido. Cada fabricante de automóveis tem sua própria jornada, marcada por inovações, desafios e contribuições únicas para a indústria automobilística.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-outline-danger">Salvar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="everlight" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Everlight Ford</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>A história da "Everlight Ford" remonta ao final do século XX, quando dois amigos e engenheiros apaixonados por automóveis, Rafael Santos e Luiza Mendes, decidiram transformar sua paixão por carros em um empreendimento inovador.

                        Rafael e Luiza se conheceram durante seus estudos de engenharia automotiva na Universidade de Tecnologia Avançada. Compartilhavam um interesse comum em tecnologias emergentes e uma visão de revolucionar a indústria automobilística por meio da integração de design de ponta e sustentabilidade.

                        Após anos de pesquisa e desenvolvimento, Rafael e Luiza fundaram a "Everlight Ford" em uma pequena garagem nos arredores da cidade. Seu objetivo era criar carros não apenas para atender às necessidades de mobilidade, mas também para minimizar o impacto ambiental e promover a segurança.

                        O foco principal da Everlight Ford era a inovação tecnológica. Eles investiram tempo e recursos em pesquisas avançadas de energias renováveis, desenvolvimento de baterias de alta eficiência e sistemas de propulsão eco-friendly.

                        O primeiro modelo, chamado de "EcoDrive", foi um carro compacto totalmente elétrico, projetado para ser acessível e prático para uso urbano. A equipe da Everlight Ford se esforçou para oferecer um veículo que não apenas proporcionasse desempenho, mas também reduzisse significativamente a pegada de carbono.

                        O lançamento do EcoDrive foi um marco para a empresa. Recebeu elogios pela sua engenharia inovadora, autonomia e design moderno. A atenção dada à segurança, juntamente com o compromisso ambiental, conquistou a confiança e a admiração dos consumidores.

                        Com o sucesso inicial, a InovaCar Motors continuou a expandir sua linha de modelos, lançando carros híbridos, veículos com tecnologia de condução autônoma e sistemas de segurança avançados.

                        Hoje, a "Everlight Ford" é reconhecida como uma das principais fabricantes de carros ecológicos e tecnologicamente avançados. Seu compromisso com a inovação sustentável e a visão de um futuro mais limpo e seguro para a mobilidade global continua a impulsionar a empresa para frente.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-outline-danger">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>