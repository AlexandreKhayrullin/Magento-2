<?php

namespace Gigya\GigyaIM\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Monolog\Logger\Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/gigya.log';
}
