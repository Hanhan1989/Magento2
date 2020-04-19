# EJERCICIOS MAGENTO 2

## Lección 1

Creación de un módulo

## Lección 2 (Crear componentes)

Acceso a una página customizada y rendenrizado de código json o template personalizado

Crear Controllers

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

## Lección 3 (Rewrites)

Rewrites de controllers, blocks, helpers y plugins

### Helpers

Tenemos que crear un fichero en etc/di.xml del módulo  y debemos poner el siguiente código, que mapea clases. 

````xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
	<preference for="Hanhan\Leccion2\Helper\Data" type="Hanhan\Leccion3\Helper\Data"/>
</config>
````

Dependiendo de lo que queremos reescribir poner preference o plugin. En el atributo for, ponemos la ruta a la clase helper que queremos reescribir y type, ponemos la ruta a la clase helper que extenderá de la original.

NO tenemos que olvidar de extender la clase original en la clase hijo. 


## Composer

- Si queremos usar nuestro repositorio en github para el composer, se hace de la siguiente manera. Recordar tener instaldo el git




````bash
    "require-dev": {
        "allure-framework/allure-phpunit": "~1.2.0",
        "friendsofphp/php-cs-fixer": "~2.13.0",
        "hanhan1989/module-dev-mgtdevelopertoolbar": "dev-develop",
        ....

    "repositories": [
            {
                "type": "git",
                "url": "https://github.com/Hanhan1989/Mgt_Developertoolbar.git"
            }
        ]
        
````

Tenemos que crear el archivo composer.json en la raíz del proyecto. Especificar la propiedad name (Namespece/module).


Para más información mirar https://getcomposer.org/doc/articles/versions.md

## Referencias

* Pestle: https://github.com/astorm/pestle
* Patterns de Magento 2: https://magento.stackexchange.com/questions/234961/how-many-design-patterns-does-magento-have