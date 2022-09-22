<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Customdb\Moduledb\Api;

use Customdb\Moduledb\Api\Data\TicketInterface;
/**
 * Interface TicketRepositoryInterface
 * @api
 * @since 100.1.0
 */
interface TicketRepositoryInterface {
    
    /**
     * @param int $id
     * @return TicketInterface
     */
    public function getById(int $id);

    /**
     * @param TicketInterface $ticket
     * * @return bool
     */
    public function save(TicketInterface $ticket);

    /**
     * @param int ticket
     * @return bool
     */
    public function delete(int $ticket);

    /**
     * @param int $id
     * @return TicketInterface
     */
    public function getIdCurl(int $id);

    /**
     * @param Array $ticket
     * @return bool
     */
    public function saveArray(Array $ticket);
    
    /**
     * @param String $ticketPost
     * @return bool
     */
    public function casoBase(String $token, String $nome, String $cognome, String $ticketid, String $email);
}
