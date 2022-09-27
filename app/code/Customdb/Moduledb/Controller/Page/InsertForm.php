<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;

//https://enrico.reflexmania.it/customdb/page/insertform
    class InsertForm extends Action
    {

       protected $ticketFactory;
       
        protected function __construct(Context $context, TicketFactory $ticketF)
        {

            $this->ticketFactory = $ticketF;
            parent::__construct($context);
        }

    public function execute() {

         /** @var Json $jsonResult */
        $PageResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);

        
      if (isset($_POST["nome"]))
        {
            $nome = htmlspecialchars($_POST["nome"],ENT_QUOTES);
            $cognome = htmlspecialchars($_POST["cognome"],ENT_QUOTES);
            $number_id = htmlspecialchars($_POST["number_id"],ENT_QUOTES);
            $form = array('nome' => $nome, 'cognome' => $cognome, 'number_id' =>$number_id);
            echo json_encode($form);
            
            $ticket = $this->ticketFactory->create();
            foreach($form as $key => $value) {
                $ticket->setData($key,$value);
                echo("dati inseriti");
                echo "<br>";
            }
      

            $ticket->save();

        } 
        else 
        {
            //$user = null;
            echo "no username supplied";
        } 
        
      return $PageResult;
    }
   

        
}
    
