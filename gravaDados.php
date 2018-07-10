<?php

include("conecta.php");
// recebe os dados e faz a cadastro no banco
$email = $_POST["email"];
$senha = $_POST["senha"];

mysqli_query($conexao, "insert into dados (email, senha) values ('$email','$senha')");
header("location:index.php");
