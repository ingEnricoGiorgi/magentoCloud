<?php
namespace Custom\Module\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Tickets extends Action
 {
//private $clients = array("enrico", "francesco", "daniele");
//private $user="enrico";

public function execute(){

    /** @var Json $jsonResult */
    $jsonResult=$this->resultFactory->create(ResultFactory::TYPE_JSON);
    $jsonResult->setData(['message'=>'My first Page']);
    return $jsonResult;
}
   


}