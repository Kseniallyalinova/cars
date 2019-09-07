<?php
Abstract Class Service_Base
 {

	protected $registry;

	function __construct($registry)
	{
			$this->registry = $registry;
	}
	
	abstract function index();
}


?>
