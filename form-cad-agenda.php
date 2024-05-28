<?php
    include "config.php";
?>
<head>
    <title>Cadastro de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<a href="index.php"><button title="Homepage">Voltar</button></a>

<br>
    <div class="center">
        <h1>AGENDA DE CONTATOS</h1>
        <h2>NOVO CADASTRO</h2>
    </div>
    
    
    <form name="agenda" method="post" align="center" action="cadastrar-agenda.php" class="myinputstyle">
        <hr>

        <table border=0 align="center" cellspacing= width="800">
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Nome: </td>
                <td bgcolor="#ebebeb">
                    <input type=text name="nome" size="100" class="myinputstyle" title="Digite o nome do contato">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Telefone:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="telefone" size="13" class="myinputstyle" placeholder="(xx) xxxx-xxxx">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Telefone Comercial:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="comercial" size="13" class="myinputstyle" placeholder="(xx) xxxx-xxxx">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Celular:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="celular" size="13" class="myinputstyle" placeholder="(xx) xxxxx-xxxx">
                </td>
            </tr>
            <tr>
            
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=13>Celular 2:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="celular2" size="13" class="myinputstyle" placeholder="(xx) xxxxx-xxxx">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>E-mail:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="email" size="100" class="myinputstyle">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Site:</td>
                <td bgcolor="#ebebeb">
                    <input type=text name="site" size="100" class="myinputstyle">
                </td>
            </tr>
            <tr>

            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size=100>Observações:</td>
                <td bgcolor="#ebebeb">
                    <textarea name="observacao" rows=10 cols=40 class="myinputstyle"></textarea>
                </td>
            </tr>
            <tr>

            <tr>
                <td colspan=2 align="center" class="myinputstyle">
                    <input type="reset" value="Limpar dados" align="center">
                    <input type="submit" value="Enviar" align="center">
                </td>
            </tr>
            
            
        </table>
    </form>
