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





?>

</body>
</html>