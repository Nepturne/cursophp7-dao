<?php 
#-> DAO - Data Acess Objetct:
require_once('config.php');


# A classe sql que trata conexões e formas de Select, Update, Delete de dados vai ser consumida pelas classes que a utilizam.
# A classe usuario utiliza a classe sql e retorna com as funções sql resultados atribuindo a atributos com set e retornando
# com o get.

# $sql = new Sql();

# $usuarios = $sql->select("SELECT * FROM tb_usuarios");

# echo json_encode($usuarios);

$root = new Usuario();
$root->loadById(1);
echo $root;

 ?>