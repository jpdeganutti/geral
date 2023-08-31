<?php

session_start();

print_r($_POST);

if ( empty($_POST['user']) OR empty($_POST['senha'])) {
    echo "Dados obrigatórios não preenchindos!";
    $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Dados obrigatórios não preenchindos!</div>"
  
    echo "<meta http-equiv='refresh' content='0; URL=index.php'/";

} else {
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=?");

    $sql->execute(array($_POST['user'], sha1($_POST['senha'])));

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($resultado)) {
        echo "Usuário válido!";
    } else {
        $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha não encontrados!</div>"
        echo "<meta http-equiv='refresh' content='0; URL=index.php'/";

    }
}


?>