<?php
/**
 * EXAMPLE SITE CONTROLLER - MODIFY TO SUIT
 */
class SiteController extends OcController
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'yiiembed/views/site/pages'
			// They can be accessed via: index.php?route=ocSite/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'yiiembed/views/site/index.php'
		// using the default layout 'yiiembed/views/layouts/main.php'
		$this->render('index');
	}

}