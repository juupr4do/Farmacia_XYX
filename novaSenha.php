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
                <strong>Nova senha</strong>
            </center>
        </div>
        <center>
            <div class="design2 ajuste">
                <form action="../Farmacia_XYX/atualizacaoSenha.php" method="POST" id="new-password">
                    <p> Defina sua nova senha.</p>
                    <div style="padding-top: 10px;padding-bottom: 10px;">
                        <label for="username" > Digite seu usuário: </label>
                        <input type="text" id ="username" name='username' style="margin-left:28px">
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label for="new-senha"> Digite sua nova senha: </label>
                        <input type="password" id ="new-senha" name= 'new-senha'>
                    </div>
                    <button class="botao cursor" onclick="preenchidos()"> Atualizar </button>
                </form>
            </div>
        </center>
        <div align="right" style="padding-right: 20px;padding-bottom: 20px">
            <img src="remedio.png" id="moon">
        </div>
    </body>
    <script>
    
        function preenchidos(){
            var login = document.getElementById('username').value;
            var senha = document.getElementById('new-senha').value;
            if(login == ''){
                alert('Preencha o campo usuário');
                document.getElementById('new-password').action = '';
            }else if(senha == ''){
                alert('Preencha o campo senha');
                document.getElementById('new-password').action = '';
            }
        }
    </script>
</html>
