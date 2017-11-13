<?php
/**
 * Controller description
 *
 * @category   IE
 * @package    IE_HoneySearch
 * @author     Callan Milne <callan.milne@ie.com.au>
 */
class IE_HoneySearch_ErrorController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction description
     *
     * @return void
     */
    public function indexAction ()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
