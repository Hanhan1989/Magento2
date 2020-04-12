<?php
namespace Hanhan\Leccion2\Controller\Index;
class Ejemplo extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;

        /**
         * el objeto contexto  se hereda de los padres action y más. Gracias al objeto contexto tendremos atributos como
         * $this->_objectManager = $context->getObjectManager();
         * $this->_eventManager = $context->getEventManager();
         * $this->_url = $context->getUrl();
         * $this->_actionFlag = $context->getActionFlag();
         * $this->_redirect = $context->getRedirect();
         * $this->_view = $context->getView();
         * $this->messageManager = $context->getMessageManager();
         */
        parent::__construct($context);
    }

    /**
     * Este método es el output a las peticiones get o post. 
     * En este caso se devuelve el objeto de la página creada. Ojo! no es objeto singleton. Es una instancia
     * 
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
