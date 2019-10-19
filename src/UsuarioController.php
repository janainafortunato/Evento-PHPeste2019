<?php 

declare(strict_types=1);

/**
 * 
 */
class UsuarioContrller

{

	public function listarAction(): void
	{

		include_once '../view/usuario/listar.phtml';
	}

	public function novoAction(): void

	{

		include_once '../view/usuario/novo.phtml';
	}
}

