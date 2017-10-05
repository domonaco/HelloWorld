<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Helper
 * @author Domenico Monaco
 * @package Frontend
 * @version 0.1.0
 */
class Monaco_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('monaco_helloworld')->isEnabled();
    }
    /**
     * isEnabled
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('monaco_helloworld')->getConfig('configuration/message');
    }
}

