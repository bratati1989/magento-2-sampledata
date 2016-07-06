<?php
namespace Embitel\Helloworld\Model;
class Todoitem extends \Magento\Framework\Model\AbstractModel
{
    const CACHE_TAG = 'embitel_helloworld_todoitem';
 
    protected function _construct()
    {
        $this->_init('Embitel\Helloworld\Model\ResourceModel\Todoitem');
    }
 
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}

