<?php
/**
 * @author    Sven Mäurer <sven.maeurer@jtl-software.com>
 * @copyright 2010-2013 JTL-Software GmbH
 */

namespace jtl\Connector\WooCommerce\Controller\Traits;

trait PullTrait
{
    /**
     * Called on a pull on the main model controllers including their sub model controllers.
     *
     * @param integer $limit The limit which will be null for sub models.
     *
     * @return array A list of models resulting from the pull query.
     */
    abstract protected function pullData($limit);
}