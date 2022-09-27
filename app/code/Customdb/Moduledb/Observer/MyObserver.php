<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MyCompany\MyModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class MyObserver implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }

    public function execute(Observer $observer)
    {
        
        $displayText = $observer->getData('myEventData');
		echo $displayText->getText() . " - Event </br>";
		$displayText->setText('Execute event successfully.');

		return $this;
    }
}
