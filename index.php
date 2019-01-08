<?php 
#-> DAO - Data Acess Objetct:
require_once('config.php');

# A classe Sql que trata conexões e formas de Select, Update, Delete de dados vai ser consumida pelas classes que a utilizam.
# A classe usuario utiliza a classe sql e retorna com as funções sql resultados atribuindo a atributos com set e retornando
# com o get.

# CARREGA E UTILIZA A CLASSE SQL DE FORMA DIRETA SEM CLASSE USUÁRIO.PHP (Sql.php SECO)
# $sql = new Sql();
# $usuarios = $sql->select("SELECT * FROM tb_usuarios");
# echo json_encode($usuarios); 

# CARREGA UM USUÁRIO COM BASE EM SEU ID PASSADO COMO PARÂMETRO SETANDO SUAS 
# INFORMAÇÕES NO BANCO NAS ROW COM OS SETS E RECUPERANDO-AS COM OS GETS;
# $root = new Usuario();
# $root->loadById(1);
# echo $root;

# CARREGA UMA LISTA DE USUÁRIOS COM O MÉTODO STÁTICO GETLIST(); (LISTA ESTÁTICA)
# $lista = Usuario::getList();
# echo json_encode($lista);

# CARREGA UMA LISTA DE USUÁRIOS PESQUISANDO PELO LOGIN. (SEARCH) =========> NÃO FUNCIONOUUUUU <===========
# $search = new Usuario::search("us");
# echo json_encode($search); ( VERIFICAR RESPOSTA NA UDEMY ) =========> NÃO FUNCIONOUUUUU <===========

# CARREGA USUÁRIO SE O LOGIN E A SENHA ESTIVEREM CORRETAS COMO NO BANCO DE DADOS.
# $usuario = new Usuario();
# $usuario->login("lucasroot","12345679998");
# echo $usuario;

# CARREGA OS DADOS PARA SEREM INSERIDOS NO BANCO DE DADOS:
# $aluno = new Usuario('lucas_insert_two','luzaarwo');
# $aluno->insert();
# echo $aluno;

# CARREGA OS DADOS PARA SEREM ALTERADOS NO BANCO DE DADOS:
# $usuario = new Usuario();
# $usuario->loadById(7);
# $usuario->update("FUNCIONOU","LOLmITOU");
# echo $usuario;

?>