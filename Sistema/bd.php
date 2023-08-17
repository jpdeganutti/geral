<?php

if ($_POST['email'] == $_POST['emailconfig'] AND $_POST['senha'] == $_POST['senha']) {
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');
    $sql = $pdo->prepare ("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($_POST['nome'],
                        $_POST['sobrenome'],
                        $_POST['end'],
                        $_POST['num'],
                        $_POST['cidade'],
                        $_POST['estado'],
                        $_POST['sexo'],
                        $_POST['rg'],
                        $_POST['cpf'],
                        $_POST['datanasc'],
                        $_POST['email'],
                        sha1($_POST['senha']),
));

echo "<meta http-equiv='refresh' content='0; URL=index.php'/>";

} else {
    echo "Usuário e senha diferentes";
}


?>