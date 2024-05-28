<?php
include "config.php";
if (!$db){
    die("Falha na conexão: " . mysqli_connect_error());
}

//recebe os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$comercial = $_POST['comercial'];
$celular = $_POST['celular'];
$celular2 = $_POST['celular2'];
$email = $_POST['email'];
$site =  $_POST['site'];
$observacao = $_POST['observacao'];

//cria variável para inserir o registro
$sql = "INSERT INTO agenda
(nome, telefone, comercial, celular, celular2, email, wsite, observacao) 
VALUES ('$nome','$telefone', '$comercial','$celular', '$celular2', '$email', '$site', '$observacao')";

$query = mysqli_query($db,$sql) or die(mysqli_error($db));

//Verifico se o registro foi inserido com sucesso
if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
?>