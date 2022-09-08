<?php
declare(strict_types = 1);

namespace Customdb\Moduledb\Helper;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

use \Magento\Framework\App\Helper\AbstractHelper;


class Curl extends AbstractHelper
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
* Json Helper
*
* @var \Magento\Framework\Serialize\Serializer\Json
*/
protected $jsonHelper;




public function __construct(
\Magento\Framework\View\Result\PageFactory $resultPageFactory,
\Magento\Framework\HTTP\Client\Curl $curl,
\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
\GuzzleHttp\ClientFactory $clientFactory,
\GuzzleHttp\Psr7\ResponseFactory $responseFactory,
\Magento\Framework\Serialize\Serializer\Json $jsonHelper
) {
$this->resultPageFactory = $resultPageFactory;
$this->_curl = $curl;
$this->scopeConfig = $scopeConfig;
$this->clientFactory = $clientFactory;
$this->responseFactory = $responseFactory;
$this->jsonHelper = $jsonHelper;
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
public function invia()
{
  //   echo "non funziona";
  //   exit;
// }
//$endpoint = "127.0.0.1:8000/magento";
//$endpoint = "localhost:8000/magento";
//$endpoint = "176.58.113.6/joe";//cloud fra
//curl http://server:5050/a/c/getName?param0=foo&param1=bar
$endpoint = "139.162.211.87/customdb/page/createform/";
/* $enabled = $this->scopeConfig->getValue('foscarini_services/confirm_order/enabled');
if(!$enabled) {
throw new \Exception("Cancel order service disabled");
}*/

//try {

//$this->logger->debug("Avvio Filtraggio Server");
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
// $serviceResponse = $client->request(\Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET, $endpoint,['body' => json_encode($data), 'headers' => ['Content-Type' => 'application/json']]);
$serviceResponse = $client->request(\Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET,$endpoint,[/* 'proxy'=> 'tcp://localhost:8000', */'body' => json_encode($data), 'headers' => ['Content-Type' => 'application/json']]);

   // echo $data;
    echo "bella";
    
$serviceResponseContent = $serviceResponse->getBody()->getContents();
//$this->logger->debug($serviceResponseContent);
$serviceResponseContent = $this->jsonHelper->unserialize($serviceResponseContent);

print_r($serviceResponseContent);
exit;
return $serviceResponseContent;
/* } catch(\Exception $ex) {
$this->logger->debug($ex->getMessage());
throw new \Exception("Unable to confirm order");
}*/
}


}