<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Customdb\Moduledb\Api\Data;

/**
 * Interface TicketInterface
 * @api
 * @since 100.1.0
 */
interface TicketInterface
{
    const NUMBER_ID="number_id";
    const TICKET_ID="ticketid";
    const TICKET_NOME="nome";
    const TICKET_COGNOME="cognome";
    const TICKET_EMAIL="email";
  

    /**
     * @return int
     */
    public function getTicketId();

     /**
     * @param int $ticketId
     * @return int
     */
    public function setTicketId($data); 


    /**
     * @return int
     */
    public function getNome();

     /**
     * @param int $ticketNome
     * @return int
     */
       
     public function setNome($data); 


    /**
     * @return int
     */
    public function getCognome();

     /**
     * @param int $ticketCognome
     * @return int
     */
    public function setCognome($data); 


        /**
     * @return int
     */
    public function getNumberId();

     /**
     * @param int $ticketNumber
     * @return int
     */
    public function setNumberId($data); 
    
    /**
     * @return int
     */
    public function getEmail();

     /**
     * @param int $ticketNumber
     * @return int
     */
    public function setEmail($data); 
    
}
