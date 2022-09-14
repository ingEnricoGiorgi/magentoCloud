<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;

    class DeleteForm extends Action
    {
       
        protected function __construct(Context $context, TicketFactory $ticketF)
        {

            $this->ticketFactory = $ticketF;
            parent::__construct($context);
        }

    public function execute()
    {
         /** @var Json $jsonResult */
        $PageResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);

        echo (" ci arrivo");
        /*    foreach($_POST as $key => $value) {
            echo "Key=" . $key . ", Value=" . $value;
            
            echo "<br>";
        }
        exit; */
        if (isset($_POST["ticketid"]))
        {

            $number_id = htmlspecialchars($_POST["number_id"],ENT_QUOTES);
            $send = htmlspecialchars($_POST["send"],ENT_QUOTES);
            $form = array('number_id' =>$number_id, 'send'=>$send);
            echo json_encode($form);
            
            $ticket = $this->ticketFactory->create();
            $result=$ticket->load($number_id);
            $result->delete();
            echo("dati cancellati");
            $result->save();
            

        } 
        else 
        {
            //$user = null;
            echo "no username supplied";
        } 
        
      return $PageResult;
    }
   

        
}
    
