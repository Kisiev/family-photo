<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	public function pageNotFound()
	{
		/**
		 * если запрос ничего не дал
		 */
		if(!$this->request->isAjax())
		{
			$this->response->redirect('/notfound/');
			$this->view->disable();
		}
		else
		{
			$this->jsonResult(['result'=>'error','msg'=>'not found']);
		}
	}

	public function jsonResult($data)
	{
		echo json_encode($data);
		$this->view->disable();
		return;
	}
}

?>