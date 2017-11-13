<?php
/**
 * Helper description
 *
 * @category   IE
 * @package    IE_HoneySearch
 * @author     Callan Milne <callan.milne@ie.com.au>
 */
class IE_HoneySearch_Helper_Data extends Mage_Core_Helper_Abstract
{
    const CAPTCHA_INPUT_FIELD_NAME = 'search_hp';

    public function getCaptchaInputName ()
    {
        return self::CAPTCHA_INPUT_FIELD_NAME;
    }
}
