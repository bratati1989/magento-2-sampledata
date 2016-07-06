<?php
namespace Embitel\Helloworld\Controller\Hello;
class World extends \Magento\Framework\App\Action\Action
{
    
//    public function __construct(
//        \Magento\Framework\App\Action\Context $context)
//    {
//        return parent::__construct($context);
//    }
    
    public function execute()
    {
        
        \Magento\Framework\App\ObjectManager::getInstance()
    ->get('Psr\Log\LoggerInterface')->debug('im here');
        
        echo '<p>You Did It!</p>';
//        var_dump(__METHOD__);
        exit;
    }    
}