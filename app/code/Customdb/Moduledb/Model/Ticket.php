<?php
namespace Customdb\Moduledb\Model;

use Customdb\Moduledb\Api\Data\TicketInterface;
use Magento\Framework\Model\AbstractModel;
use Customdb\Moduledb\Model\ResourceModel\Ticket as ResourceModel;

class Ticket extends AbstractModel implements TicketInterface
{    
    
    protected function _construct()
    {
       
        $this->_init(ResourceModel::class);
    }

    /*
    * Di questi metodi non abbiamo bisogno perchè sono
    * gia gestiti dall'abstract model */

    public function getTicketId()
    {
    return $this->getData(self::TICKET_ID);
    } 


    public function setTicketId($data){
    
    return $this->setData(self::TICKET_ID,$data);
    } 


    public function getNome(){
    return $this->getData(self::TICKET_NOME);
    }

     
       
     public function setNome($data){
        return $this->setData(self::TICKET_NOME,$data);
     }


    
    public function getCognome(){
    return $this->getData(self::TICKET_COGNOME);
    }

     
    public function setCognome($data){
        return $this->setData(self::TICKET_COGNOME,$data);
    } 


    public function getNumberId(){
    return $this->getData(self::NUMBER_ID);
    }

    
    public function setNumberId($data){
        return $this->setData(self::NUMBER_ID,$data);
    }
     
    public function getEmail(){
        return $this->getData(self::TICKET_EMAIL);
    }

 
    public function setEmail($data){
        return $this->setData(self::TICKET_EMAIL,$data);

    } 
}