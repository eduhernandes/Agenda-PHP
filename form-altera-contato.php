<?php
include "config.php";
?>
<html>
    <head>
        <title>Agenda de Contatos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php
    $codigo = $_POST['idcodigo'];

    $sql ="select * from agenda where id_contato='$codigo'";
    $resultado = mysqli_query($db,$sql) or die ("Não foi possível realizar a consulta");

    $linha = mysqli_fetch_array($resultado);
    ?>
    <body>
        <a href="index.php"><button title="Homepage">Voltar</button></a>
        <h1 class="center">Alterar Cadastro</h1>
        <form method="post"  action="altera-contato.php" class="myinputstyle">
        <hr>

        <table width="680" class="myinputstyle" align="center">
            <tr>
                <td><input name="codigo" type="hidden" size=50 value="<?php
                echo $linha['Id_contato']?>"></td>
            </tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Nome: </td>
                <td bgcolor="#ebebeb">
                    <input type=text name="nome" size="50" class="myinputstyle" value="<?php 
                    echo $linha['Nome']?>">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Telefone:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="telefone" size="13" class="myinputstyle" value="<?php 
                    echo $linha['Telefone']?>">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Telefone Comercial:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="comercial" size="13" class="myinputstyle" value="<?php 
                    echo $linha['Comercial']?>">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Celular:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="celular" size="13" class="myinputstyle" value="<?php 
                    echo $linha['Celular']?>">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Celular 2:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="celular2" size="13" class="myinputstyle" value="<?php 
                    echo $linha['Celular2']?>">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>E-mail:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="email" size="100" class="myinputstyle" value="<?php 
                    echo $linha['Email']?>">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Site:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="site" size="100" class="myinputstyle" value="<?php 
                    echo $linha['Wsite']?>">
                </td>
            </tr>
            

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Observação:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="observacao" size="100" class="myinputstyle" value="<?php 
                    echo $linha['Observacao']?>">
                </td>
            </tr>
            
            <tr>
                <td colspan=2 align="right" class="myinputstyle">
                <button type="submit">Alterar Contato</button>
                </td>
            </tr>
            
            
        </table>
    </form>
    </body>
</html>