<?php
namespace Customdb\Moduledb\Model;

use Magento\Framework\Model\AbstractModel;
use Customdb\Moduledb\Model\ResourceModel\Ticket as ResourceModel;

class Ticket extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}