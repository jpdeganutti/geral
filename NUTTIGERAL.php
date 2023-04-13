<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1>Exercícios de Op Lógico e Relacionais</h1>
<?php
?>

<h1>Ex1</h1>
<?php

$n1 = 20;

if ($n1 >= 0) {

    $A = $n1;

    echo "O resultado é positivo e tem o valor de $A";

}

else {

    $B = $n1;
    
    echo "O resultado é negativo e tem o valor de $B";

};
?>



<h1>Ex2</h1>
<?php

$n1 = 101;

if ($n1 > 100) {

    $A = $n1;

    echo "Valor maior que 100 é: $A";
}

else {
    
    echo "O valor é zero";

};
?>



<h1>Ex3</h1>
<?php

$altura = 1.75;
$sexo = 'M';
$resultado;

if ( $sexo == 'M') {
    $resultado = (72.7 * $altura) - 58;
}

if ( $sexo == 'F') {
    $resultado = (62.1 * $altura) - 44.7;
}

echo "O resultado para o sexo {$sexo} é {$resultado}";
?>



<h1>Ex4</h1>
<?php

$n1 = 50;
$n2 = 50;

if ( $n1 <> $n2) {
    if ($n1 . $n2) {
        echo "N1 é maior | valor de {$n1}";
    } else {
        echo "N2 é maior | valor de {$n2}";
    }

} else {
    echo "Erro. Os números são iguais!";
} 

?>



<h1>Ex5</h1>
<?php

$n1 = 50;
$n2 = 51;

if ( $n1 <> $n2) {
    if ($n1 . $n2) {
        echo "Ordem crescente: 1={$n1} 2={$n2}";
    } else {
        echo "Ordem crescente: 1={$n2} 2={$n1}";
    }

} else {
    echo "Erro. Os números são iguais!";
}

?>


<br/> <br/> <br/> <br/> <br/> 


<h1>Exercício com "while"</h1>
<?php
?>



<h1>Ex1</h1>
<?php

$tabuada = 5;
$contador = 0;

while ($contador <= 10) {

    $resultado = $tabuada * $contador;
    echo "{$tabuada} X {$contador} = {$resultado} <br/>";

    $contador = $contador + 1;
}

?>

<br/> <br/> <br/> <br/> <br/>



<h1>Exercícios - Estrutura Repetição While</h1>
<?php
?>

<h1>Ex1</h1>
<?php

for ($n1=2; $n1 <= 50 ; $n1 += 2) { 
    echo $n1;

}
?>



<h1>Ex2</h1>
<?php

$inicial = 5;
$final = 15;

while ($final >= $inicial) {
    echo "final = {$final} >= inicial = {$inicial} <br/>";
    $inicial++;
}

?>


<h1>Ex2</h1>
<?php

$inicial = 5;
$final = 15;

while ($final >= $inicial) {
    echo "final = {$final} >= inicial = {$inicial} <br/>";
    $inicial++;
}

?>



</body>
</html>
