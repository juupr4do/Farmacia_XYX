<?php
	include_once __DIR__."/banco.php";
    $cadastro = new banco();
    $entradas = new banco();
    $tabela = 'cadastro';
    $campos['login'] = $_REQUEST['login'];
    $campos['senha'] = $_REQUEST['senha'];
    $campos['email'] = $_REQUEST['email'];
    $cadastro->insertQuery($tabela, $campos);
    $rola = $entradas->selectQuery($tabela);

?>
    <head>
        <title> Farmácia XYX </title>
        <link rel="stylesheet" href="css.css" >
        <link rel="icon" href="remedio.png">
    </head>
    <body>
        <div class="titulo">
            <center>
                <strong>Sucesso!</strong>
            </center>
        </div>
        <center>
        <div class="design2 ajuste">
            <p>Cadastro relizado com sucesso, você pode agora fazer seu login.</p>
            <a class="link" href='home.php'>Clique aqui para voltar a página de login</a>
        </div>
        </center>
    </body>
    
