<?php

namespace Custom\Module\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Secondo extends Action
 {
//private $clients = array("enrico", "francesco", "daniele");
//private $user="enrico";

    public function execute() {

        $users=$this->getUserList();

    /** @var Json $jsonResult */
    $resultPage=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
 //c->v   v->linkcontroller che passa un parametro dal controller alla vista
 


    return $resultPage;
    }

    

}
