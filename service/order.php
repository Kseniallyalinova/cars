<?php

class Service_order extends service_base
{
	function __construct($registry)
	{
		$this->registry = $registry;
		
	}

 			
    function index() 
	{
             
              
 
	 
    }

		function order($args)
        {
      //echo "вы заказали авто c id  $args[0], заполните форму";
	        if (isset($_POST['user-name']) && isset($_POST['password']))
			{
				$user_name=$_POST['user-name'];
				$email=$_POST['email'];
				$password=$_POST['password'];
		//запрос дописать:
				$query_ins = "Insert into users (name_user, pass_user, mail) values ('$user_name', '$email', '$password')";
		 		$result= $this->registry['db']->query($query_ins);
		 		//в html
		 		if ($result)
		 		{
		 			echo $smassage="форма успешно заполнена";
		 		}
		 		else 
		 		{
		 			echo $fmessage="ошибка";
		 		}
	        }
	    }
}