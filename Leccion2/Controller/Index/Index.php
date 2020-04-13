<?php
namespace Hanhan\Leccion2\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
	/**
	 * No es correcto lo siguiente, aunque funcione. Debe retornar un objeto del tipo Result
	*/
    public function execute()
    {
        echo  "Hola mundo! Controller de la Leccion2";
    }
}
