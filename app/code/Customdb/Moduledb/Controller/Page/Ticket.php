<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
//use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket\CollectionFactory;
 
    class Ticket extends Action
    {
       protected $resultFactory;
       protected $collectionFactory;

        protected function __construct(
            Context $context, 
            CollectionFactory $ticketF,
            ResultFactory $resultFactory)
        {

            $this->resultFactory = $resultFactory;
            $this->collectionFactory = $ticketF;
            parent::__construct($context);
        }

    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        echo (" ci arrivo");
 
        $result = $this->collectionFactory->create();//lt sta per lesser than
        $result->addFieldToFilter('number_id', ['lt' => 6]);
      /*  foreach($result as $ticket){
            print_r($ticket->getData());
        }       */
        
        // $collection = $result->getCollection(); //Get Collection of module data
        
        
        $block = $page->getLayout()->getBlock('cmdb_page_ticket');
        $block->setData('tickets', $result);
        return $page;
    }
   

        
}