<?php
/**
 * Captcha
 *
 * @category   IE
 * @package    IE_HoneySearch
 * @author     Callan Milne <callan.milne@ie.com.au>
 */
class IE_HoneySearch_Block_Captcha extends Mage_Core_Block_Template
{
    protected $_template = 'ie/honeysearch/captcha.phtml';

    protected function _construct ()
    {
        parent::_construct();
    }

    public function getCaptchaInputName ()
    {
        return Mage::helper('ie_honeysearch')->getCaptchaInputName();
    }
}
