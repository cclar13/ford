<?php

//estilos de banner
//prin=principal
//f-footer
//s-secundario
//c-carrosel

$banner = [
    [
        'foto' => 'banner3.jpg',
        'tipo' => 'principal',
        'ativo' => 'a',
    ],
    [
        'foto' => 'banner7.png',
        'tipo' => 'secundario',
        'ativo' => 'a',
    ],
    [
        'foto' => 'banner12.png',
        'tipo' => 'oferta',
        'ativo' => 'a',
    ],
    [
        'foto'=>'banner14.png',
        'tipo'=>'eletrificados',
        'ativo'=>'a',
    ],
    [
        'foto'=>'banner15.jpeg',
        'tipo'=>'esperiencia',
        'ativo'=>'a',
    ],
    [
        'foto'=>'banner17.jpg',
        'tipo'=>'everlightgo',
        'ativo'=>'a',
    ],
];


$texto = [
    [

        'texto' => 'Escolha um Ford para o seu estilo de vida',
        'estilo' => 'atencao',
        'tamanho' => 'g',
        'ativo' => 'a',
    ],
];

$_SESSION['produto']=[];
//array de produto
$produto = [
    [
        'id' => 1,
        'foto' => 'mts1967.jpg',
        'nome' => 'Mustang 1967',
        'ano' => '1967',
        'km' => 2134,
        'vendido' => 'Não',
        'valor' => '150.00',
        'cor' => 'Vermelho',
        'tipo' => 'p',
        'ativo' => 'a',
    ],
    [
        'id' => 2,
        'foto' => 'mts1968.png',
        'nome' => 'Mustang 1968',
        'ano' => '1968',
        'km' => 5334,
        'vendido' => 'Não',
        'valor' => '1500.00',
        'cor' => 'Preto',
        'tipo' => 'p',
        'ativo' => 'a',
    ],
    [
        'id' => 3,
        'foto' => 'mts1969.jpg',
        'nome' => 'Mustang 1969',
        'ano' => '1969',
        'km' => 5334,
        'vendido' => 'Não',
        'valor' => '1500.00',
        'cor' => 'Verde',
        'tipo' => 'p',
        'ativo' => 'a',
    ],
    [
        'id' => 4,
        'foto' => 'mts1970.png',
        'nome' => 'Mustang 1970',
        'ano' => '1969',
        'km' => 5334,
        'vendido' => 'Não',
        'valor' => '1500.00',
        'cor' => 'Azul',
        'tipo' => 'p',
        'ativo' => 'a',
    ],
];
$_SESSION['produto']=$produto;
global $produto;

//  funcao de insert produto

;

// funcao de delete de produto
function exproduto($id, $foto,$nome, $ano, $km, $vendido, $valor, $cor, $tipo, $ativo)
{

    $produto = [
        'id' => $id,
        'foto' => $foto,
        'nome' => $nome,
        'ano' => $ano,
        'km' => $km,
        'vendido' => $vendido,
        'valor' => $valor,
        'cor' => $cor,
        'tipo' => $tipo,
        'ativo' => $ativo,
    ];

    return $produto;
}
;
function insetproduto($id, $foto,$nome, $ano, $km, $vendido, $valor, $cor, $tipo, $ativo)
{

    $produto = [
        'id' => $id,
        'foto' => $foto,
        'nome' => $nome,
        'ano' => $ano,
        'km' => $km,
        'vendido' => $vendido,
        'valor' => $valor,
        'cor' => $cor,
        'tipo' => $tipo,
        'ativo' => $ativo,
    ];

    return $produto;
}
;

// funcao de update
function upproduto($id, $foto, $nome, $ano, $km, $vendido, $valor, $cor, $tipo, $ativo)
{

    $produto = [
        'id' => $id,
        'foto' => $foto,
        'nome' => $nome,
        'ano' => $ano,
        'km' => $km,
        'vendido' => $vendido,
        'valor' => $valor,
        'cor' => $cor,
        'tipo' => $tipo,
        'ativo' => $ativo,
    ];

    return $produto;
};



$veiculo = [
    [
        'foto' => 'novageracao.png',
        'nome' => 'Nova Geração Ranger',
        'preco' => '$1200,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'picape',
    ],
    [
        'foto' => 'ranger.png',
        'nome' => 'Ranger Raptor',
        'preco' => '$1400,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'picape',
    ],
    [
        'foto' => 'mave.png',
        'nome' => 'Maverick',
        'preco' => '$1.1200,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'picape',
    ],
    [
        'foto' => 'f150.png',
        'nome' => 'F-150',
        'preco' => '$1500,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'picape',
    ],
    [
        'foto' => 'novoterritorysuvs.png',
        'nome' => 'Novo Territory',
        'preco' => '$1.2340,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'suvs',
    ],
    [
        'foto' => 'suvsbronk.png',
        'nome' => 'Bronco Sport',
        'preco' => '$1700,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'suvs',
    ],
    [
        'foto' => 'mustangmach.png',
        'nome' => 'Mustang Mach 1
        ',
        'preco' => '$1890,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'peformace',
    ],
    [
        'foto' => 'mustangeletric.png',
        'nome' => 'Mustang Mach-E',
        'preco' => '$1900,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'peformace',
    ],
    [
        'foto' => 'minibus.png',
        'nome' => 'Transit Minibus',
        'preco' => '$100,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'comerciais',
    ],
    [
        'foto' => 'forgao.png',
        'nome' => 'Transit Furgão',
        'preco' => '$900,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'comerciais',
    ],
    [
        'foto' => 'chassi.png',
        'nome' => 'Transit Chassi',
        'preco' => '$2100,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'comerciais',
    ],
    [
        'foto' => 'rangerxl.png',
        'nome' => 'Ranger XL 2.0 4x4',
        'preco' => '$2300,00',
        'tipo' => 'p',
        'ativo' => 'a',
        'veiculo' => 'comerciais',
    ],
];
