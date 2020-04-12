## Lección 1

Creación de un módulo

````bash
# Generar módulo
php pestle.phar magento2:generate:module Hanhan Leccion1 0.0.1

# Actualizar base de datos
php bin/magento setup:upgrade

# Los siguientes pasos no son necesarios si magento está en modo developer
# Activar módulo y limpiar los estáticos
php bin/magento module:enable Hanhan_Leccion1 --clear-static-content

# Regenerar los estáticos
php bin/magento setup:di:compile

````