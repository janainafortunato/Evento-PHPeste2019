<?php 

declare(strict_types=1);

/**
 * 
 */
class UsuarioController

{
	private $conexao;

	public function __construct()
	{
		$this->conexao = (new Conexao)->abrir();
	}

	public function listarAction(): void
	{

		//$conexao = (new Conexao)->abrir();

		//var_dump($conexao);

		$usuarios = $this->conexao->query('SELECT * FROM usuarios')->fetch_all();

		include_once '../src/view/usuario/listar.phtml';
	}

	public function novoAction(): void

	{
		if($_POST){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
			$criado_em = (new dateTime)->format('d/m/y H:i:s');

			//$conexao = (new Conexao)->abrir();

			$this->conexao->query("INSERT INTO usuarios(nome, email, senha, criando_em) VALUES ('$nome', '$email', '$senha', '$criado_em');");

			/*echo "INSERT INTO usuarios(nome, email, senha, criando_em) VALUES ('$nome', '$email', '$senha', '$criado_em');"; */

			header('location: /usuarios');

		}
		include_once '../src/view/usuario/novo.phtml';
	}

	public function excluirAction(): void
	{

		$id = $_GET['id'];

		$resultado = $this->conexao->query("DELETE FROM usuarios WHERE id='$id'");

		//$conexao = (new Conexao)->abrir();

		header('location: /usuarios');
	}

	public function editarAction(): void
	{
		$id = $_GET['id'];

			if($_POST) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$senha = '';
			if($_POST['senha'] !== ''){
			$senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
				$senha = ", senha='{$senha}'";

			}

			$this->conexao->query("UPDATE usuarios SET

				nome='{$nome}', email='{$email}' $senha WHERE id='{$id}'");

			header('location: /usuarios');
		}
		
		$resultado = $this->conexao->query("SELECT * FROM usuarios WHERE id='$id'");

		$usuarios = $resultado->fetch_assoc();

		include_once '../src/view/usuario/editar.phtml';
	}
}

