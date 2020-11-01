# EJERCICIOS MAGENTO 2

## Lección 1

Creación de un módulo

## Lección 2 (Crear componentes)

Acceso a una página customizada y rendenrizado de código json o template personalizado

## Lección 3 

Validación del código postal

## Lección 4

Customizar campos de address del checkout

## Leccion 5

Migrar schema y datos a la bbdd

## Leccion 6

Incluir layout y links en todas las páginas

## Leccion 7

Crear menú del backoffice





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