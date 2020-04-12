# FACTORY PATTERN

## Json factory 

Si queremos usar la clase `\Magento\Framework\Controller\Result\Json`, tenemos que inyectar la dependencia  `Magento\Framework\Controller\Result\JsonFactory` a través del constuctor

````php
public function __construct(
    \Magento\Framework\App\Action\Context $context,
    JsonFactory $resultJsonFactory
    )
{
    parent::__construct($context);
    $this->resultJsonFactory = $resultJsonFactory; 
}
````

La factoría JsonFactory crea objeto de la clase Json. Esta clase hereda de una clase abstracta `Magento\Framework\Controller\AbstractResult` y esta implementa la interfaz ` Magento\Framework\App\ResponseInterface`. Hay un diagrama muy parecido a esta estrucutra. Mirar los links de las referencias. 

La clase AbstractResult obliga a sus hijos tener el método render()

Por ejemplo en Json.php 

````php
protected function render(HttpResponseInterface $response)
{
    $this->translateInline->processResponseBody($this->json, true);
    $response->setHeader('Content-Type', 'application/json', true);
    $response->setBody($this->json);
    return $this;
}
````


## Referencias

*https://www.tutorialspoint.com/design_pattern/factory_pattern.htm