<?php
include "config.php";
?>
<html>
    <head>
        <title>Agenda de Contatos</title>
        <!--criando estilo css -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <a href="index.php"><button title="Homepage">Voltar</button></a>
    <center>
        <img src="img/agenda2.png" alt="some text" wigth=80 height=60>
        <h1>AGENDA DE CONTATOS</h1>
        <h3>Lista de Contatos</h3>
    </center>
    <hr>

    <?php
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($db,$sql);

    if($result -> num_rows > 0){
        while ($linha = mysqli_fetch_assoc($result)) {
            echo $linha['Id_contato']." - ". $linha['Nome']."<br>";
        } 
    } else {
        echo "0 resultados";
    }
    ?>

    <form method="post" action="form-altera-contato.php">
        <TABLE BORDER=0>
            <tr>
                <td bgcolor="#cccccc" class="myinputstyle" size="3">Código: </td>
                <td bgcolor="#EBEBEB">
                    <input type=text name="idcodigo" size="3" class="myinputstyle"
                    title="Digite código do contato" required onchange="this.value = this.value.trim()"> &nbsp;
                    <button  type="submit">Alterar Contato</button>
                </td>
            </tr>
        </TABLE>
    </form>
</body>
</html>