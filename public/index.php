<?php

 include_once '../src/model/Conexao.php';
 include_once '../src/controller/UsuarioController.php';
 include_once '../src/controller/IndexController.php';

 $rota= explode( '?', $_SERVER['REQUEST_URI'])[0];

 include_once '../src/view/menu.phtml';

 switch ($rota) {


 	case '/':
 		
 		(new IndexController)->indexAction();
 		
 		break;

 	case '/usuarios':
 		
 		(new UsuarioController)->listarAction();
 		

 		break;

 	case '/novo-usuario':

 		(new UsuarioController)->novoAction();
 		

 		break;

 	case '/excluir-usuario':

 		(new UsuarioController)->excluirAction();
 		

 		break;

 		case '/editar-usuario':

 		(new UsuarioController)->editarAction();
 		
		break;
 	
 	default:
 		
 		
 		(new IndexController)->erroAction();
 }


?>