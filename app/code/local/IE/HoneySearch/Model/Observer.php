<?php
/**
 * Observer description
 *
 * @category   IE
 * @package    IE_HoneySearch
 * @author     Callan Milne <callan.milne@ie.com.au>
 */
class IE_HoneySearch_Model_Observer
{
    /**
     * Action Predispatch Observer
     *
     * @param  Varien_Event_Observer $observer
     * @return $this
     */
    public function controllerActionPredispatch ()
    {
        $this->_checkCaptcha();
    }

    /**
     * Check Captcha
     *
     * Looks for captcha query param and throws a
     * `Mage_Core_Controller_Varien_Exception` if any value is found.
     *
     * @return $this
     */
    private function _checkCaptcha ()
    {
      $request = Mage::app()->getRequest();

      $captchaParam = $this->_getCaptchaInputName();
      $captchaValue = $request->getParam($captchaParam);

      if (!$captchaValue) {
        return $this;
      }

      $this->_captchaError();
    }

    /**
     * Get Captcha Input Name
     *
     * @return String The HTML input name for the captcha field
     */
    private function _getCaptchaInputName ()
    {
        return Mage::helper('ie_honeysearch')->getCaptchaInputName();
    }

    /**
     * Throw HoneySearch Captcha Error
     *
     * @throws Mage_Core_Controller_Varien_Exception Exception
     */
    private function _captchaError ()
    {
      $e = new Mage_Core_Controller_Varien_Exception();
      $e->prepareForward('index','error','honeysearch');
      throw $e;
    }
}
