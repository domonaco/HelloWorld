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

class Monaco_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction
     *
     * Print 'hello' message
     *
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
