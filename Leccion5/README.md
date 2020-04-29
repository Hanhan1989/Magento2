## Lección 5


InstallSchema: se ejecuta cuando es la primera vez con el setup:upgrade. Su objetivo es cargar el esquema a la bbdd. 

Hacer setup:upgrade para migrar datos y schema de la bbdd a la base de datos. 
Si no se hace la migración, entonces tenemos que eliminar la fila que contiene  el módulo en la tabla setup_module. 
O bajarle la versión. 

```
DELETE FROM `setup_module` WHERE `setup_module`.`module` = 'Hanhan_Leccion5'
````

Referencias:

https://devdocs.magento.com/videos/fundamentals/add-a-new-table-to-database/

a partir de 2.3, usar db_schema para definir esquemas de la bbdd
https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html












Crear la estructura para el crud

```
php pestle.phar generate_crud_model Hanhan_Leccion5 LenguajesWeb

Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Api/LenguajesWebRepositoryInterface.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Model/LenguajesWebRepository.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Api/Data/LenguajesWebInterface.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Model/ResourceModel/LenguajesWeb/Collection.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Model/ResourceModel/LenguajesWeb.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Model/LenguajesWeb.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Setup/InstallSchema.php
Creating: /var/www/magento2.com/html/app/code/Hanhan/Leccion5/Setup/InstallData.php

```



### CRUD con la bbdd

#### Pagefactory

Crea la instancia del page. El fichero se crea automáticamente en generated. 
Es obligado para los objetos que no sean inyectables. 

#### Page

Modelo para la tabla o no. En este ejemplo sí. 

#### Collection

Cuando queremos traer más de una fila de la bbdd o cuando queremos filtrar o hacer joins con otras tablas


### Explicación del cms page

*Entidad - Relación* 

cms_page - store
Muchos stores pueden acceder a la misma página cms y una página cms puede ser accedida por muchos stores. 
Es una relación de muchos a muchos. 

*Relacional*

cms_page - cms_page_store - store

Pasando de la ER a Relaciona se mete una tabla intermedia para hacer dicha relación. 