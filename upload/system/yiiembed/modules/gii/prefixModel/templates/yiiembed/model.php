<?php
/**
 * This is the template for generating the model class of a specified table.
 *
 * @var $this ModelCode
 * @var $tableName
 * @var $modelClass
 * @var $columns
 * @var $labels
 * @var $rules
 * @var $relations
 * @var $connectionId
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 */
echo "<?php\n";
echo "/**\n";
echo " * " . $modelClass . "\n";
echo " *\n";
echo " * --- BEGIN ModelDoc ---\n";
echo " *\n";
echo " * --- END ModelDoc ---\n";
echo " */\n";
echo "\n";
echo "class " . $modelClass . " extends " . $this->baseClass . "\n";
echo "{\n";
echo "\n";
echo "    /**\n";
echo "     * Returns the static model of the specified AR class.\n";
echo "     * @param string \$className active record class name.\n";
echo "     * @return " . $modelClass . " the static model class\n";
echo "     */\n";
echo "    public static function model(\$className = __CLASS__)\n";
echo "    {\n";
echo "        return parent::model(\$className);\n";
echo "    }\n";
echo "\n";
if ($connectionId != 'db') {
    echo "    /**\n";
    echo "     * @return CDbConnection database connection\n";
    echo "     */\n";
    echo "    public function getDbConnection()\n";
    echo "    {\n";
    echo "        return Yii::app()->" . $connectionId . ";\n";
    echo "    }\n";
    echo "\n";
}
echo "    /**\n";
echo "     * @return string the associated database table name\n";
echo "     */\n";
echo "    public function tableName()\n";
echo "    {\n";
echo "        return '" . $tableName . "';\n";
echo "    }\n";
echo "\n";
if ($relations) {
	echo "    /**\n";
	echo "     * @return array relational rules.\n";
	echo "     */\n";
	echo "    public function relations()\n";
	echo "    {\n";
	echo "        return array(\n";
	foreach ($relations as $name => $relation) {
		echo "            '$name' => $relation,\n";
	}
	echo "        );\n";
	echo "    }\n";
	echo "\n";
}
echo "    /**\n";
echo "     * @return array customized attribute labels (name=>label)\n";
echo "     */\n";
echo "    public function attributeLabels()\n";
echo "    {\n";
echo "        return array(\n";
foreach ($labels as $name => $label) {
    echo "            '$name' => Yii::t('app', '$label'),\n";
}
echo "        );\n";
echo "    }\n";
echo "\n";
echo "}\n";
echo "\n";
