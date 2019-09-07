<?php

class Service_Index extends service_base
{
	function __construct($registry)// надо сделать так чтобы при вызове атоматически из базы выгружались марки и модели
	{
		$this->registry = $registry;
		$car_marka=array();
		$stmt=$this->registry['db']->query( "SELECT marka.name_car_marka from marka WHERE marka.available=1");
		$car_marka=$stmt -> fetchAll(PDO::FETCH_COLUMN);
		//var_dump($car_marka);
		$this->registry['template']->set ('marka', $car_marka);
	}

 			
	function find_model()
	{
		$stmt = $this->registry['db']->query( "SELECT marka.name_car_marka, model.name_model  
					from marka 
					JOIN  model ON 
					marka.id_marka=model.id_marka  
					WHERE marka.available=1");
		$res=$stmt -> setFetchMode(PDO::FETCH_ASSOC);
		foreach ($stmt as $result)
		{
			$car_marka2[] = $result;
		}
		var_dump($car_marka2);
		$this->registry['template']->set ('marka2', $car_marka2);




	
	}
    function index() 
	{
             
              
              foreach ($this->registry['db']->query( "SELECT auto.car_number, marka.name_car_marka, model.name_model,model.id_model_car
													FROM auto		
													JOIN model ON
													(auto.id_model_car=model.id_model_car)
													JOIN marka ON 
													(marka.id_marka=model.id_marka)") as $resulte)
			  {
				$carList[]=$resulte;
					
		      }
 		

              $this->registry['template']->set ('cars', $carList);
        	 
        }
  	

	function find($args) 
	{
 			$this->registry['template']->set('arg', $args);
 			$q ="SELECT auto.car_number, marka.name_car_marka, model.name_model, auto.photo, model.info, price.name_price, model.deposit
													FROM auto		
													JOIN model ON
													(auto.id_model_car=model.id_model_car)
													JOIN marka ON 
													(marka.id_marka=model.id_marka)
													JOIN category on
													(category.id_category=model.id_category)
													JOIN price on
													(price.id_price=category.id_price)
													where model.id_model_car=".$args[0]."";	



 			 foreach ($this->registry['db']->query( $q) as $resulte)
			  {
				$carCategory[]=$resulte;
						
		      }
 		
 			$this->registry['template']->set ('carsCategory', $carCategory);
 			//$this->registry['template']->show('find');
 
        }

        /*function search($args)
        {
        	
        	$this->registry['template']->set('arg', $args);//получили параметры поиска, записали их в регистри
        	$query="SELECT auto.car_number,  auto.id_auto, model.name_model, transmission.name_transmission, category.name_category,  marka.name_car_marka,  auto.photo, model.info, price.name_price, model.deposit
				FROM  auto 
				JOIN transmission ON 
				(transmission.id_transmission=auto.id_transmission)
				JOIN model ON
				(auto.id_model_car=model.id_model_car)
				JOIN marka ON 
				(marka.id_marka=model.id_marka)
				JOIN category ON
				(category.id_category=model.id_category)
				JOIN price on
				(price.id_price=category.id_price)
				WHERE category.id_category='$args[0]'
				AND transmission.id_transmission='$args[1]'";
			
				//echo $query;
			foreach ($this->registry['db']->query( $query) as $resulte)
			{
				$carResultSearch1[]=$resulte;
			}
			//var_dump($carResultSearch);
			$this->registry['template']->set ('carResultSearch7', $carResultSearch1);
			//$this->registry['template']->set ('carList', $carResultSearch);
 			//$this->registry['template']->show('search');*/		
		      
        	//

        
        /*function order($args)
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
	    }*/
}


?>