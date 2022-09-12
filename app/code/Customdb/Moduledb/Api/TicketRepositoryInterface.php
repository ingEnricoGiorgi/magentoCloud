<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Customdb\Moduledb\Api;

/**
 * Interface TicketRepositoryInterface
 * @api
 * @since 100.1.0
 */
interface TicketRepositoryInterface
{
    /**
     * @param int $id
     */
    public function getById($id);

    /**
     * @param TicketRepositoryInterface $ticket
     * * @return void
     */
    public function save(TicketRepositoryInterface $ticket);

    /**
     * @param TicketRepositoryInterface ticket
     * @return void
     */
    public function delete(TicketRepositoryInterface $ticket);

}
