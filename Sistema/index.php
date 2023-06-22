<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center mt-5 mb-5">
        <img src="Recursos/nba-logo-transparent.png" alt="" width= "150PX">

    </div>

    <div class="container text-center mb-5">
        <h2>Login do usuário</h2>
    </div>

    <div class="container text-center">
        <form action="" method="post">
            <label class="input-group" for="usuario">Usuário</label>
            <input class="input-group mb-2" type="email" name="user" id="usuario">

            <label class="input-group" for="senha">Senha</label>
            <input class="input-group mb-2" type="password" name="senha" id="senha">

            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="cadastro.php">Cadastrar</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
