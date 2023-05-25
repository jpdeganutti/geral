<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1>Lista 1</h1>

<?php


$vetnumeros = [1, 2, 3, 4, 5];
print_r($vetnumeros);

$soma = array_sum($vetnumeros);
echo "<br> Resultado da soma é $soma";

$maior = max($vetnumeros);
echo "<br> O maior número é $maior";

if (in_array(3, $vetnumeros)) {
    echo "<br> Valor encontrado!";
} else {
    echo "<br> Valor não encontrado!";
}

echo "<br>";
array_pop($vetnumeros);
print_r($vetnumeros);

?>


<br/> <br/> <br/> <br/> <br/>


<h1>Lista 2</h1>

<?php

$vetnomes = [];
$vetnomes = ["Nick", "Rick", "Dicky", "Dawn", "Dega"];


if (empty($vetnomes)) {
    echo "<br> Lista vazia";  
} else {
    echo "<br> Lista não vazia";
}

echo "<br>"; echo "<br>";

echo "Adicionando 2 nomes <br>";
array_push($vetnomes, "João", "Pedro");
$soma = print_r($vetnomes);

echo "<br>"; echo "<br>";

echo "Retirando o primeiro valor <br>";
array_shift($vetnomes);
print_r($vetnomes);

echo "<br>"; echo "<br>";

echo "Em ordem alfabética <br>";
sort($vetnomes);
print_r($vetnomes);

?>

<br/> <br/> <br/> <br/> <br/>

<h1>Dicionário</h1>

<?php

$vetdados = [
    'nome'=>'João',
    'idade'=>17,
    'cidade'=>'Bauru'
];

echo "<br>O nome da pessoa é: ".$vetdados ['nome']."<br>";

$vetdados = ['profissão'=>'professor'];
echo "<br>";
print_r($vetdados);
echo "<br>";

if (array_key_exists('cidade', $vetdados)) {
    echo "<br>Chave existe!<br>";
} else {
    echo "<br>Chave NÃO existe!<br>";
}

unset($vetdados['idade']);
echo "<br>";
print_r($vetdados);
echo "<br>"; 

?>

<br/> <br/> <br/> <br/> <br/>

<h1>Vetores Bidimensionais</h1>

<?php

$vetcadastro = [
    ['nome' =>'Leonardo',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio'],
    
    ['nome' =>'João',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio'],

    ['nome' =>'Daniel',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio'],

    ['nome' =>'Pedro',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio'],

    ['nome' =>'Marcos',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio']
];

$vetexemplo = [
    ['nome' =>'Leonardo',
    'end'=>'Rua Anhanguera',
    'cidade'=>'Bauru',
    'estado'=>'SP',
    'bairro'=>'Vila Flores',
    'escolaridade'=>'Ensino Médio']
];


foreach ($vetexemplo as $key => $value) {
    echo " $key = $value <br>";
}

foreach ($vetcadastro as $key => $value) {
    echo "<br>-------------------------------------------------------------------- <br>";
        foreach ($vetcadastro[$key] as $key2 => $value2) {
            echo " $key2 = $value2 ";
    }
}


?>


<br/> <br/> <br/> <br/> <br/>

<h1>Funções</h1>

<?php

function somar()
{
    $a = 10;
    $b = 10;
    $resultado = $a + $b;
    echo "Resultado da soma = $resultado<br>";
}

function somarParametros($a, $b)
{
    $resultado = $a + $b;
    echo "Resultado da soma com parâmetros = $resultado";
}

function somarDevolver($a, $b)
{
    $resultado = $a + $b;
    return $resultado;
}

somar();

somarParametros(10,10);

$dado = somarDevolver(10,10);

?>

<br/> <br/> <br/> <br/> <br/>

<h1>Função caucular e devolver</h1>

<?php

 function calcular($a, $b, $op)

 {
    if ($op == 'soma') {
        $result = $a + $b;
        return $result;
    }

    if ($op == 'subtração') {
        $result = $a - $b;
        return $result;
    }

    if ($op == 'multiplicação') {
        $result = $a * $b;
        return $result;
    }

    if ($op == 'divisão') {
        $result = $a / $b;
        return $result;
    }
 }

 $dados = calcular(45, 89, 'multiplicação');
echo "O resultado é $dados";

?>

<br/> <br/> <br/> <br/> <br/>

<h1>Reajuste salarial</h1>

<?php

function calcularsal($sal)

{
    if ($sal <= 1320){
        $sal = $sal * 1.10; 
        return $sal;
    }

    if ($sal <= 3960){
        $sal = $sal * 1.05; 
        return $sal;
    }

    if ($sal >= 3960){
        $sal = $sal * 1.03; 
        return $sal;
    }
}

$dados = calcularsal(1598);
echo "O reajuste salarial final será de R$ $dados"

?>

</body>
</html>