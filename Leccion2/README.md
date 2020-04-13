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
hanhan_leccion2/index/salidarawdata con salida de datos sin formato.
````

Las partes de la url son frontname/nombreCarpetaController/nombreDelFicheroEnLaCarpetaController. En otras palabras, esto es, frontname_controllerName_actionName.

Las partes del nombre del layout son idfrontname_controllername_actionname.
Si queremos renderizar la página con template, el id del route del frontname se pondrá como nombre del layout. Ej: hanhan_leccion2_index_contemplatephtml.xml

Cuando entramos en la url por ejemplo hanhan_leccion2/index/contemplatephtml el action devuelve el objeto \Magento\Framework\View\Result\PageFactory y este objeto asocia la url con su layout correspondiente. Luego el layout asocia el bloque y el phtml.
Así pues  tendremos el url-block-phtml todo conectado. 
