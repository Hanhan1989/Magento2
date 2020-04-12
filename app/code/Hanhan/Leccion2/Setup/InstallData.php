<?php
namespace Hanhan\Leccion2\Setup;

/**
 * Esta clase se ejecuta sólo una vez. Cuando no está ni la fila creada en setup_module ni la tabla. 
 * Si queremos recrearlo, tendremos que eliminar de la setup_module y la tabla
 */
class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        //install data here

        // Vector de filas de la tabla. Las filas las escibimos en formato de matriz asociativa. 
        $data = [
            ['title' => 'Happy New Year', 'text' => 'Merry Christmas'],
            ['title' => 'verano en Barcelona', 'text' => 'Fue un verano bonio e inolvidable']
        ];

        // Recorre el array data e inserta fila por fila en la tabla 
        foreach ($data as $bind) {
            $setup->getConnection()
              ->insertForce($setup->getTable('hanhan_leccion2_entrada'), $bind);
        }
    }
}
