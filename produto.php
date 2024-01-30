<?php
$_SESSION['produto'][]=[
    'id' => 6,
    'foto' => 'mts1969.jpg',
    'nome' => 'safsadf 1969',
    'ano' => '1969',
    'km' => 5334,
    'vendido' => 'Não',
    'valor' => '1500.00',
    'cor' => 'Verde',
    'tipo' => 'p',
    'ativo' => 'a',
];
include_once('bd.php');

if (isset($_GET['id'])) {
    $idexveiculo = $_GET['id'] - 1;
    unset($produto[$idexveiculo]);
} else {

    $idexveiculo = 0;
}

if (isset($_SESSION['senha'])) {
    $senha = $_SESSION['senha'];
} else {
    $senha = '';
}
;
?>
<div class="card">
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
        }

        if (isset($_FILES['foto']) && !empty($_FILES['foto'])) {
            $foto = $_FILES['foto']['name'];
            
        }

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
        }

        if (isset($_POST['ano']) && !empty($_POST['ano'])) {
            $ano = $_POST['ano'];
        }
 
        if (isset($_POST['km']) && !empty($_POST['km'])) {
            $km = $_POST['km'];
        }
   
        if (isset($_POST['vendido']) && !empty($_POST['vendido'])) {
            $vendido = $_POST['vendido'];
        }
     
        if (isset($_POST['valor']) && !empty($_POST['valor'])) {
            $valor = $_POST['valor'];
        }
     
        if (isset($_POST['cor']) && !empty($_POST['cor'])) {
            $cor = $_POST['cor'];
        }
       
        if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
            $tipo = $_POST['tipo'];
        }
      
        if (isset($_POST['ativo']) && !empty($_POST['ativo'])) {
            $ativo = $_POST['ativo'];
        }
     
        if (isset($_POST['upVeiulo']) && !empty($_POST['upVeiulo'])) {
            $idupveiculo = $_POST['upVeiulo'];
            $indeceAlterar = ($idupveiculo - 1);
            $produto[$indeceAlterar] = upproduto($idupveiculo, $foto, $nome, $ano, $km, $vendido, $valor, $cor, $tipo, $ativo);
        } else {
            $move = "img/imgp/".$foto;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $move);
            $produto[] = insetproduto($id, $foto, $nome, $ano, $km, $vendido, $valor, $cor, $tipo, $ativo);
            // $produto[] = insetproduto(4, 'eu', 'Luciano', '23', '100', 'nao', '5', 'verde', 'p', 'a');
        }
    };
    
    ?>
    <h5 class="card-header">#Produto
        <a href="" data-bs-toggle="modal" data-bs-target="#cadastro"><button style="float: right;margin:2px"
                class="btn btn-outline-dark">Cadastra</button></a>
    </h5>
    <?php 
    ?>
    <div class="card-body">
        <table class="table table-hover table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ano</th>
                    <th scope="col">KM</th>
                    <th scope="col">Vendido</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $produto[] = insetproduto($id, $foto,$nome,$ano,$km,$vendido,$valor,$cor,$tipo,$ativo);
                foreach ($produto as $itemproduto) {
                    $id = $itemproduto['id'];
                    $foto = $itemproduto['foto'];
                    $nome = $itemproduto['nome'];
                    $ano = $itemproduto['ano'];
                    $km = $itemproduto['km'];
                    $vendido = $itemproduto['vendido'];
                    $valor = $itemproduto['valor'];
                    $cor = $itemproduto['cor'];
                    $tipo = $itemproduto['tipo'];
                    $ativo = $itemproduto['ativo'];
                    if ($tipo == 'p' && $ativo == 'a') {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $id ?>
                            </th>
                            <td>
                                <img src="img/imgp/<?php echo $foto ?>" class="img-fluid rounded-circle" width="50px" alt="">
                                
                            </td>
                            <td>
                                <?php echo $nome ?>
                            </td>
                            <td>
                                <?php echo $ano ?>
                            </td>
                            <td>
                                <?php echo $km ?>
                            </td>
                            <td>
                                <?php echo $vendido ?>
                            </td>
                            <td>
                                <?php echo $valor ?>
                            </td>
                            <td>
                                <?php echo $cor ?>
                            </td>
                            <td>
                                <?php echo $tipo ?>
                            </td>
                            <td>
                                <?php echo $ativo ?>
                            </td>

                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#alterarVeiculo<?php echo $id ?>">
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-success btn-sm" <?php if ($senha != 1 && $senha != 2) {
                                            echo 'style="display: none"';
                                        } ?>>Alterar</button>
                                </a>
                                <!-- Modal de Alterar -->
                                <div class="modal fade" id="alterarVeiculo<?php echo $id ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="adm.php?page=produto" method="post">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Id:</label>
                                                                <input type="text" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o id" name="id"
                                                                    value='<?php echo $id ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Foto:</label>
                                                                <input type="file" id="disabledTextInput" class="form-control"
                                                                    placeholder="Selecione a foto:" name="foto"
                                                                    value='<?php echo $foto ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Nome:</label>
                                                                <input type="text" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o nome do veiculo:"
                                                                    name="nome" value='<?php echo $nome ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Ano:</label>
                                                                <input type="number" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="ano" value='<?php echo $ano ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">KM:</label>
                                                                <input type="number" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="km" value='<?php echo $km ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput"
                                                                    class="form-label">Vendido:</label>
                                                                <input type="number" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="vendido" value='<?php echo $vendido ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Valor:</label>
                                                                <input type="number" id="disabledTextInput<?php echo $id ?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="vendido" value='<?php echo $valor ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Cor:</label>
                                                                <input type="text" id="disabledTextInput<?php echo $id;?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="vendido" value='<?php echo $cor ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Tipo:</label>
                                                                <input type="text" id="disabledTextInput<?php echo $id;?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="vendido" value='<?php echo $tipo ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Ativo:</label>
                                                                <input type="text" id="disabledTextInput<?php echo $id;?>"
                                                                    class="form-control" placeholder="Digite o ano do veiculo:"
                                                                    name="vendido" value='<?php echo $ativo ?>'>
                                                                <input type="hidden" name="upVeiulo" value="<?php echo $id;?>">
                                                            </div>
                                                        </div>

                                                        <fieldset>
                                                            <button type="submit" class="btn btn-primary">Alterar</button>
                                                        </fieldset>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fim da modal de Alterar -->

                                <!-- Bnt de excluir; -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#excluirVeiculo<?php echo $id ?>">
                                    <button type="button" class="btn btn-danger btn-sm" <?php if ($senha != 1) {
                                        echo 'style="display: none"';
                                    } ?>>Excluir</button>
                                </a>

                                <!-- Modal de excluir -->
                                <div class="modal fade" id="excluirVeiculo<?php echo $id ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Deseja realmente deletar o registro?</h3>
                                                <input type="hidden" name="upVeiulo" value="<?php echo $id ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <a href="adm.php?page=produto&id=<?php echo $id; ?>"
                                                    class="btn bg-danger text-light">Excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fimd da modal de excuir -->
                            </td>
                        </tr>
                        <?php
                    }
                }
                ;
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal de Cadastro -->
<div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-dark text-white">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-dark text-white text-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel" class="text-center">Realizando Cadastro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-white">
                <div class="card">
                    <div class="card-body bg-dark text-white">
                        <form action="adm.php?page=produto" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Id:</label>
                                        <input type="text" id="disabledTextInput" class="form-control"
                                            placeholder="Digite o id" name="id">
                                        
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Foto:</label>
                                        <input type="file" id="disabledTextInput" class="form-control"
                                            placeholder="Selecione a foto:" name="foto">
                                       
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Nome:</label>
                                        <input type="text" id="disabledTextInput" class="form-control"
                                            placeholder="Digite o nome do veiculo" name="nome">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Ano:</label>
                                        <input type="number" id="disabledTextInput" class="form-control"
                                            placeholder="Digite o ano do veiculo:" name="ano">
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">KM:</label>
                                        <input type="text" id="disabledTextInput" class="form-control"
                                            placeholder="Digite o km?:" name="km">
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Vendido:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                            name="vendido">
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Valor:</label>
                                        <input type="number" id="disabledTextInput" class="form-control"
                                            placeholder="Qual o valor do produto?" name="valor">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Cor:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                            name="cor">
                                            <option value="Vermelho">Vermelho</option>
                                            <option value="Preto">Preto</option>
                                            <option value="Verde">Verde</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Branco">Branco</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Tipo:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                            name="tipo">
                                            <option value="p">Pequeno</option>
                                            <option value="g">Grande</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Ativo:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                            name="ativo">
                                            <option value="a">Ativo</option>
                                            <option value="d">Desativo</option>
                                        </select>
                                    </div>
                                </div>
                                <fieldset>
                                <input type="hidden" name="cadVeiulo" value="<?php echo $id ?>">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>