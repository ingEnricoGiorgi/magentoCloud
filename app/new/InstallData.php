<?php

namespace Customdb\Moduledb\Setup;
use Magento\Framework\Setup\SetupInterface;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Mageplaza\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'name'         => "enrico",
			'cognome'      => "giorgi",
			'e-mail'       => 'enrico.giorgi92@gmail.com',
			'idticket'     => 'magento 2, helloworld',
			'request'       => "cambio gomme",
			'content'       => "4 ruote invernali"
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
