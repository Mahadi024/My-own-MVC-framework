<?php
	/**
	 * 
	 */
	class Home extends Controller
	{
		
		function __construct($controller, $action)
		{
			parent::__construct($controller,$action);
		}
		public function indexAction()
		{
			//echo $name;
			$this->view->render('home/index');
		}
	}