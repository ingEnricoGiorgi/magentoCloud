<?php

namespace Customdb\Moduledb\Controller\Page;

use Customdb\Moduledb\Api\Data\TicketInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket;
use Customdb\Moduledb\Model\ResourceModel\TicketRepository;
//use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket\CollectionFactory;
 
    class InsertInterface extends Action
    {
        TicketRepository $ticketRepo;

        protected function __construct(Context $context, TicketFactory $ticketF, TicketRepository $ticketRepo, TicketInterface $ticketInterface)
        {

            $this->ticketFactory = $ticketF;
            $this->ticketRepo = $ticketRepo;
            $this->ticketInterface = $ticketInterface;
            parent::__construct($context);
        }

    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        echo (" ci arrivo");
        $this->ticketRepo->save($this->ticketInterface);

        return $page;
    }
   

        
}