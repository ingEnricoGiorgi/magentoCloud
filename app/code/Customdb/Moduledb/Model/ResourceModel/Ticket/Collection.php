<?php
namespace Customdb\Moduledb\Model\ResourceModel\Ticket;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Customdb\Moduledb\Model\Ticket as Model; //ho tolto ticket
use Customdb\Moduledb\Model\ResourceModel\Ticket as ResourceModel;


class Collection extends AbstractCollection
{
   
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);


    }
    
}

