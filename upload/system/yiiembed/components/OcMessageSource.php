<?php

/**
 * OcMessageSource allows Yii translations using OpenCart language files.
 *
 * eg: Yii::t('module/bestseller', 'heading_title');
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 * @property Registry $registry
 */
class OcMessageSource extends CMessageSource
{

    /**
     * @var array
     */
    private $_messages = array();

    /**
     * @var Registry
     */
    private $_registry = array();

    protected function getRegistry()
    {
        if (!$this->_registry) {
            $this->_registry = Yii::app()->registry;
        }
        return $this->_registry;
    }

    /**
     * @param $category
     * @param $language
     */
    protected function loadMessages($category, $language)
    {
        $this->registry->load->language($category);
        $this->_messages[$category . '/' . $language] = true;
    }

    /**
     * @param $category
     * @param $message
     * @param $language
     * @return mixed
     */
    protected function translateMessage($category, $message, $language)
    {
        if (!isset($this->_messages[$category . '/' . $language])) {
            $this->loadMessages($category, $language);
        }
        $message = $this->registry->language->get($message);
        if (!$message) {
            $message = parent::translateMessage($category, $message, $language);
        }
        return $message;
    }
}
