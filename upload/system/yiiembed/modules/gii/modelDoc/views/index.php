<?php
/**
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/gii-modeldoc-generator
 * @license BSD-3-Clause https://raw.github.com/cornernote/gii-modeldoc-generator/master/LICENSE
 */
$class = get_class($model);
?>
<h1>ModelDoc Generator</h1>

<p>This generator injects phpdocs for fields, relations and behaviors into the top of your models.</p>

<?php $form = $this->beginWidget('CCodeForm', array('model' => $model)); ?>

<div class="row sticky ">
    <?php echo $form->label($model, 'modelClass', array('required' => true)); ?>
    <?php echo $form->textField($model, 'modelClass', array('size' => 65)); ?>
    <div class="tooltip">
        This is the name of the model class that will have phpdocs injected
        into it (e.g. <code>Post</code>, <code>Comment</code>). Leave empty to inject
        into all models.
    </div>
    <?php echo $form->error($model, 'modelClass'); ?>
</div>
<div class="row sticky">
    <?php echo $form->labelEx($model, 'modelPath'); ?>
    <?php echo $form->textField($model, 'modelPath', array('size' => 65)); ?>
    <div class="tooltip">
        This refers to the directory that the new model class file should be generated under.
        It should be specified in the form of a path alias, for example, <code>application.models</code>.
    </div>
    <?php echo $form->error($model, 'modelPath'); ?>
</div>
<div class="row checkbox">
    <?php echo $form->label($model, 'addModelMethodDoc'); ?>
    <?php echo $form->checkbox($model, 'addModelMethodDoc'); ?>
    <div class="tooltip">
        Adds a method doc for the model function.
    </div>
    <?php echo $form->error($model, 'addModelMethodDoc'); ?>
</div>
<div class="row checkbox">
    <?php echo $form->label($model, 'useMixin'); ?>
    <?php echo $form->checkbox($model, 'useMixin'); ?>
    <div class="tooltip">
        Use @mixin tag for behaviors.
    </div>
    <?php echo $form->error($model, 'useMixin'); ?>
</div>

<?php $this->endWidget(); ?>
