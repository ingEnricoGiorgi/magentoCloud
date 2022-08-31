<?php
declare(strict_types=1);
namespace Custom\Module\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Primo extends Action
 {
//private $clients = array("enrico", "francesco", "daniele");
//private $user="enrico";

public function execute(){

    $this->checklist();
  
   
    /** @var Json $jsonResult */
    $jsonResult=$this->resultFactory->create(ResultFactory::TYPE_JSON);
    $jsonResult->setData(['message'=>'My first Page']);
    return $jsonResult;
}

    /*
    $clients = array("enrico", "francesco", "daniele");
    $user="enrico";
    echo"ciao";
 
    foreach ($clients as $value) {
        if($value==$user){
            echo "l'utente è gia cliente";
        }
      }
      exit("default");

      
     
      */
        /*
      $clienti['nome',['martina','matteo']]
      if(in_array('martina', $clienti['nome']))
      {
        echo "il cliente è presente;
      }
      */

    public function checklist(){
        $clients = array("enrico", "francesco", "daniele");
        $user="enrico";
        echo"ciao";
 
    foreach ($clients as $value) {
        if($value==$user){
            echo "l'utente è gia cliente";
        }
      }
     
}
   


}