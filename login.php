
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login pagina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bodylogin">
    <div class="container">
       <div class="box">
       <div class="row">
            <div class="col-md-6 text-white text-center">
                <img src="./img/imgmst.png" alt="imglogin" class="mt-4">
                <h3>EVERLIGHT FORD</h3>
                <p>A melhor locadora de carros no Brail</p>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <img src="./img/icon.png" alt="" width="70px" style="margin-left: 44%;">
                    <div class="card-body">
                        <form action="senha.php" method="post" name="frmlogin">
                            <h4 class="text-center text-white">Digite suas informações:</h4>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"  name="senha">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Salvar Senha</label>
                            </div>
                            <button type="submit" class="btn btn-outline-light">Acessar</button>
                        </form>
                    </div>
                    <h3 class="card-header text-center bg-dark text-white mt-5" style="box-shadow: 0 0 0 1px white;">Login</h3>
                </div>
            </div>
        </div>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>