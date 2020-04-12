<?php
namespace Hanhan\Leccion2\Model\ResourceModel;
class Entrada extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Nombre de la table y su primary key
     */
    protected function _construct()
    {
        $this->_init('hanhan_leccion2_entrada','entrada_id');
    }
}
