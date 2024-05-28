<center>
<a href="index.php"><img src="img/voltar.png" width="32" 
height="30" title="Página inicial"></a>

<?php
//conecta o banco de dados
include "config.php";
//recebe os dados do formulário
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$comercial = $_POST['comercial'];
$celular = $_POST['celular'];
$celular2 = $_POST['celular2'];
$email = $_POST['email'];
$site = $_POST['site'];
$observacao = $_POST['observacao'];

//alterando registro no banco
$sql = "UPDATE agenda SET nome='$nome', telefone='$telefone', 
comercial='$comercial', celular='$celular', celular2='$celular2',
email='$email', wsite='$site', observacao='$observacao' 
where id_contato='$codigo'";

$resultado = mysqli_query($db,$sql) or die(mysqli_error($db));

?>
<h2>Registro Alterado com Sucesso</h2>