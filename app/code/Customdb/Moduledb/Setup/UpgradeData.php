<?php

namespace Customdb\Moduledb\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\Mageplaza\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
				'name'         => "enrico",
				'cognome'      => "giorgi",
				'e-mail'       => 'enrico.giorgi92@gmail.com',
				'idticket'         => 'magento 2, helloworld',
				'request'       => "cambio gomme",
                'content'       => "4 ruote invernali"
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}