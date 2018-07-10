<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<title>Login - Cadastro</title>
</head>
<body style="background-color: #c7ecee;">
    <div class="container">
        <div class="col-md-4 offset-md-4">
            <div class="jumbotron" style="background-color: #FFF; margin-top: 150px;">
                <h1 style="text-align: center";>Sign in</h1>
                <p class="text-secondary" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur. Fugit ab eveniet modi fuga voluptatem.</p>
                <!--INICIO FORMULARIO-->
                <form action="gravaDados.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" placeholder="Password">
                    </div> 
                    <button class="btn btn-primary form-control bg-dark btn-lg" style="background-color: secondary">Sign in</button>
                </form>
            </div><!--FECHA JUMBOTRON-->
        </div><!--FECHA OFFSET-->
    </div><!--FECHA CONTAINER GERAL-->

<!--INICIA O CADASTRO DOS DADOS-->
<div class="container col-md-4 offset-md-4 " >
    <?php
        // conectando ao banco 
        include("conecta.php");            
        //seleciona tudo da tabela dados
        $seleciona = mysqli_query($conexao, "select * from dados order by id desc");   
        // $campo recebe cada item do $seleciona acima
        while($campo = mysqli_fetch_array($seleciona)){?>
        <!-- DADOS CADASTRADOS -->
        <table class="table table-striped" style="background-color: #fff" >
            <thead>  
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr> 
            </thead>
            <tbody class="table-warning">
                <tr>
                    <td><?=$campo["email"]?></td>
                    <td><?=$campo["senha"]?></td>
                </tr>
            </tbody>    
        </table>
        <?php }
    ?>
</div><!--FECHA CONTAINER GERAL-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>