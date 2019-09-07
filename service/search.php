<?php

class Service_search extends service_base
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
  	function search($args)
        {
        	
        	$this->registry['template']->set('arg', $args);//получили параметры поиска, записали их в регистри
        	//var_dump($args);
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
 			//$this->registry['template']->show('search');
}

}

?>