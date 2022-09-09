<?php
namespace Customdb\Moduledb\Block;



class Custom extends \Magento\Framework\View\Element\Template
{        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,   
        \Magento\Customer\Model\Customer $customer, 
        \Magento\Customer\Model\Session $session,
        \Magento\Catalog\Model\Product $product,
        
        array $data = []
    )
    {   
        $this->session=$session;
        $this->customer=$customer;  //le istruzioni van messe prima del construct
        $this->product=$product;
        parent::__construct($context, $data);
        
    }
    public function print(){

             
        $var="blockserv1";
        return $var;
       
    }
    public function getCustomerName(){
        $idcliente=1;
        $objcliente=$this->customer->load($idcliente);
        return $objcliente->getFirstname();

    }
    public function isCustomerLoggedin(){
        if($this->session->isLoggedIn()){
            $url="https://enrico.reflexmania.it/index.php/default/customer/account/";
        }else{
            
            $url="https://enrico.reflexmania.it/index.php/customer/account/login";
        }
        
        return $url;
    }
    public function getid(){
        if($this->session->isLoggedIn()){
           return $this->session->getCustomerId();
        }else{
            
            return null;
        }
       
    }
    public function getCustomerInfo($id){
        $idcliente=$id;
        $objcliente=$this->customer->load($idcliente);
        
       // $objcliente->getEmail();

        return $objcliente->getName();
    }
    public function getemail($id){
        $idcliente=$id;
        $objcliente=$this->customer->load($idcliente);
       
       // $objcliente->getEmail();

        return  $this->customer->getEmail();
    }
    
    public function getidBySku()
    {
        $sku="WP02-28-Blue";
        $prod=$this->product->getIdBySku($sku);
       
        return  $prod;
     
    }
    
}  
 
    ?>
