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
    
    
    $block = $resultPage->getLayout()->getBlock('cmid_page_secondo');
    //set dataaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  e getData è in nomefile.phtml
    $block->setData('my_key', $users);

    return $resultPage;
    }
    public function getUserList()
	{
       

        $dati=[
            "utente1" =>["nome1","cognome1",1,"email@1","testo1"],
            "utente2" =>["nome2","cognome2",1,"email@2","testo2"],
            "utente3" =>["nome3","cognome3",1,"email@3","testo3"],
        ];
        
       
		return $dati;
	}
    //c->v   v->linkcontroller che passa un parametro dal controller alla vista

}
