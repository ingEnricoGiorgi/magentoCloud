<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;


class Update extends Action
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
            
            $id=1;
            $new_content="aggiornamento";   
            $ticket = $this->ticketFactory->create();
            echo("dati aggiornati");
            $result=$ticket->load($id);
            $result->setData("nome", $new_content);
            $result->save();
 
    }
}

