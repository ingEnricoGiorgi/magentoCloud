<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Action\Action;
use Magento\Catalog\Model\Product;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;

class AddToCart extends Action
{
    protected $product;
    protected $getRequest;
    protected $getResponse;
    protected $eventManager;
    
    public function __construct(EventManager $eventManager,Product $product, RequestInterface $getRequest, ResponseInterface $getResponse)
    {
        $this->product = $product;
        $this->getRequest = $getRequest;
        $this->getProduct = $getResponse;
        $this->eventManager = $eventManager;
    }
        public function execute()
    {
            $this->eventManager->dispatch(
                'checkout_cart_add_product_complete',
                ['product' => $this->product, 'request' => $this->getRequest(), 'response' => $this->getResponse()]
            );
    }
}

