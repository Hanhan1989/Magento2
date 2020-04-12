<?php
namespace Hanhan\Leccion2\Setup;
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * Instalamos el esquema de la bbdd poniendo código en el método install. Se puede usar sql pero es recomendable usar el activeRecord de Magento
     */
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        
        //START table setup
        /**
         * ponemos identity = true pra que la fila sea autoincremental
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('hanhan_leccion2_entrada')
        )->addColumn(
            'entrada_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true, ],
            'Entity ID'
        )->addColumn(
            'title',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, ],
            'Demo Title'
        )->addColumn(
            'text',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false ],
            'texto de la entrada'
        );
        $installer->getConnection()->createTable($table);
        //END   table setup 
        $installer->endSetup(); // cerrar el resource para la bbdd así mejoramos el rendimiento del código
    }
}
