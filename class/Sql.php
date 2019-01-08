<?php 
#-> PDO e Orientação a Objetos:


#-> Tudo o que PDO faz a classe Sql vai poder fazer ==> HERANÇA.
class Sql extends PDO {

	#-> Atributo $conn private ==> ENCAPSULAMENTO.
	private $conn;

	#-> Método Mágico __construct ao executar o new Sql(); já vai fazer conexão com o banco de dados.
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7" , "root" , "");

	}

	/* Não etendi esse _________________________________________________________________________*/
	private function setParams($statement,$parameters = array() ){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement , $key,$value);

		}

	}

	private function setParam($statement ,$key , $value){

		$statement->bindParam($key,$value);
	}
	/* Até aqui ________________________________________________________________________________*/


	#-> rowQuery = Querie Bruta | Example:  ("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)")
	#-> params = Parâmetros | Example: ("INSERT INTO tb_usuarios (deslogin,dessenha) ==>VALUES(:LOGIN,:PASSWORD)<==")
	public function query( $rowQuery , $params = array() ){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt,$params);

		$stmt->execute();

		return $stmt;

	}


	#-> SELECT:
	public function select( $rowQuery , $params = array() ):array {

		$stmt = $this->query($rowQuery,$params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}




}
?>