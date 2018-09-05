<?php

class IndexController extends ControllerBase
{
	public function indexAction()
	{
		// echo "INDEX CONTROLLER";
		// exit();
		$this->view->setVar('test', 'test');
	}
}
