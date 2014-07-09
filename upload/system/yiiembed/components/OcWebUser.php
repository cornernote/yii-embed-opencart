<?php

/**
 * OcWebUser represents the persistent state for a Web application user in OpenCart.
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 */
class OcWebUser extends CWebUser
{

    /**
     * Initializes the application component.
     * Does the same as the parent, except does not open the session if autoStart is false.
     */
    public function init()
    {
        parent::init();
        if (Yii::app()->getSession()->autoStart)
            Yii::app()->getSession()->open();
        if ($this->getIsGuest() && $this->allowAutoLogin)
            $this->restoreFromCookie();
        elseif ($this->autoRenewCookie && $this->allowAutoLogin)
            $this->renewCookie();
        if ($this->autoUpdateFlash)
            $this->updateFlash();
        $this->updateAuthStatus();
    }

}
