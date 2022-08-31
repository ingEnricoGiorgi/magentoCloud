<?php

namespace Custom\Module\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Custom\Module\Helper\InvioCurl;
use Custom\Module\Helper\InvioCurldue;
use Magento\Framework\App\Action\Context;
//Custom\Module\Controller\Page\Blocklayout\Interceptor

    class Blocklayout extends Action
    {
        protected $helper;
        protected $context;
        protected function __construct(InvioCurldue $helper,Context $context)
        {
            $this->helper = $helper;
            $this->context = $context;
            parent::__construct($context);
        }

    public function execute()
    {

        //$post=(array)$this->getRequest()->getPost();  
        /** @var Json $jsonResult */
        $jsonResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
        //set dataaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  e getData è in nomefile.phtml
        
    // $name=$_POST["fname"];
    // $name = $this->getRequest()->getPost("fname");

        if (isset($_POST["fname"]))
        {
            $nome = htmlspecialchars($_POST["fname"],ENT_QUOTES);
            $cognome = htmlspecialchars($_POST["lname"],ENT_QUOTES);
            $email = htmlspecialchars($_POST["email"],ENT_QUOTES);
            $idticket = htmlspecialchars($_POST["idticket"],ENT_QUOTES);
            $richiesta = htmlspecialchars($_POST["request"],ENT_QUOTES);
            $contenuto = htmlspecialchars($_POST["content"],ENT_QUOTES);

        //   echo "username: $nome $cognome ";
            
        //  echo "email: $email";
        
        //   echo "idticket: $idticket";
            
        //   echo "request: $richiesta";
            
        //    echo "content: $contenuto";
            $form = array('nome' => $nome, 'cognome' => $cognome, 'email' => $email, 'idticket' => $idticket, 'request' => $richiesta, 'content'=>$contenuto);
            echo json_encode($form);
            $this->helper->invia();
            echo "curl ok";
                } 
        else 
        {
            //$user = null;
            echo "no username supplied";
        }
        
        
   // exit;


    // $jsonResult->setData(['message'=>'My first Page']);
      return $jsonResult;
    }
   

        
}
    
