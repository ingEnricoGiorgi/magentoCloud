<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;


class Delete extends Action
{
    protected $ticketFactory;

    public function __construct(Context $context,TicketFactory $ticketF)
    {
        $this->ticketFactory = $ticketF;
        parent::__construct($context);
    }
//https://enrico.reflexmania.it/customdb/page/update
    public function execute()
    {
            
            $id=2;
            $ticket = $this->ticketFactory->create();
            echo("dati cancellati");
            $result=$ticket->load($id);
            $result->delete();
            $result->save();
 
    }
}
