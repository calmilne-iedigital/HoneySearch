<?php
/**
 * Controller description
 *
 * @category   IE
 * @package    IE_HoneySearch
 * @author     Callan Milne <callan.milne@ie.com.au>
 */
class IE_HoneySearch_IndexController extends Mage_Core_Controller_Front_Action
{
    const ERROR_ROUTE = 'honeysearch/error/';

    /**
     * indexAction description
     *
     * @return void
     */
    public function indexAction ()
    {
        $this->_redirect(self::ERROR_ROUTE);
    }
}
