<?php
/**
 * This is the template for generating the phpdocs of a specified model.
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-dressing
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-dressing/master/license.txt
 */
$properties = array(' *');

// get own methods and properties
$reflection = new ReflectionClass($modelClass);
$selfMethods = CHtml::listData($reflection->getMethods(), 'name', 'name');
$selfProperties = CHtml::listData($reflection->getProperties(), 'name', 'name');

// table fields
$properties[] = ' * Table ' . $model->tableName();
foreach ($model->tableSchema->columns as $column) {
    $type = $column->type;
    if (($column->dbType == 'datetime') || ($column->dbType == 'date')) {
        $type = 'string'; // $column->dbType;
    }
    if (strpos($column->dbType, 'decimal') !== false) {
        $type = 'number';
    }
    $properties[] = ' * @property ' . $type . ' $' . $column->name;
}
$properties[] = ' *';

// relations
$relations = $model->relations();
if ($relations) {
    $properties[] = ' * Relations';
    foreach ($relations as $relationName => $relation) {
        if (in_array($relation[0], array('CBelongsToRelation', 'CHasOneRelation')))
            $properties[] = ' * @property ' . $relation[1] . ' $' . $relationName;

        elseif (in_array($relation[0], array('CHasManyRelation', 'CManyManyRelation')))
            $properties[] = ' * @property ' . $relation[1] . '[] $' . $relationName;

        elseif (in_array($relation[0], array('CStatRelation')))
            $properties[] = ' * @property integer $' . $relationName;

        else
            $properties[] = ' * @property unknown $' . $relationName;
    }
    $properties[] = ' *';
}

// active record
$properties[] = ' * @see CActiveRecord';
if ($this->addModelMethodDoc)
    $properties[] = " * @method {$modelClass} model() static model(string \$className = NULL)";
$properties[] = " * @method {$modelClass} find() find(\$condition, array \$params = array())";
$properties[] = " * @method {$modelClass} findByPk() findByPk(\$pk, \$condition = '', array \$params = array())";
$properties[] = " * @method {$modelClass} findByAttributes() findByAttributes(array \$attributes, \$condition = '', array \$params = array())";
$properties[] = " * @method {$modelClass} findBySql() findBySql(\$sql, array \$params = array())";
$properties[] = " * @method {$modelClass}[] findAll() findAll(\$condition = '', array \$params = array())";
$properties[] = " * @method {$modelClass}[] findAllByPk() findAllByPk(\$pk, \$condition = '', array \$params = array())";
$properties[] = " * @method {$modelClass}[] findAllByAttributes() findAllByAttributes(array \$attributes, \$condition = '', array \$params = array())";
$properties[] = " * @method {$modelClass}[] findAllBySql() findAllBySql(\$sql, array \$params = array())";
$properties[] = " * @method {$modelClass} with() with()";
$properties[] = " *";

// behaviors
$behaviors = $model->behaviors();
if ($behaviors) {
    $behaviorMethods = array();
    foreach (get_class_methods('CActiveRecordBehavior') as $methodName)
        $behaviorMethods[$methodName] = $methodName;
    $behaviorProperties = array();
    foreach (get_class_vars('CActiveRecordBehavior') as $propertyName)
        $behaviorProperties[$propertyName] = $propertyName;

    foreach ($behaviors as $behavior) {
        $behavior = $this->getBehaviorClass($behavior);
        $behaviorProperties = $this->getBehaviorProperties($behavior, CMap::mergeArray($behaviorMethods, $selfMethods), CMap::mergeArray($behaviorProperties, $selfProperties));
        if ($behaviorProperties) {
            $properties[] = ' * @see ' . $behavior;
            foreach ($behaviorProperties as $behaviorProperty) {
                $properties[] = $behaviorProperty;
            }
            $properties[] = ' *';
        }
    }
}

// output the contents
$content = $this->getContent($modelClass);
echo $content[0];
echo $this->beginBlock . "\n";
echo implode("\n", $properties) . "\n";
echo $this->endBlock;
echo $content[1];
