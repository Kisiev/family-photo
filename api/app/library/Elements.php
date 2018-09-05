<?php

use Phalcon\Mvc\User\Component;

/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Component
{

	private $_headerMenu = 
	[
		'blog'      =>['title'=>'Блог'],
		'about'     =>['title'=>'О компании'],
		'works'     =>['title'=>'Работы'],
		'services'  =>['title'=>'Услуги'],
		'vacancies' =>['title'=>'Вакансии'],
		'contacts'  =>['title'=>'Контакты']
	];

	/**
	 * Builds header menu with left and right items
	 *
	 * @return string
	 */
	public function getMenu()
	{
		$controllerName = $this->di->get('router')->getControllerName();
		foreach ($this->_headerMenu as $menuItemCode => &$menuItem)
		{
			if($controllerName == $menuItemCode)
				$menuItem['selected'] = 1;
		}

		return $this->_headerMenu;

	}

}
