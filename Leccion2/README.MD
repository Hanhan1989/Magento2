## Lección 2 (Crear componentes)

Acceso a una página customizada y rendenrizado de código json o template personalizado

````bash
# Generar xml route para el frontname
php pestle.phar magento2:generate:route

# Generar layout xml , su template y block
php pestle.phar generate_view
````
Cada url , un fichero y en ese fichero, un método execute

Hemos creado 2 rutas

leccion2/index/index sin template
eccion2/index/ejemplo con template

El id del route del frontname se pondrá como nombre en layout. Ej: leccion2id_index_ejemplo

### Crear helper

Se crea un fichero `Helper/Data.php` en el módulo.

Se recomienda usar el helper en el bloque inyectando en el constructor. Y luego a través de este bloque, usar los métodos del helper en templates (phtml).

Sin embargo si queremos usarlo en los templates como instancias independientes en vez de como objeto singleton, 
podemos usar lo siguiente

````php 
$object_manager = \Magento\Core\Model\ObjectManager::getInstance();
$helper_factory = $object_manager->get('\Magento\Core\Model\Factory\Helper');
$helper = $helper_factory->get('\Magento\Core\Helper\Data');
````

### Crear modelo

````bash
# Nos genera todos los ficheros necesarios para crear crud de tabla customizada
php pestle.phar magento2:generate:crud-model
````
- El fichero InstallSchema.php y InstallData.php: contiene sentencias sql y sirve para crear el esquema de la bbdd. El fichero InstallData.php sirve para cargar datos a la bbdd. Sólo se ejecutan una vez, cuando se instala el módulo. Si queremos reinstalar el módulo debemos eliminar la fila de nuestro módulo en la tabla `setup_module` , eliminar las tablas instaladas por ese módulo y finalmente ejecutar `setup:upgrade`

Observaciones: 
- Después de crear el modelo, ejecutamos magento setup:di:compile. Podemos ver, por dicha ejecución, se han generado ficheros en la carpeta `generated/code`, entre las carpetas está nuestro módulo `Hanhan/Leccion ` y podemos encontrar este fichero `Model/EntradaFactory.php`

Recuerda eliminar *manualmente*:
 - rm -rf generated
 - rm -rf generate/metadata


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