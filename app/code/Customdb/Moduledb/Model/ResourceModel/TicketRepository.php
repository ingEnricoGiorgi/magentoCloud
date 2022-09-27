<?php
namespace Customdb\Moduledb\Model\ResourceModel;

use Customdb\Moduledb\Api\Data\TicketInterface;
use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Api\TicketRepositoryInterface;
use Customdb\Moduledb\Model\ResourceModel\Ticket as TicketResourceModel;


class TicketRepository implements TicketRepositoryInterface
{   
    private $ticketFactory;
    private $ticketResourceModel;
   

    public function __construct(TicketFactory $ticketFactory, TicketResourceModel $ticketResourceModel)
    {
      $this->ticketFactory = $ticketFactory;
      $this->ticketResourceModel = $ticketResourceModel;
     
    }
    public function getById(int $id):TicketInterface  //TicketFactory
    {
        $ticket = $this->ticketFactory->create();
        $result=$ticket->load($id);
        return $result; 
    }

    public function save(TicketInterface $ticket): Bool
    {
       
             $ticket->save();
             return true;
        
    }
    public function delete(int $ticket): Bool
    {
       
        $idticket = $this->getById($ticket);
        $this->ticketResourceModel->delete($idticket);
        return true;
        
        
    }
    public function getIdCurl(int $id):TicketInterface  //TicketFa
    {
        $ticket = $this->ticketFactory->create();
        $result=$ticket->load($id);
        return $result; 
    }

    public function saveArray(Array $ticketArray): Bool
    {
       print_r($ticketArray);
       exit;
        $ticket = $this->ticketFactory->create();
        foreach($ticketArray as $key => $value) {
            $ticket->setData($key,$value);
            echo("dati inseriti");
            echo "<br>";
        }
        $ticket->save();
             return true;
        
    }
        /**
         * @param String $ticketPost
         * @return bool
         */
        public function casoBase(String $token, String $nome, String $cognome, String $ticketid, String $email): Bool
        {
    
        
            $ticket = $this->ticketFactory->create();
                if($token=="tokenmagento"){
                    echo"token autorizzato magento";
                    echo "<br>";
                $ticket->setData("nome",$nome);
                $ticket->setData("cognome",$cognome);
                $ticket->setData("ticketid",$ticketid);
                $ticket->setData("email",$email);
                echo("dati inseriti");
                echo "<br>";
                $ticket->save();
            return true;
            
        }else{
        
            return false;
        }
        
    }
    public function postIdCurl(int $id):TicketInterface  //TicketFa
    {
        $ticket = $this->ticketFactory->create();
        $result=$ticket->load($id);
        return $result; 
    }
}