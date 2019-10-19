<?php

declare(strict_types=1);

class IndexController
	
	{

	public function indexAction(): void
	{

		include_once '../src/view/index/index.phtml';

	}

	public function erroAction(): void{

		include_once '../src/view/index/erro.pthml';
	}
}



?>