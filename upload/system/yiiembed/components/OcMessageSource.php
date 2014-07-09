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

    /**
     * @param $category
     * @param $language
     * @return array|void
     */
    protected function loadMessages($category, $language)
    {
        Yii::app()->registry->get('load')->language($category);
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
        $message = Yii::app()->registry->get('language')->get($message);
        if (!$message) {
            $message = parent::translateMessage($category, $message, $language);
        }
        return $message;
    }
}
