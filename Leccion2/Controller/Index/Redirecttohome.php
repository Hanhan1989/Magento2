<?php
namespace Hanhan\Leccion2\Controller\Index;

class Redirecttohome extends \Magento\Framework\App\Action\Action
{

    protected $redirectFactory;


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RedirectFactory $redirecFactory
    ) {
        parent::__construct($context);
        $this->redirecFactory = $redirecFactory;
    }

    public function execute()
    {
    	// objeto del framework/Controller/Result/Redirect.php
        $redirectObject = $this->redirecFactory->create();
        //redireccionar a una web externa
        //$redirectObject->setUrl('https://google.com'); 
        //redireccionar a una ruta del sistema magento
        $redirectObject->setPath('/'); 
        return $redirectObject;
    }
}
