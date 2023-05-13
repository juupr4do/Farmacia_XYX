# Farmacia_XYX
página de login, cadastro e esqueceu a senha

# Configurações

# Pasta
Antes de prosseguir com os testes, é necessário que todos os códigos do repositório estejam em uma pasta nomeada Farmacia_XYX para evitar problemas de caminho,
principalmento no envio de formulários.
    
# Banco
Eu utilizei o MAMP como meu localhost. Se você usar outro método, provavelmente terá que fazer algumas alterações no arquivo banco.php, você terá que alterar o
$hostname, $username e $password para as configurações do seu local.
OBS: Para auxiliar a criação do banco utilizei MySQL Workbench.
Você também terá que criar o banco, rodando o seguinte comando: 
    
       
          CREATE SCHEMA farmacia ;
       
    
    
Após criar o banco, você terá que criar a seguinte tabela 
    
            CREATE TABLE `farmacia`.`cadastro` (
                `idCadastro` INT NOT NULL AUTO_INCREMENT,
                `login` VARCHAR(45) NOT NULL,
                `senha` VARCHAR(45) NOT NULL,
                `email` VARCHAR(45) NOT NULL,
                 PRIMARY KEY (`idCadastro`),
                 UNIQUE INDEX `idcadastro_UNIQUE` (`idCadastro` ASC),
                 UNIQUE INDEX `login_UNIQUE` (`login` ASC));
      
 Dessa forma seu banco estará configurando.
 
 # PHP
 A versão do PHP utilizada foi a versão PHP 8.0.1 do MAMP. 
 
 # Utilização
 Ao ligar o MAMP ou qualquer outra forma que você desejar utilizar, você deve acessar o link com o caminho, deve ser parecido com esse: 
 http://localhost/Farmacia_XYX/login.php
 
 A seguir um pequeno vídeo demostrativo: 


https://github.com/juupr4do/Farmacia_XYX/assets/42226267/dad979fb-1920-4da5-b149-b7ad751a7797


