<?php
namespace Hanhan\Leccion2\Api;

use Hanhan\Leccion2\Api\Data\EntradaInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface EntradaRepositoryInterface 
{
    public function save(EntradaInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(EntradaInterface $page);

    public function deleteById($id);
}
