<?php
namespace Hanhan\Leccion2\Model\ResourceModel\Entrada;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Hanhan\Leccion2\Model\Entrada','Hanhan\Leccion2\Model\ResourceModel\Entrada');
    }
}
