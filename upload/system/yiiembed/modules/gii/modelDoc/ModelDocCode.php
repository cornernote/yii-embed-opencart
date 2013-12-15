<?php

/**
 * ModelDocCode
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-dressing
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-dressing/master/license.txt
 */
class ModelDocCode extends CCodeModel
{
    /**
     * @var
     */
    public $modelClass;
    /**
     * @var string
     */
    public $modelPath = 'application.models';

    /**
     * @var
     */
    public $addModelMethodDoc = false;
    /**
     * @var string
     */
    public $beginBlock = ' * --- BEGIN GenerateProperties ---';
    /**
     * @var string
     */
    public $endBlock = ' * --- END GenerateProperties ---';

    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), array(
            array('modelClass, modelPath', 'filter', 'filter' => 'trim'),
            array('modelPath', 'required'),
            array('modelPath', 'match', 'pattern' => '/^(\w+[\w\.]*|\*?|\w+\.\*)$/', 'message' => '{attribute} should only contain word characters, dots, and an optional ending asterisk.'),
            array('modelClass', 'match', 'pattern' => '/^[a-zA-Z_]\w*$/', 'message' => '{attribute} should only contain word characters.'),
            array('modelPath', 'validateModelPath', 'skipOnError' => true),
            array('modelPath', 'sticky'),
        ));
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), array(
            'modelPath' => 'Model Path',
            'modelClass' => 'Model Class',
        ));
    }

    /**
     * @return array
     */
    public function requiredTemplates()
    {
        return array(
            'model.php',
        );
    }

    /**
     * @param $attribute
     * @param $params
     */
    public function validateModelPath($attribute, $params)
    {
        if (Yii::getPathOfAlias($this->modelPath) === false)
            $this->addError('modelPath', 'Model Path must be a valid path alias.');
    }

    /**
     *
     */
    public function prepare()
    {
        $this->files = array();
        $templatePath = $this->templatePath;
        foreach ($this->getModels() as $model) {
            $modelClass = get_class($model);
            $params = array(
                'model' => $model,
                'modelClass' => $modelClass,
            );
            $this->files[] = new CCodeFile(
                Yii::getPathOfAlias($this->modelPath) . '/' . $modelClass . '.php',
                $this->render($templatePath . '/model.php', $params)
            );
        }
    }

    /**
     * @return array
     */
    public function getModels()
    {
        $modelClass = $this->modelClass;
        if ($modelClass)
            return array(CActiveRecord::model($modelClass));
        $modelList = array();
        $files = CFileHelper::findFiles(Yii::getPathOfAlias($this->modelPath), array('fileTypes' => array('php'), 'level' => 0));
        foreach ($files as $file) {
            $modelClass = basename($file, '.php');
            // there is dot in modelName [$modelClass] probably a version conflict file
            if (strpos($modelClass, '.') !== false)
                continue;
            // load the model
            $model = new $modelClass;
            if (!$model || !is_subclass_of($model, 'CActiveRecord'))
                continue;
            $modelList[] = $model;
        }
        return $modelList;
    }

    /**
     * @param $modelClass string
     * @return string
     */
    public function getContent($modelClass)
    {
        $file = Yii::getPathOfAlias($this->modelPath) . '/' . $modelClass . '.php';
        if (!file_exists($file))
            throw new CException(strtr(Yii::t('dressing', 'File :file was not found.'), array(':file' => $file)));
        $content = file_get_contents($file);
        $content = explode($this->beginBlock, $content);
        if (!isset($content[1]))
            throw new CException(strtr(Yii::t('dressing', 'File :file does not contain the beginBlock :beginBlock.'), array(':beginBlock' => $this->beginBlock)));
        $content[1] = explode($this->endBlock, $content[1]);
        if (!isset($content[1][1]))
            throw new CException(strtr(Yii::t('dressing', 'File :file does not contain the endBlock :endBlock.'), array(':endBlock' => $this->endBlock)));
        $content[1] = $content[1][1];
        return $content;
    }

    /**
     * @param $modelName string
     * @return string
     */
    public function getTopContent($modelName)
    {
        $contents = $this->beginBlock . "\n" . $properties . "\n" . $this->endBlock;
        $fileName = Yii::getPathOfAlias($this->modelPath) . '/' . $modelName . '.php';
        if (file_exists($fileName)) {
            $fileContents = file_get_contents($fileName);
            $firstPos = strpos($fileContents, $this->beginBlock);
            $lastPos = strpos($fileContents, $this->endBlock);
            if ($firstPos && $lastPos && ($lastPos > $firstPos)) {
                $oldDoc = $this->getBetweenString($fileContents, $begin, $this->endBlock, false, false);
                return str_replace($oldDoc, $contents, $fileContents);
            }
            return $fileContents;
        }
        return '';
    }

    /**
     * @param $behavior
     * @return mixed
     */
    public function getBehaviorClass($behavior)
    {
        if (is_array($behavior))
            $behavior = $behavior['class'];
        $behavior = explode('.', $behavior);
        return $behavior[count($behavior) - 1];
    }

    /**
     * @param $behavior
     * @param array $ignoreMethods
     * @param array $ignoreProperties
     * @return array
     */
    public function getBehaviorProperties($behavior, $ignoreMethods = array(), $ignoreProperties = array())
    {
        $properties = array();

        //// properties
        //foreach (get_class_vars($behavior) as $propertyName => $default) {
        //    if (isset($ignoreProperties[$propertyName]))
        //        continue;
        //    $properties[] = ' * @property ' . gettype($default) . ' $' . $propertyName;
        //}

        // methods
        foreach (get_class_methods($behavior) as $methodName) {
            if (isset($ignoreMethods[$methodName]))
                continue;
            $methodReturn = $this->getTypeFromDocComment($behavior, $methodName, 'return');
            $paramTypes = $this->getDocComment($behavior, $methodName, 'param');
            $methodReturn = $methodReturn ? current($methodReturn) . ' ' : '';
            $property = " * @method $methodReturn$methodName() $methodName(";
            $r = new ReflectionMethod($behavior, $methodName);
            $params = $r->getParameters();
            $separator = '';
            foreach ($params as $param) {
                //$param is an instance of ReflectionParameter
                /* @var $param ReflectionParameter */
                $type = current($paramTypes);
                $filterType = '';
                if ($type && strpos($type, '$')) {
                    $typeString = YdStringHelper::getBetweenString($type, false, '$');
                    $typeString = trim($typeString);
                    $filterType = $this->filterDocType($typeString);
                    $filterType = $filterType ? trim($filterType) . ' ' : '';
                }
                next($paramTypes);
                $property .= $separator . $filterType . '$' . $param->getName();
                if ($param->isOptional()) {
                    $property .= ' = ';
                    $property .= strtr(str_replace("\n", '', var_export($param->getDefaultValue(), true)), array(
                        'array (' => 'array(',
                    ));
                }
                $separator = ', ';
            }
            $property .= ")";
            $properties[] = $property;

        }

        return $properties;
    }

    /**
     * @param $class
     * @param $method
     * @param string $tag
     * @return array|string
     */
    public function getDocComment($class, $method, $tag = '')
    {
        $reflection = new ReflectionMethod($class, $method);
        $comment = $reflection->getDocComment();
        if (!$tag) {
            return $comment;
        }

        $matches = array();
        preg_match_all("/@" . $tag . " (.*)(\\r\\n|\\r|\\n)/U", $comment, $matches);

        $returns = array();
        foreach ($matches[1] as $match) {
            $match = explode(' ', $match);
            $type = $match[0];
            $name = isset($match[1]) ? $match[1] : '';
            if (strpos($type, '$') === 0) {
                $name_ = $name;
                $name = $type;
                $type = $name_;
            }
            if (strpos($name, '$') !== 0) {
                $name = '';
            }
            $returns[] = trim($type . ' ' . $name);
        }

        return $returns;
    }

    /**
     * @param $class
     * @param $method
     * @param $tag
     * @return array
     */
    public function getTypeFromDocComment($class, $method, $tag)
    {
        $types = $this->getDocComment($class, $method, $tag);
        $returnTypes = array();
        foreach ($types as $k => $type) {
            $filteredType = $this->filterDocType($type);
            if ($filteredType) {
                $returnTypes[$k] = trim($filteredType);
            }
        }
        return $returnTypes;

    }

    /**
     * @param $type
     * @return mixed|string
     */
    public function filterDocType($type)
    {
        $ignoreTypes = array('void', 'mixed', 'null');
        $replace = array(
            'bool' => 'boolean',
            'integer' => 'int',
        );
        $filteredType = '';
        if (strpos($type, '|') !== false) {
            $multiType = explode('|', $type);
            $multiTypeSafe = array();
            foreach ($multiType as $singleType) {
                if (!in_array($singleType, $ignoreTypes)) {
                    if (isset($replace[$singleType])) {
                        $singleType = $replace[$singleType];
                    }
                    $multiTypeSafe[] = $singleType;
                }
            }
            $filteredType = implode('|', $multiTypeSafe);
        }
        else {
            if (!in_array($type, $ignoreTypes)) {
                $filteredType = $type;
                if (isset($replace[$type])) {
                    $filteredType = $replace[$type];
                }
            }
        }
        if ($filteredType) {
            $filteredType = str_replace('-', ' ', $filteredType);
            $filteredType = trim($filteredType);
            if (strpos($type, ' ')) {
                $filteredType = YdStringHelper::getBetweenString($type, false, ' ');
            }
        }

        return $filteredType;

    }

}
