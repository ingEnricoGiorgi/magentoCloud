<?php

namespace Its\Custom\Plugin;

use Magento\Catalog\Helper\Product\View as ProductViewHelper;
use Magento\Framework\View\Result\Page;

/**
 * Class AddBodyClassToProductPagePlugin
 */
class AddBodyClassToProductPagePlugin
{
    /**
     * Adding a custom class to body
     *
     * @param ProductViewHelper $subject
     * @param Page $resultPage
     * @param $product
     * @param $params
     *
     * @return array
     */
    public function beforeInitProductLayout(
        ProductViewHelper $subject,
        Page              $resultPage,
                          $product,
                          $params
    ): array
    {
        $pageConfig = $resultPage->getConfig();

        $pageConfig->addBodyClass('my-new-body-class');

        return [$resultPage, $product, $params];
    }
}
