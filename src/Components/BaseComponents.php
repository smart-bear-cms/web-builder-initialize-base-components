<?php
/**
 * Project template-web-builder-sdk-module
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 23/08/2022
 * Time: 09:13
 */

namespace nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Components;


use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Base\BaseCore;
use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Database\Database;

/**
 * Class BaseComponents
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Components
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseComponents extends BaseCore
{
    /**
     * BaseComponents constructor.
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
        $this->db = new Database($options);
    }
}
