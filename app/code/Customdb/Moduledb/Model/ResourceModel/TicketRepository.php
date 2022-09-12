<?php
namespace Customdb\Moduledb\Model\ResourceModel;

use Customdb\Moduledb\Api\Data\TicketInterface;
use Customdb\Moduledb\Api\Data\TicketRepositoryInterface;
use Costumdb\Moduledb\Model\ResourceModel\Ticket;

class TicketRepository implements TicketRepositoryInterface
{   
    private $ticketFactory;
    private $ticketResourceModel;

    public function __construct(TicketFactory $ticketFactory, Ticket $ticketResourceModel)
    {
      $this->ticketFactory = $ticketFactory;
      $this->ticketResourceModel = $ticketResourceModel;
    }
    public function getById(int $id):TicketInterface
    {
        // TODO: Implement getById() method
    }

    public function save(TicketInterface $ticket): TicketInterface
    {

    }
    public function delete(TicketInterface $ticket): TicketInterface
    {

    }
}