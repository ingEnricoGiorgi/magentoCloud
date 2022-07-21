<?php

namespace Custom\Module\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Prova extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {   
        /* @var Template $block */
        //$block = $page->getLayout()->getBlock('prova');
       
   /*     $names= [ "enrico","marzio","mario"];
        foreach($names as $val)
        {
            echo "nome:".$val;
        }
        
        $names2= array("nome"=> "enrico", "nome1"=>"marzio", "nome2"=>"mario");


        foreach($names2 as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }


        $names3= array(
         "utent1"=> array("nome"=>"enrico1","cognome"=>"giorgi1"),
         "utente2"=>array("nome"=>"enrico2","cognome"=>"giorgi2"), 
         "utente3"=>array("nome"=>"enrico3","cognome"=>"giorgi3")
        );
        
        foreach($names3 as $x => $x_value) {
           // echo "Key=" . $x;
           // print_r($x_value);
            foreach($x_value as $key=> $value) {
                echo  $key." ". $value;
                echo "<br>";
            }

            echo "<br>";
            }
       
        $names3= array(
            "utente1"=> array("nome"=>"enrico1","cognome"=>"giorgi1"),
            "utente2"=>array("nome"=>"enrico2","cognome"=>"giorgi2"), 
            "utente3"=>array("nome"=>"enrico3","cognome"=>"giorgi3")
           );
        $names4=json_encode($names3);
        echo $names4;
        //{"utent1":{"nome":"enrico1","cognome":"giorgi1"},"utente2":{"nome":"enrico2","cognome":"giorgi2"},"utente3":{"nome":"enrico3","cognome":"giorgi3"}}
        
        $names5=json_decode($names4,true);
        // echo $names5;
       // print_r($names5);
        $names5["utente1"]["nome"];
        print_r($names5);
         */
        return $this->resultPageFactory->create();
        
    }

}