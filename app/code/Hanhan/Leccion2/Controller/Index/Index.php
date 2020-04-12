<?php
namespace Hanhan\Leccion2\Controller\Index;

use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Esta clase tiene 1 atributo - objeto de JsonDactory. Inyectamos este objeto a través del constructor de la clase. 
 * Las factorías crean objeto x
 */
class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $resultJsonFactory;


    /**
     * Casi en todos los controllers se inyecta el objeto $context es porque hay propiedades tan básicas 
     * que necesitemos en cualquier controlador
     * Cada $context object lleva estas propiedades
     * $this->_request = $request;
     * $this->_response = $response;
     * $this->_objectManager = $objectManager;
     * $this->_eventManager = $eventManager;
     * $this->_url = $url;
     * $this->_redirect = $redirect;
     * $this->_actionFlag = $actionFlag;
     * $this->_view = $view;
     * $this->messageManager = $messageManager;
     * $this->resultRedirectFactory = $resultRedirectFactory;
     * $this->resultFactory = $resultFactory;
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        JsonFactory $resultJsonFactory
        )
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory; 
    }

    /**
     * Imprime output en formato json
     */
    public function execute()
    {
        $response = [
            "personas" =>[
                "simpáticas", "antipáticas", "divertidas", "felices", "alegres"
            ],
            "animales" =>[
                "mamífero" =>[
                    "tigre", "oso", "conejo"
                ],
                "peces" =>[
                    "sardina", "rape", "atún"
                ]
            ]
        ];

        /**
         * La factoría resultJsonFactory crea objeto de la clase \Magento\Framework\Controller\Result\Json
         * y se ha usado el método setData de la clase Json. 
         * Se setea los datos. Se procesa con el método serialize y finalmente se usa el método render para 
         * setear la cabecera adecuada de Json. Para más información ver clase Json
         */
        return $this->resultJsonFactory->create()->setData($response);
    }
}
