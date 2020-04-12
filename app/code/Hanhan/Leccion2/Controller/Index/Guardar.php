<?php
namespace Hanhan\Leccion2\Controller\Index;

use Hanhan\Leccion2\Model\EntradaFactory;
use Magento\Framework\Exception\LocalizedException;

/**
 * Esta clase guarda los datos enviados por el método post. 
 */
class Guardar extends \Magento\Framework\App\Action\Action
{

    private $entradaFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        EntradaFactory $entradaFactory
        )
    {
        parent::__construct($context);
        $this->entradaFactory = $entradaFactory;
    }


    /**
     * Recuerda que si queremos guardar los datos de la manera $entrada->setData($request->getParams())
     * tenemos que setear el name de los inputs del formulario igual que el nombre de los campos de la tabla
     */
    public function execute()
    {
        $request = $this->getRequest();
        /**
         * Si la respuesta no es del tipo post, ir al leccion2/index/index del modulo
         */
        if (!$request->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }
        
        try {
            $entrada = $this->entradaFactory->create();
            $entrada->setData($this->validatedParams());
            $entrada->save();
        } catch (LocalizedException $e) {
            echo "<script>{$e->getMessage()}</script>";
        } 

    
    }

    /**
     * Validar los campos title y text. Si están vacíos lanzar el mensaje
     */
    private function validatedParams()
    {
        $request = $this->getRequest();
        if (trim($request->getParam('title')) === '') {
            throw new LocalizedException(__('Enter the title and try again.'));
        }
        if (trim($request->getParam('text')) === '') {
            throw new LocalizedException(__('Enter the text and try again.'));
        }

        return $request->getParams();
    }
}
