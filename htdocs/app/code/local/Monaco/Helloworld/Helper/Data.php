<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Helper
 * @author Domenico Monaco
 * @package frontend
 * @version 0.1.0
 */

class Monaco_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     *
     * @param string $config
     * @return string
     *
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('monaco_helloworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Return true if this module is enabled
     * @return bool
     *
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }
}
