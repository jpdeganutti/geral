<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-danger">
        <div class= "container-fluid">
            <a class= "navbar-brand" href="index.php"><img src="Recursos/nba-logo-transparent.png" alt="" width="50px"><a>
        </div>
    </nav>    

    <div class= "container text-center mt-5">
        <h2>Cadastro do usuário</h2>
        <p>
            Preencha os campos com suas informações e clique em "cadastrar"
        </p>
        <form action="bd.php" method="post">

            <div class="row">
                <div class="col-md-6">
                    <input class= "form-control" type="text" name="" id="" placeholder="Nome" required>
                </div>  

            <div class="col-md-6">
                    <input class= "form-control" type="text" name="" id="" placeholder="Sobrenome" required>
                </div>
            </div>
        <div>
            
            <div class="row mt-3">
                <div class="col-md-10">
                    <input class= "form-control" type="text" name="end" id="" placeholder="Endereço" required>
                </div>  
        
        
                <div class="col-md-2">
                    <input class= "form-control" type="number" name="num" id="" placeholder="Número" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
                </div> 

            </div>


            <div class="row mt-3">
                <div class="col-md-3">
                    <select class="form-control" name="sexo" id="">
                        <option value=""></option>
                        <option value="fem">Feminino</option>
                        <option value="masc">Masculino</option>
                        <option value="indeterminado">Prefiro não dizer</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <input class="form-control" type="number" name="rg" id="" placeholder="RG" required>
                </div>

                <div class="col-md-3">
                    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" required>
                </div>

                <div class="col-md-3">
                    <input type="date" name="datanasc" id="" placeholder="Data de nascimento" required>
                </div>


            </div>

            <input class="btn btn-lg btn-success mt-3" type="submit" value="Cadastrar usuário">


        </form>
    </div>

    <footer class="footer py-3 bg-primary fixed-bottom">
        <div class= "container text-center">
            <p class="text-light"> Todos os direitos reservados - 2023</p>
        </div>
    </footer>    


        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

<?php
    print_r($_POST);
?>