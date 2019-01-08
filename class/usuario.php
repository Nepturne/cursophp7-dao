<?php 


class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	#-> Getters and Setters:
	#=====================================
	public function getIdUsuario(){
		return $this->idusuario;
	}

	public function setIdUsuario($value){
		$this->idusuario = $value;
	}
    #=====================================
	public function getDesLogin(){
		return $this->deslogin;
	}

	public function setDesLogin($value){
		$this->deslogin = $value;
	}
	#=====================================
	public function getDesSenha(){
		return $this->dessenha;
	}

	public function setDesSenha($value){
		$this->dessenha = $value;
	}
	#=====================================
	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	public function setDtCadastro($value){
		$this->dtcadastro = $value;
	}
	#=====================================

	# Métodos: -----------------------------------------------------------------------------------------------------
	
	#-> Função loadByID => Recebe um Id e utiliza a classe sql para utilizar o método select que recebe 2 paramêtros
	#-> o primeiro paramêtro é a rowQuery e o segundo os parâmetros  onde um array define chave valor para que o identificador
	#-> :ID referencie $id ( parâmetro passado na função loadById() ). Caso a variável que armazena o select $results
	#-> retorne mais que 0 no caso 1 registro pois o id foi passado para retornar 1. 
	#-> $results[0] = Que representa o primeiro registro retornado atribui com sets os idusuario,deslogin...
	#-> E o método mágico __toString retorna em json um array com os indices e valores que retornam nos gets os valores
	#-> setados anteriormente no loadById().
	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(  

		":ID" => $id

		));

		if(count($results) > 0){

			$row = $results[0];
			$this->setIdUsuario($row['idusuario']);
			$this->setDesLogin($row['deslogin']);
			$this->setDesSenha($row['dessenha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));

		}


	}

	public function __toString(){
		
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDesLogin(),
			"dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));

	}






}




 ?>