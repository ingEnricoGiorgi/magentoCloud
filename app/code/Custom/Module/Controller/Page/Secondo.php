<?php

namespace Custom\Module\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Secondo extends Action
 {
//private $clients = array("enrico", "francesco", "daniele");
//private $user="enrico";

    public function execute(){

    /** @var Json $jsonResult */
    $jsonResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
    
    return $jsonResult;
    }
}
