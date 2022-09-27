<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

//https://enrico.reflexmania.it/customdb/page/ProvaLogger
    class ProvaLogger extends Action
    {
        private $logger;

     public function __construct(\Psr\Log\LoggerInterface $logger, Context $context)
     {
         $this->logger = $logger;
         parent::__construct($context);
     }

    public function execute()
    {

        echo "prova";
        
        try {
            $message="prova";
           
         $this->logger->info($message);

        } catch (\Exception $e) {
            $this->logger->critical('Error message', ['exception' => $e]);
        }
        
    }
        
}
    
