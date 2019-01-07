<?php 

#-> Autoload.
#-> Método utilizado para encontrar as classes dentro de diretórios diferentes.

spl_autoload_register(function($class_name){

	$filename = $class_name.'.php';

	if(file_exists("class".DIRECTORY_SEPARATOR.$filename) === true){
		require_once("class".DIRECTORY_SEPARATOR.$filename);
	}

	else{
		echo 'Aconteceu um error para encontrar a classe.php!</br> Classe não encontrada :(';
	}

});


#-> Método utilizado para encontrar as classes dentro do mesmo diretório:
/* INÍCIO: ---------------------------------------------------------------------------------------------
spl_autoload_register(function($class_name){

	$filename = $class_name.'.php';
	
	if (file_exists($filename)){

		require_once($filename);

	} 

	else{
		echo 'Aconteceu um error para encontrar a classe.php!</br> Classe não encontrada :(';
	}

}); 
FIM ! -------------------------------------------------------------------------------------------------*/


?>