## Lección 2 (Crear componentes)

Acceso a una página customizada y rendenrizado de la página o template personalizado

Comandos para generar la estructura general del controller
````bash
# Generar xml route para el frontname
php pestle.phar magento2:generate:route

# Generar layout xml , su template phtml y block
php pestle.phar generate_view
````
Cada url , un fichero y en ese fichero, un método execute

Hemos creado 2 rutas

````bash
hanhan_leccion2/index/index o hanhan_leccion2/ sin template
hanhan_leccion2/index/contemplatephtml con template
hanhan_leccion2/index/salidadatosjson con salida de datos en formato json
hanhan_leccion2/index/salidarawdata con salida de datos sin formato
hanhan_leccion2/index/redirecttohome redireccionar a la página externa ó página home
hanhan_leccion2/index/forwardredirect redireccionar a una página interna de magento sin cambiar de url
hanhan_leccion2/index/devolverbloquelayout Invocar método de un block en el controlador
````

Las partes de la url son frontname/nombreCarpetaController/nombreDelFicheroEnLaCarpetaController. En otras palabras, esto es, frontname_controllerName_actionName.

Las partes del nombre del layout son idfrontname_controllername_actionname.
Si queremos renderizar la página con template, el id del route del frontname se pondrá como nombre del layout. Ej: hanhan_leccion2_index_contemplatephtml.xml

Cuando entramos en la url por ejemplo hanhan_leccion2/index/contemplatephtml el action devuelve el objeto \Magento\Framework\View\Result\PageFactory y este objeto asocia la url con su layout correspondiente. Luego el layout asocia el bloque y el phtml.
Así pues  tendremos el url-block-phtml todo conectado. 

### Action class admite los siguientes tipos de objetos de Result

El Action class debe retornar un objeto Result

- json: Sets Content-Type:application/json in the header and returns a json encoded representation of an array with data

- raw: Returns the data as it’s been set. Does not set a Content-Type in the header

- redirect: Creates an external redirect, which the browser follows and requests a new url

- forward: Internally calls the execute method of another action class and does not trigger a new request from the browser. The URL stays the same

- layout: View result. You can use a generic layout response to render any kind of layout. The layout comprises a response body from its layout elements and sets it to the HTTP response

- page: View result. Encapsulates page type, page configuration, and imposes certain layout handles. page triggers layout.xml to render into HTML

### Referencias

- https://devdocs.magento.com/guides/v2.3/extension-dev-guide/routing.html