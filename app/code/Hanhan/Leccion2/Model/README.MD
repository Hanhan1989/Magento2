# Modelo

El modelo no ejecuta sentencias de sql sino es una Capa para la lógica de la bbdd. 
El Resourcemodel se encarga de ejecutar sentencias sql. 

Implementaremos esta interfaz `\Magento\Framework\DataObject\IdentityInterface` si queremos que se borre el caché después de la operación con la bbdd. 

```bash
 1. models which require cache refresh when it is created/updated/deleted
 2. blocks which render this information to front-end
```

# Resourcemodel

Esta clase hace todas las intereacciones con la bbdd. Esta clase extiende de la clase abstracta `\Magento\Framework\Model\ResourceModel\Db\AbstractDb`.
En la clase abstracta hay métodos que podemos usar para interacciónar con la bbdd.  