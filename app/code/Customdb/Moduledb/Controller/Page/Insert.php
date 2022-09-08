<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;


class Insert extends Action
{
    protected $ticketFactory;

    public function __construct(Context $context,TicketFactory $ticketF)
    {
        $this->ticketFactory = $ticketF;
        parent::__construct($context);
    }

    public function execute()
    {
        $content="prova";
        $ticket = $this->ticketFactory->create();
        $ticket->setData("nome",$content);
        echo("dati inseriti");
        $ticket->save();
    }
}