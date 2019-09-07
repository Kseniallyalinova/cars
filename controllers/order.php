<?php
Class Controller_Order Extends Controller_Base 
{

        function index() 
		{

             // $this->registry['template']->show('cars');
			echo "order без аргументов";

        }

        
		function order($args)

        {
        	$this->registry['template']->show('order');
        }
}