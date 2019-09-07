<?php
Class Controller_Search Extends Controller_Base 
{

        function index() 
		{

             // $this->registry['template']->show('cars');
			echo "search без аргументов";

        }

      
		function search($args)
		        {
		 			//echo "search с аргументами";
		 			$this->registry['template']->show('search');		
		        }
}