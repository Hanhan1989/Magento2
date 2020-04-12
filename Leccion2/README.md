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

hanhan_leccion2/index/index sin template
hanhan_leccion2/index/ejemplo con template

El id del route del frontname se pondrá como nombre en layout. Ej: leccion2id_index_ejemplo

Las partes de la url son frontname_nombreCarpetaController_nombreDelFichero
