<?php

namespace Customdb\Moduledb\Controller\Page;

use Customdb\Moduledb\Api\TicketRepositoryInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket;
use Customdb\Moduledb\Api\Data\TicketInterface;
//use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket\CollectionFactory;
 
    class InsertInt extends Action
    {
        protected $ticketRepo;
        protected $ticketFactory;
        protected $ticketInterface;

        protected function __construct(Context $context, TicketFactory $ticketF, TicketRepositoryInterface $ticketRepo, TicketInterface $ticketInterface)
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
        if (isset($_POST["nome"]))
        {
            $nome = htmlspecialchars($_POST["nome"],ENT_QUOTES);
            $cognome = htmlspecialchars($_POST["cognome"],ENT_QUOTES);
            $ticketid = htmlspecialchars($_POST["ticketid"],ENT_QUOTES);
            $form = array('nome' => $nome, 'cognome' => $cognome, 'ticketid' =>$ticketid);
            echo json_encode($form);
            
            $ticket = $this->ticketFactory->create();
           // $ticket = $this->ticketInterface->create();
                $ticket->setNome($nome);
                $ticket->setCognome($cognome);
                $ticket->setTicketId($ticketid);
                          
                $this->ticketRepo->save($ticket);
          //  $ticket->save();

        } 
        else 
        {
        
            echo "no username supplied";
        } 
        

     //   $this->ticketRepo->save($this->ticketInterface);

        return $page;
    }
        
}