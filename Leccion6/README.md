# Lección 6

## Incluir layout y links en todas las páginas

El fichero default.xml sirve para poner "cosas" en todas las páginas. Dependiendo de donde pongamos el fichero
va a afectar a todas las páginas del backoffice o frontend. 

En este caso concreto, hemos incluido un fichero js en todas las páginas del frontend

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <head>
        <css src="js/leccion6.js"/>
    </head>
</page>
```

## Prioridad de carga de los ficheros de xml

Los layouts que están en el theme. Si hay algún layout en el theme, y queremos modificar ese layout, 
tendremos que modificarlo a través de la estructura theme'app/design en vez de hacerlo en app/code. 

## Referencias

- https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/xml-instructions.html