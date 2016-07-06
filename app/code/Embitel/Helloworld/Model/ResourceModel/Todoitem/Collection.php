<?php
namespace Embitel\Helloworld\Model\ResourceModel\Todoitem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Embitel\Helloworld\Model\Todoitem','Embitel\Helloworld\Model\ResourceModel\Todoitem');
    }
}