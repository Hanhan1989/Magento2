<?php
namespace Hanhan\Leccion2\Model;
class Entrada extends \Magento\Framework\Model\AbstractModel implements \Hanhan\Leccion2\Api\Data\EntradaInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'hanhan_leccion2_entrada';

    protected function _construct()
    {
        $this->_init('Hanhan\Leccion2\Model\ResourceModel\Entrada');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
