<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;

    class Ticket extends Action
    {
       
        protected function __construct(Context $context, TicketFactory $ticketF)
        {

            $this->ticketFactory = $ticketF;
            parent::__construct($context);
        }

    public function execute()
    {
         /** @var Json $jsonResult */
        $PageResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);

        echo (" ci arrivo");
 
        
        
        return $PageResult;
    }
   

        
}