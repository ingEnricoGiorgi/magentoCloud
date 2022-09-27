<?php
/**
 * @author Vendor
 * @copyright Copyright (c) 2019 Vendor (https://www.vendor.com/)
 */
namespace Vendor\ModuleName\Logger\Handler;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger as MonologLogger;

/**
 * Class ErrorHandler
 */
class ErrorHandler extends BaseHandler
{
    /**
     * Logging level
     *
     * @var int
     */
    protected $loggerType = MonologLogger::ERROR;

    /**
     * File name
     *
     * @var string
     */
    protected $fileName = '/var/log/my_custom_logger/error.log';
}
