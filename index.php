<html>
    <head>
        <title>Agenda de Contatos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
        include "config.php"; /* A declaração include inclui o arquivo informado*/
    ?>
    <br>

    <!-- <center> -->
        <form method="post" action="form-cad-agenda.php" class="center">
            <fieldset>
                <img src="img/agenda2.png" alt="some text" width=160 height=140>
                <h1>AGENDA DE CONTATOS</h1>
                <br>
                <a href="pesquisa_agenda.php?contato=#">#</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=a">A</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=b">B</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=c">C</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=d">D</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=e">E</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=f">F</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=g">G</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=h">H</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=i">I</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=j">J</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=k">K</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=l">L</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=m">M</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=n">N</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=o">O</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=p">P</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=q">Q</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=r">R</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=s">S</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=t">T</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=u">U</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=v">V</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=W">W</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=x">X</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=y">Y</a> &nbsp;
                <a href="pesquisa_agenda.php?contato=z">Z</a> &nbsp;
                <br>
                <br>
                <button type="submit">Novo Contato</button>
            </fieldset>
        </form>
        <div class="center">
            <a href='listar.php'><button type="submit">Alterar Contato</button></a>
        </div>
        
    </body>
</html>
