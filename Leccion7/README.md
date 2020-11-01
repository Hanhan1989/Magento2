# Lección 7

```
	<add id="Hanhan_Leccion7::post" title="Manage Posts" module="Hanhan_Leccion7" sortOrder="10" action="Hanhan_Leccion7/post" resource="Hanhan_Leccion7::post" parent="Hanhan_Leccion7::helloworld"/>
```

Si no especificamos el atributo parent es menu nivel 0

Menus del bakend nivel 0

/var/www/magento2.com/html/vendor/magento/module-backend/etc/adminhtml/menu.xml

The id attribute is the identifier for this note. It’s a unique string and should follow the format: {Vendor_ModuleName}::{menu_description}.

The title attribute is the text which will be shown on the menu bar.

The module attribute is defined the module which this menu is belong to.

The sortOrder attribute is defined the position of the menu. Lower value will display on top of menu.

The parent attribute is an Id of other menu node. It will tell Magento that this menu is a child of another menu. In this example, we have parent=”Mageplaza_HelloWorld::helloworld”, so we - know this menu “Manage Posts” is a child of “Hello World” menu and it will show inside of Hello World menu.

The action attribute will define the url of the page which this menu link to. As we talk above, the url will be followed this format {router_name}{controller_folder}{action_name}. - In this example, this menu will link to the module HelloWorld, controller Post and action Index

The resource attribute is used to defined the ACL rule which the admin user must have in order to see and access this menu. We will find more detail about ACL in other topic.