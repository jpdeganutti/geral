<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
        <label for="">Input text</label>
        <input type="text" name="dados" id="">
        <input type="submit" value="submit">
    
</body>
</html>

<?php

$dados = Dados($_POST['dados']);
echo "<h2> Dados: "  . $dados ."</h2>";

function Dados($dados){
    return $dados;
}

echo "$dados" . Dados ($_POST["ola"]);