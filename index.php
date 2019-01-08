<?php 
#-> DAO - Data Acess Objetct:
require_once('config.php');

# A classe sql que trata conexões e formas de Select, Update, Delete de dados vai ser consumida pelas classes que a utilizam.
# A classe usuario utiliza a classe sql e retorna com as funções sql resultados atribuindo a atributos com set e retornando
# com o get.

/* UTILIZANDO A CLASSE SQL DE FORMA DIRETA E NãO INDIRETA COMO POR EXEMPLO PELA CLASSE USUARIO.PHP (SQL SECO)
# $sql = new Sql();

# $usuarios = $sql->select("SELECT * FROM tb_usuarios");

# echo json_encode($usuarios); */

# Carrega um usuário com base em seu Id passado como parâmetro setando suas informações no banco nas row com os sets e 
# recuperando-as com os gets; (CARREGA PELO ID)
# $root = new Usuario();

# $root->loadById(1);

# echo $root;

# Carrega uma lista de usuários com o método stático getList(); (LISTA ESTÁTICA)
# $lista = Usuario::getList();

# echo json_encode($lista);

# Carrego uma lista de usuários pesquisando pelo login. (SEARCH)
$afk = new Usuario::search('user');
echo json_encode($afk);

# Carrega usuário se o login e senha estiverem corretas como no banco de dados.
# $usuario = new Usuario();
# $usuario->login("lucasroot","12345679998");
# echo $usuario;

 ?>