<?php

class Service_cars extends service_base
{
	function __construct($registry)
	{
		$this->registry = $registry;
		
	}

 			
    function index() 
	{
             
              
      foreach ($this->registry['db']->query( "SELECT * from auto ") as $resulte)
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
  	
}

?>