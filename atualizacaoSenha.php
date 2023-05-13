<?php
	include_once __DIR__."/banco.php";
    $senha = new banco();
    $usuarioExistente = new banco();
    $tabela = 'cadastro';

    $username = 'login="'.$_REQUEST['username'].'"';
    $novaSenha = 'senha="'.$_REQUEST['new-senha'].'"';

    $usuarioExiste = $usuarioExistente->selectQueryWhere($tabela, $username);
    if($usuarioExiste['login'] == $_REQUEST['username']){
        $senha->updateQuery($tabela, $novaSenha, $username);
    

?>
    <head>
        <title> Farmácia XYX </title>
        <link rel="stylesheet" href="css.css" >
        <link rel="icon" href="remedio.png">
    </head>
    <body>
        <div class="titulo">
            <center>
                <strong>Erro</strong>
            </center>
        </div>
        <center>
        <div class="design2 ajuste">
            <p>Senha atualizada, você pode agora fazer seu login.</p>
            <a class="link" href='home.php'>Clique aqui para voltar a página de login</a>
        </div>
        </center>
    </body>
<?php
    }else{      
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
            <p>Usuário incorreto</p>
            <a class="link" href='home.php'>Clique aqui para voltar a página de login</a>
        </div>
        </center>
    </body>
<?php
    }     
?>
    
