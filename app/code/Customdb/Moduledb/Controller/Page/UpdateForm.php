<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;

    class UpdateForm extends Action
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
echo"CI ARRIVO?";
        
     if (isset($_POST["nome"]))
  // if($_POST['send']=='update') NON FUNZIONA
        {
            $nome = htmlspecialchars($_POST["nome"],ENT_QUOTES);
            $cognome = htmlspecialchars($_POST["cognome"],ENT_QUOTES);
            $ticketid = htmlspecialchars($_POST["ticketid"],ENT_QUOTES);
            $form = array('nome' => $nome, 'cognome' => $cognome, 'ticketid' =>$ticketid);
            echo json_encode($form);

            $ticket = $this->ticketFactory->create();
            $result=$ticket->load($ticketid);
            foreach($form as $key => $value) {
                
                $result->setData($key, $value);
                echo("dati aggiornati");
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
    
