<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Database;

use nguyenanhung\Platforms\WebBuilderSDK\InitializeCoreServices\Database\Database as InitializeDatabase;

/**
 * Class Database
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Database extends InitializeDatabase
{
    /**
     * Database constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }
}
