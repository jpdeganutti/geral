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
    
        <label for="">Nome:</label>
        <input type="text" name="nome" id=""><br><br>

        <label for="">Sobrenome:</label>
        <input type="text" name="sobrenome" id=""><br><br>

        <label for="">Estado Civil:</label>
        <input type="text" name="estadocivil" id=""><br><br>

        <label for="">RG:</label>
        <input type="number" name="rg" id=""><br><br>

        <label for="">CPF:</label>
        <input type="number" name="cpf" id=""><br><br>

        <label for="">Rua:</label>
        <input type="text" name="rua" id=""><br><br>

        <label for="">N°:</label>
        <input type="number" name="n°" id=""><br><br>

        <label for="">Bairro:</label>
        <input type="text" name="bairro" id=""><br><br>

        <label for="">Cidade:</label>
        <input type="text" name="cidade" id=""><br><br>

        <label for="">CEP:</label>
        <input type="number" name="cep" id=""><br><br>

        <label for="">Telefone:</label>
        <input type="number" name="telefone" id=""><br><br>

        <label for="">E-mail:</label>
        <input type="text" name="email" id=""><br><br>

        <label for="">Senha:</label>
        <input type="text" name="senha" id=""><br><br>


        <input type="submit" value="Enviar">

    </form>    

</body>
</html>

<?php

print_r($_POST);
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$estadocivil = $_POST['estadocivil'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$n° = $_POST['n°'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];






echo "<br> <br> O nome completo é: {$nome} {$sobrenome}";
echo "<br>O estado civíl: {$estadocivil}";
echo "<br> O RG e CPF são, respectivamente: {$rg} / {$cpf}";
echo "<br> O endereço é: {$rua}, {$n°} - {$bairro} (CEP: {$cep} )";
echo "<br> O telefone é: {$telefone}";
echo "<br> O email e senha são, respectivamente: {$email} | {$senha}";

?>