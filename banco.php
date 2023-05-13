<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	class banco{
		var $hostname="localhost";
		var $username="root";
		var $password="root";
		var $dbname="farmacia";

		function MySQL(){
			//Apenas instancia o Objeto
 		}

		function connect(){
			$this->link=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
			if(!$this->link){
				echo "Falha na conexão com o Banco de Dados!<br />";
				echo "Erro: " . mysqli_error($this->link);
				die();
			}
		}

		function executeQuery($query){
			$this->connect();
			$this->query=$query;
			if($this->result=mysqli_query($this->link,$this->query)){
				return $this->result;
			}
			else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error($this->link);
				echo "SQL: " . $query;
				die();
				disconnect();
			}
		}

		function insertQuery($tabela, $campos){
			$this->query = "INSERT INTO ".$tabela." (";            
			$this->query .= implode(",", array_keys($campos)) . ') VALUES (';            
			$this->query .= "'" . implode("','", array_values($campos)) . "')";
			$this->connect();
			if($this->result=mysqli_query($this->link, $this->query)){
				
				return $this->result;
			}
			else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error($this->link);
				echo "SQL: " . $query;
				die();
			}
		}

		function selectQuery($tabela){
			$this->query = "SELECT * FROM ".$tabela;
			$this->connect();
			if($this->result=mysqli_query($this->link, $this->query)){
				while ($row = mysqli_fetch_assoc($this->result)) {
					$r['login'][] = $row['login'];
					$r['senha'][] = $row['senha'];
					$r['email'][] = $row['email'];
				}
			}
			else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error($this->link);
				echo "SQL: " . $query;
				die();
			}
			return $r;
		}

		function selectQueryWhere($tabela, $where){
			$this->query = "SELECT * FROM ".$tabela." WHERE ".$where;
			$this->connect();
			if($this->result=mysqli_query($this->link, $this->query)){
				while ($row = mysqli_fetch_assoc($this->result)) {
					$r['senha'] = $row['senha'];
					$r['login'] = $row['login'];
				}
			}
			else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error($this->link);
				echo "SQL: " . $query;
				die();
			}
			return $r;
		}

		function updateQuery($tabela, $campo, $where){
			$this->query = "UPDATE ".$tabela." SET ".$campo." WHERE ".$where;
			$this->connect();
			if($this->result=mysqli_query($this->link, $this->query)){
				return $this->result;
			}
			else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error($this->link);
				echo "SQL: " . $query;
				die();
			}
		}
	
		// mysqli_connect($hostname,$username, $password, $dbname) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	
	
	# Check If Record Exists

	}
?>