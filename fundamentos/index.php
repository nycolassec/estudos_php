<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body{
            font-family:verdana;
            padding:10px;
            font-size:1.2rem;
        }

        h2{
            text-shadow:rgba(0,0,0,.4) 0 0 5px;
            padding : 5px;
            border-radius: 5px;
            background-color: rgba(0,0,0,.1);
            text-align: center;
        }
    </style>
</head>

<body>
<?/********** Variaveis **********/?>
<h2>Variaveis</h2>

<?php

$nome = "Nycolas";
$sobre_nome = "Ramos";

echo "$nome $sobre_nome";
?>

<p>Seja bem vindo <?=$nome?></p>
<hr>
<?/********** Variaveis **********/?>


<?/********** Condicionais **********/?>
<h2>Condicionais</h2>

<?php
$finalizado = 1;

if ($finalizado){
    echo "😊 - Finalizado";
}else{
    echo "😒 - Não finalizado";
}
?>

<?php if(!$finalizado): ?>
    <p style="color:green;">😊 - Finalizado</p>
<?php else: ?>
    <p style="color:red;">😒 - Não finalizado</p>
<?php endif;?>
<hr>
<?/********** Condicionais **********/?>


<?/********** Arrays **********/?>
<h2>Arrays</h2>

<?php
$projetos = [
    ["nome" => "Login de usuario", "finalizado" => 1, "Nycolas"],
    ["nome" => "Plataforma de ensino", "finalizado" => 0, "Davi"],
    ["nome" => "Sistema hospitalar", "finalizado" => 1, "Atylas"],
    ["nome" => "Aluguel de carros", "finalizado" => 0, "Eryck"],
    ["nome" => "Sistema Fibra", "finalizado" => 1, "Wellington"]
];
foreach ($projetos as $projeto){
?>
    <ul>
        <li><?=$projeto["nome"]?></li>
        <li>
            <?php
                if ($projeto["finalizado"]){
                    echo "😊 - Finalizado";
                }else{
                    echo "😒 - Não finalizado";
                }
            ?>
        </li>
        <li><?=$projeto[0]?></li>
    </ul>
<?php } ?>

<hr>
<?/********** Arrays **********/?>


<?/********** Funcoes **********/?>
<h2>Funções</h2>
<?php
function verificaPar($num){
    if (!($num%2)){
        $res = "Par";
    }else{
        $res = "Ímpar";
    }

    return "<p>O número $num é $res</p>";
}
?>
<?=verificaPar(5)?>
<?=verificaPar(6)?>
<?=verificaPar(9)?>
<?=verificaPar(15)?>
<hr>
<?/********** Funcoes **********/?>


<?/********** Filtro **********/?>
<h2>Filtro</h2>

<?php
function filtrarProjetos($listaDeProjetos, $finalizado = null){
    if (is_null($finalizado)){
        return $listaDeProjetos;
    }

    $filtrados=[];
    foreach($listaDeProjetos as $projeto){
        if ($projeto["finalizado"] === $finalizado){
            $filtrados[] = $projeto;
        }
    }
    return $filtrados;
}

foreach(filtrarProjetos($projetos,0) as $projeto){
?>

<ul>
    <li><?=$projeto["nome"]?></li>
    <li>
    <?php if ($projeto["finalizado"]){
            echo "😊 - Finalizado";
        }else{
            echo "😒 - Não finalizado";
        }?>
    </li>
    <li><?=$projeto[0]?></li>
</ul>

<?php }?>

<hr>
<?/********** Filtro **********/?>


<?/********** Funcao anonima **********/?>
<h2>Função anônima</h2>

<?php
$filtroDeProjetos = function($listaDeProjetos, $finalizado = null){
    if (is_null($finalizado)){
        return $listaDeProjetos;
    }

    $filtrados=[];
    foreach($listaDeProjetos as $projeto){
        if ($projeto["finalizado"] === $finalizado){
            $filtrados[] = $projeto;
        }
    }
    return $filtrados;
};

foreach($filtroDeProjetos($projetos,1) as $projeto){
?>

<ul>
    <li><?=$projeto["nome"]?></li>
    <li>
    <?php if ($projeto["finalizado"]){
            echo "😊 - Finalizado";
        }else{
            echo "😒 - Não finalizado";
        }?>
    </li>
    <li><?=$projeto[0]?></li>
</ul>

<?php }?>


<hr>
<?/********** Funcao anonima **********/?>


<?/********** Array filter **********/?>
<h2> Array filter</h2>
<?php
$projetos = [
    ["nome" => "Login de usuario", "finalizado" => 1, "Nycolas"],
    ["nome" => "Plataforma de ensino", "finalizado" => 0, "Davi"],
    ["nome" => "Sistema hospitalar", "finalizado" => 1, "Atylas"],
    ["nome" => "Aluguel de carros", "finalizado" => 0, "Eryck"],
    ["nome" => "Sistema Fibra", "finalizado" => 1, "Wellington"]
];

    $filtroDeProjetos = array_filter($projetos, function($projeto){
        return $projeto["finalizado"] == 0;
    });

foreach($filtroDeProjetos as $projeto){
?>

<ul>
    <li><?=$projeto["nome"]?></li>
    <li>
    <?php if ($projeto["finalizado"]){
            echo "😊 - Finalizado";
        }else{
            echo "😒 - Não finalizado";
        }?>
    </li>
    <li><?=$projeto[0]?></li>
</ul>

<?php }?>


<hr>
<?/********** Array filter **********/?>
</body>

