<!DOCTYPE html>
<html>
    <head>
        <title> Farmácia XYX </title>
        <link rel="stylesheet" href="css.css" >
        <link rel="icon" href="remedio.png">
    </head>
    <body >
        <div class="titulo">
            <center>
                <strong>Farmácia XYX</strong>
            </center>
        </div>
        <center>
        <div class="design2 ajuste">
            <form action="../Farmacia_XYX/login.php" method="POST" id="login">
                <p> Bem vindo a Farmácia XYX! Por favor, faça seu login para continuar.</p>
                <div style="padding-top: 10px;padding-bottom: 10px;">
                    <label for="user" > Digite seu usuário: </label>
                    <input type="text" id ="user" name='user'>
                </div>
                <div style="margin-bottom: 30px;">
                    <label for="senha"> Digite sua senha: </label>
                    <input type="password"style="margin-left:12px" id ="senha" name= 'senha'>
                </div>
                <button class="botao cursor" onclick="preenchido()"> Logar </button>
            </form>
            <div style="display:block;" align="left">
                <p> Caso não tenha cadastro, <a class="link" href="cadastro.php"> clique aqui.</a> </p>
                <p> Caso tenha esquecido sua senha<a class="link" href='novaSenha.php'> clique aqui.</a> </p>
            </div>
        </div>
        </center>
        <div align="right" style="padding-right: 20px;padding-bottom: 20px">
            <img src="remedio.png" id="moon">
        </div>
    </body>
    <script>
    
        function preenchido(){
            var login = document.getElementById('user').value;
            var senha = document.getElementById('senha').value;
            if(login == ''){
                alert('Preencha o campo usuário');
                document.getElementById('login').action = '';
            }else if(senha == ''){
                alert('Preencha o campo senha');
                document.getElementById('login').action = '';
            }
        }
    </script>
</html>