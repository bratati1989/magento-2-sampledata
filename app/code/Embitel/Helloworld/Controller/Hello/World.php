
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
        echo '<p>You Did It!</pd>';
        var_dump(__METHOD__);
        exit;
    }    
}