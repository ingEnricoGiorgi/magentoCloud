<?php
declare(strict_types = 1);

namespace Dimarcantonio\Downloadarea\Controller\Rest;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;



//STA ROBA é UN CONTROLLOer
class Index extends Action

{

/**
* Scope Config
*
* @var \Magento\Framework\App\Config\ScopeConfigInterface
*/
protected $scopeConfig;

/**
* Guzzle Client Factory
*
* @var \GuzzleHttp\ClientFactory
*/
protected $clientFactory;

/**
* Guzzle Response Factory
*
* @var \GuzzleHttp\Psr7\ResponseFactory
*/
protected $responseFactory;

/**
* Foscarini Services Logger
*
* @var \Foscarini\Services\Logger\Logger
*/
protected $logger;

/**
* Check Basket Service
*
* @var \Foscarini\Services\Model\CheckBasket
*/
protected $checkBasket;

/**
* Get Delivery Date
*
* @var \Foscarini\Services\Model\GetDeliveryDate
*/
protected $getDeliveryDate;

/**
* Quote Factory
*
* @var \Magento\Quote\Model\QuoteFactory
*/
protected $quoteFactory;

/**
* Customer Factory
*
* @var \Magento\Customer\Model\CustomerFactory
*/
protected $customerFactory;

/**
* Json Helper
*
* @var \Magento\Framework\Serialize\Serializer\Json
*/
protected $jsonHelper;




public function __construct(
\Magento\Framework\App\Action\Context $context,
\Magento\Framework\View\Result\PageFactory $resultPageFactory,
\Magento\Customer\Model\Session $customer,
\Magento\Framework\HTTP\Client\Curl $curl,
\Magento\Customer\Model\Session $customerSession,
\Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface,
\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
\GuzzleHttp\ClientFactory $clientFactory,
\GuzzleHttp\Psr7\ResponseFactory $responseFactory,
\Dimarcantonio\Services\Logger\Logger $logger,
\Magento\Framework\Serialize\Serializer\Json $jsonHelper



) {
$this->resultPageFactory = $resultPageFactory;
$this->_customerSession = $customer;
$this->session = $customerSession;
$this->customerRepositoryInterface = $customerRepositoryInterface;

$this->_curl = $curl;
$this->scopeConfig = $scopeConfig;
$this->clientFactory = $clientFactory;
$this->responseFactory = $responseFactory;
$this->logger = $logger;
$this->jsonHelper = $jsonHelper;

parent::__construct($context);
}



/**
* Confirm Order by API request
*
* @param string $incrementId
* @param integer $orderId
* @param integer $cartId
* @param string $company
* @param string $rifOrderClient
* @param string $deliveryDate
* @param boolean $alignPromisedDeliveryDate
* @param boolean $telephoneBooking
*
* @return boolean|mixed
* @throws \Exception
*/
public function execute()
{


$endpoint = "http://127.0.0.1/magento";

/* $enabled = $this->scopeConfig->getValue('foscarini_services/confirm_order/enabled');
if(!$enabled) {
throw new \Exception("Cancel order service disabled");
}*/

//try {

$this->logger->debug("Avvio Filtraggio Server");
//$this->logger->debug(json_encode($data));

// $endpoint = $this->scopeConfig->getValue('foscarini_services/filter/endpoint');
$path="";// $path = "list-all-docs"; //$this->scopeConfig->getValue('foscarini_services/confirm_order/path');
//$username = $this->scopeConfig->getValue('foscarini_services/confirm_order/username');
//$password = $this->scopeConfig->getValue('foscarini_services/confirm_order/password');

//$credentials = base64_encode($username . ':' . $password);
// $client = $this->clientFactory->create(['config' => ['base_uri' => $endpoint, 'uri' => $path]]);
$client = $this->clientFactory->create();
// print_R($client);exit;
//$serviceResponse = $client->request(\Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_POST, $path, ['body' => json_encode($data), 'headers' => ['Authorization' => 'Basic ' . $credentials, 'Content-Type' => 'application/json']]);
$data=['key'=>"val"];
$serviceResponse = $client->request(\Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET, $endpoint,['body' => json_encode($data), 'headers' => ['Content-Type' => 'application/json']]);

$serviceResponseContent = $serviceResponse->getBody()->getContents();
$this->logger->debug($serviceResponseContent);
$serviceResponseContent = $this->jsonHelper->unserialize($serviceResponseContent);

print_R($serviceResponseContent);
exit;
return $serviceResponseContent;
/* } catch(\Exception $ex) {
$this->logger->debug($ex->getMessage());
throw new \Exception("Unable to confirm order");
}*/
}


}