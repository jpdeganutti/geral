<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo HTML</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">Nome:</label>
        <input type="text" name="nome" id=""><br>
        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome" id=""><br>
        <input type="submit" value="Enviar dados">

    </form>
</body>
</html>

<?php

$nome = $_POST['nome'];
$sobrenome = $_POST ['sobrenome'];

echo "Nome completo: {$nome} {$sobrenome}";
?>