<?php
namespace Hanhan\Leccion5\Setup;
class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
       
          $data = [
              ['title' => 'php'],
              ['title' => 'javascript'],
              ['title' => 'mysql'],
              ['title' => 'html']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insert($setup->getTable('hanhan_lenguajesweb'), $bind);
          }
    }
}
