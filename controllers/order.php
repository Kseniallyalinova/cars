<?php
Class Controller_Order Extends Controller_Base 
{

        function index() 
		{

             // $this->registry['template']->show('cars');
			echo "order без аргументов";
			echo "это надо доделать";

        }

        
		function order($args)

        {
        	$this->registry['template']->show('order');
        }

        function hello ()
        {
        	$a=3+2;
        }
}