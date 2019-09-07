<?php
//include ('service/index.php'); 

class Controller_Index Extends Controller_Base 
{
        function index() 
		{

    		$this->registry['template']->show('index');
    		//$a=new Service_Index();
    		//$a->index(); 
        }
  	
		/*function find($args) 
		{
 			$this->registry['template']->show('find');
        }*/

        /*function search($args)
        {
 			$this->registry['template']->show('search');		
        }*/
       /* function order()
        {
        	$this->registry['template']->show('order');
        }*/

}


?>