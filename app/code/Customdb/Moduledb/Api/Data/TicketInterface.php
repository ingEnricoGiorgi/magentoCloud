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
    const TICKET_ID="ticket_id";
    const TICKET_NOME="nome";
    const TICKET_COGNOME="cognome";
    const NUMBER_ID="number_id";

    /**
     * @return int
     */
    public function getTicketId();

     /**
     * @param int $ticketId
     * @return int
     */
    public function setTicketId($ticketId); 


    /**
     * @return int
     */
    public function getNome();

     /**
     * @param int $ticketId
     * @return int
     */
       
     public function setNome($ticketNome); 


    /**
     * @return int
     */
    public function getCognome();

     /**
     * @param int $ticketId
     * @return int
     */
    public function setCognome($ticketCognome); 


        /**
     * @return int
     */
    public function getNumberId();

     /**
     * @param int $ticketId
     * @return int
     */
    public function setNumberId($ticketNumberId); 
    
}
