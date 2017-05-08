<?php
/**
 * @author    Sven Mäurer <sven.maeurer@jtl-software.com>
 * @copyright 2010-2013 JTL-Software GmbH
 */

namespace jtl\Connector\WooCommerce\Logger;

use jtl\Connector\Core\Logger\Logger;

/**
 * Class ControllerLogger has to be used by controllers.
 * Predefined are the file which is controller.log and the level which is debug.
 * @package jtl\Connector\WooCommerce\Logger
 */
class ControllerLogger extends WooCommerceLogger
{
    protected function getLevel()
    {
        return Logger::WARNING;
    }

    protected function getFilename()
    {
        return 'controller';
    }
}
