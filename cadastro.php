<?php
	include_once __DIR__."/banco.php";
    $entradas = new banco();
    $tabela = 'cadastro';
    $cadastros = $entradas->selectQuery($tabela);

?>
<!DOCTYPE html>
<html>
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
                <strong>Cadastro</strong>
            </center>
        </div>
        <center>
        <div class="design2 ajuste">
            <p>Preencha seus dados para dar continuidade ao cadastro.</p>
            
            <div style="padding: 10px;">
                <form action="../Farmacia_XYX/resultadoCadastro.php" method="POST" id="cadastro">
                    <div>
                        <div style="padding: 10px;" align="left">
                            <label for="email" style="margin-right: 11px"> Email: </label>
                            <input type="text" name="email" id="email"/> 
                        </div>
                        <div style="padding: 10px;" align="left">
                            <label for="login" style="margin-right: 10px"> Login: </label>
                            <input type="text" name="login" id="login"/> 
                        </div>
                        <div style="padding: 10px; margin-bottom: 20px;" align="left">
                            <label for="senha" style="margin-right: 7px"> Senha: </label>
                            <input type="password" name="senha" id="senha"/>
                        </div> 
                    </div>
                    &nbsp; &nbsp; &nbsp; 
                    <button class="botao cursor" onclick="preenchido()"> Cadastrar </button>
                </form>
            </div>
        </div>
        </center>
        <div align="right" style="padding-right: 20px;padding-bottom: 20px">
            <img src="remedio.png" id="moon">
        </div>
    </body>
    <script>
        function loginRepetido(element) {
            var login = document.getElementById('login').value;
            if(element == login){
                alert('Login já existe');
                document.getElementById('cadastro').action = '';
            }else{
                document.getElementById('cadastro').submit();
            }
        }
        
        function validade(<?=$cadastros?>){
            var login = document.getElementById('login').value;
            var todosLogin = <?=json_encode($cadastros['login'])?>;
            todosLogin.forEach(loginRepetido);
        }

        function preenchido(){
            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;
            var email = document.getElementById('email').value;
            if(login == ''){
                alert('Preencha o campo login');
                document.getElementById('cadastro').action = '';
            }else if(senha == ''){
                alert('Preencha o campo senha');
                document.getElementById('cadastro').action = '';
            }else if(email == ''){
                alert('Preencha o campo email');
                document.getElementById('cadastro').action = '';
            }else{
                validade(<?=$cadastros?>);
            }
        }
    </script>
</html>
