<?php
	include_once __DIR__."/banco.php";
    $logins = new banco();
    $tabela = 'cadastro';
    $cadastros = $logins->selectQuery($tabela);

    if(in_array($_REQUEST['user'], $cadastros['login'])){
        $where = 'login="'.$_REQUEST['user'].'"';
        $senha = new banco();
        $confirmarSenha = $senha->selectQueryWhere($tabela,$where);
        if($confirmarSenha['senha'] == $_REQUEST['senha']){
            ?>
            <head>
                <title> Farmácia XYX </title>
                <link rel="stylesheet" href="css.css" >
                <link rel="icon" href="remedio.png">
            </head>
            <body>
                <div class="titulo">
                    <center>
                        <strong>Bem vindo! Farmácia XYX</strong>
                    </center>
                </div>
                <center>
                    <div class="design2 ajuste">
                        <p>Usuários cadastrados</p>
                        <table>
                            <tr>
                                <td class ="tabelaContorno">Usuário</td>
                                <td class ="tabelaContorno">Email</td>
                            </tr>
                        <?php 
                            foreach($cadastros['login'] as $cl => $c){ ?>
                            <tr>
                                <td class ="tabela"><?= $c ?></td>
                                <td class ="tabela"><?= $cadastros['email'][$cl] ?></td>
                            </tr>
                        <?php
                            } 
                        ?>
                        </table>
                    </div>
                </center>
                <div align="right" style="padding-right: 20px;padding-bottom: 20px">
                    <img src="remedio.png" id="moon">
                </div>
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
                <div style="padding-top: 50px; padding-left: 20px">
                    <button><a class="link" href="home.php">Voltar</a></button>
                </div>
                <div class="titulo">
                    <center>
                        <strong>Erro</strong>
                    </center>
                </div>
                <center>
                    <div class="design2 ajuste">
                        <p>Senha incorreta, tente novamente.</p>
                    </div>
                </center>
            </body>
        <?php
        }
    }else{
        ?>
            <head>
                <title> Farmácia XYX </title>
                <link rel="stylesheet" href="css.css" >
                <link rel="icon" href="remedio.png">
            </head>
            <body>
                <div style="padding-top: 50px; padding-left: 20px">
                    <button><a class="link" href="home.php">Voltar</a></button>
                </div>
                <div class="titulo">
                    <center>
                        <strong>Erro</strong>
                    </center>
                </div>
                <center>
                    <div class="design2 ajuste">
                        <p>Usuário não existe.</p>
                    </div>
                </center>
            </body>
<?php
    }


?>