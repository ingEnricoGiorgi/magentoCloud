<?php

namespace Its\NewsletterPopup\Block;

use Its\NewsletterPopup\Helper\Config as NewsletterPopupConfig;
use Magento\Framework\View\Element\Template\Context;

class NewsletterPopup extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Context
     */
    protected $context;
    /**
     * @var NewsletterPopupConfig
     */
    protected $configHelper;

    /**
     * @param Context $context
     * @param NewsletterPopupConfig $configHelper
     */
    public function __construct(
        Context               $context,
        NewsletterPopupConfig $configHelper
    )
    {
        parent::__construct($context);
        $this->configHelper = $configHelper;
    }

    /**
     * Returns Newsletter Popup config
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'delay' => $this->_getPopupDelay(),
            'title' => $this->_getPopupTitle(),
            'lifetime' => $this->_getPopupLifetime()
        ];
    }

    /**
     * Newsletter Popup Text.
     *
     * @return string
     */
    public function getPopupText()
    {
        return $this->configHelper->getConfigParam(NewsletterPopupConfig::POPUP_TEXT);
    }

    /**
     * Newsletter Popup Delay.
     *
     * @return string
     */
    protected function _getPopupDelay()
    {
        return (string)$this->escapeHtml($this->configHelper->getConfigParam(NewsletterPopupConfig::POPUP_DELAY));
    }

    /**
     * Newsletter Popup Title.
     *
     * @return string
     */
    protected function _getPopupTitle()
    {
        return (string)$this->escapeHtml($this->configHelper->getConfigParam(NewsletterPopupConfig::POPUP_TITLE));
    }

    /**
     * Newsletter Popup Lifetime.
     *
     * @return string
     */
    protected function _getPopupLifetime()
    {
        return (string)$this->escapeHtml($this->configHelper->getConfigParam(NewsletterPopupConfig::POPUP_LIFETIME));
    }

    /**
     * Newsletter Popup Blockid.
     *
     * @return string
     */
    public function getPopupBlockid()
    {
        return (string)$this->escapeHtml($this->configHelper->getConfigParam(NewsletterPopupConfig::POPUP_BLOCKID));
    }
}
