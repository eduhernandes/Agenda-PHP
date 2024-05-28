<head>
    <title>Pesquisa da Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php"><button title="Homepage">Voltar</button></a>
    <div class="center">
        <h1>AGENDA DE CONTATOS</h1>
        <h2>PESQUISA</h2>
    </div>
    
    <?php
        include "config.php";

        $inicial = $_GET['contato'];

        if ($inicial === '#') {
           $sql = "SELECT * FROM agenda";
        } else{
            $sql = "SELECT * FROM agenda where nome LIKE '$inicial%'";
        }

        $result = mysqli_query($db,$sql); //guarda o resultado da pesquisa

        //se existe resultado apresenta no browser
        if ($result) {
            while ($dados = mysqli_fetch_array($result)) {
                echo "Nome: ".$dados['Nome']."<br>";
                echo "Telefone: ".$dados['Telefone']."<br>";
                echo "Comercial: ".$dados['Comercial']."<br>";
                echo "Celular: ".$dados['Celular']."<br>";
                echo "Celular2: ".$dados['Celular2']."<br>";
                echo "Email: ".$dados['Email']."<br>";
                echo "Site: ".$dados['Wsite']."<br>";
                echo "Observação: ".$dados['Observacao']."<br><br><hr>";
            }
        }
        mysqli_close($db);

        ?>
</body>



