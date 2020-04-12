<?php
namespace Hanhan\Leccion2\Block;

use Magento\Framework\View\Element\Template;
use Hanhan\Leccion2\Helper\Data;

/**
 * La clase EntradaFactory se genera de forma automática en generated/code cuando estamos en modo developer o ejecutando di:compile
 * Sirve para instanciar la clase Model/Entrada. 
 * Esto  $entrada = $this->entradaFactory->create(); es equivalente a Mage::getModel()
 */
use Hanhan\Leccion2\Model\EntradaFactory;

class Main extends Template
{

    protected $entradaFactory;
    
    protected $helper;

    public function __construct(
        Template\Context $context,
        EntradaFactory $entradaFactory,
        Data $helper
        )
    {
        parent::__construct($context);
        
        $this->entradaFactory = $entradaFactory;
        $this->helper = $helper;
        
    }

    public function nombreCompleto()
    {
        return "hanhan chen";
    }

    public function saludar()
    {
        return "Hola, {$this->nombreCompleto()}";
    }

    public function tomarPosts()
    {
        $entrada = $this->entradaFactory->create();
        $entradaCollection = $entrada->getCollection();
        
        return $entradaCollection;
    }

    /**
     * Returns action url for blog post form
     *Si el website usa ssl , poner el protocolo https
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('leccion2/index/guardar', ['_secure' => true]);
    }

    public function getNombreModulo()
    {
        return $this->helper->nombreModulo();
    }

}