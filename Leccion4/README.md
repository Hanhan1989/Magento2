## Lección 4

## Customizar campos de address del checkout

Todos los campos del checkout están definidos en el xml checkout_index_index.xml.
Este layout contiene información de la relación que hay entre el js, su plantilla y variables a pasar al js. 
Las etiquetas de xml son convertidas en formato json.  
El método getJsLayout() contiene toda la información que relaciona el componente con su html. 
```js
    <script type="text/x-magento-init">
        {
            "#checkout": {
                "Magento_Ui/js/core/app": <?= /* @escapeNotVerified */ $block->getJsLayout() ?>
            }
        }
    </script>

```

Propiedades de cada campo

```json
 "telephone":{
               "component":"Magento_Ui\/js\/form\/element\/abstract",
               "config":{
                  "customScope":"shippingAddress",
                  "template":"ui\/form\/field",
                  "elementTmpl":"Hanhan_Leccion4\/form\/element\/telephone",
                  "tooltip":{
                     "description":"For delivery questions."
                  }
               },
               "dataScope":"shippingAddress.telephone",
               "label":"Phone Number",
               "provider":"checkoutProvider",
               "sortOrder":"120",
               "validation":{
                  "required-entry":true,
                  "max_text_length":255,
                  "min_text_length":1
               },
               "options":[

               ],
               "filterBy":null,
               "customEntry":null,
               "visible":true
            }
```

Para reescribir o añadir algo en el layout, sólo tenemos que seguir la misma estructura del original. 
Ojo! hay que priorizar del Magento_Checkout en module.xml