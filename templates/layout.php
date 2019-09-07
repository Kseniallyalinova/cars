<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/plugins/treeview/jquery.treeview.js"></script>
<link rel="stylesheet" href="/plugins/treeview/jquery.treeview.css">
  	<script>
	function showURL()
	{
		var par2=$("#car-transmission").find(":selected").attr("value");
		var par1=$("#car-category").find(":selected").attr("value");
		var url = ("http://localhost/2019-07/search/search/"+par1+"/"+par2);

	    window.location = url;
	    return false;
	}
	</script>
</head>
<body>

	<div class="page">
		 <div class = "header"> <h3>Аренда Авто</h3> 
				<div class = "logo">
					<img src="img/logo.png" alt="logo">
					
				</div>
				<nav role = "navigation">
					<ul class = "main-menu">
						<li><a href="#">Главная</a></li> 
						<li><a href="#">Наш автопарк</a></li> 
						<li><a href="#">Поиск авто</a></li> 
						<li><a href="#">Условия аренды</a></li> 
						<li><a href="#">Контакты</a></li> 
					</ul>
				</nav>
		 </div>

		 <div class = "row">
		 	<div  class = "sidebar"> <h3>Наш автопарк</h3>
				<ul class="sidebar_menu">
            		<!-- <?php  
            		   
            		                                        
            		//	for ($j=0;$j<count($cars);$j++)
            								{
            									//echo ' <li><a href="find/'.$cars[$j]['id_model_car'].'">'.$cars[$j]['name_car_marka']." ".$cars[$j]['name_model'].'</a></li>';
            								}
            								/*for ($j=0;$j<count($marka);$j++)
            								{
            									echo "<li>$marka[$j]</li>";
            									//for ($i=0;$i<count($))
            								}*/
            		
            							?> -->
				</ul>

				<h3>Поиск </h3>
				<form  method="post" name="car-select-form" id="searchform">	
					<div class="styled-transmission-car">
					  	<select name="car-transmission" id="car-transmission" class="search_transmission">
					        <option value="">Выбрать тип коробки передач</option>
					        <option value="1" >АКПП</option><!-- value - id из бд -->
					        <option value="3">МКПП</option>
					    </select>
					</div>
					<!--Car transmission start -->
					<div class="styled-category-car">
					  	<select name="car-category" id="car-category">
					        <option value="">Выбрать категорию авто</option>
					        <option value="1">бюджет</option><!-- value - id из бд -->
					        <option value="3">бизнес</option>
					    </select>
					</div>
					<input onclick="showURL();return false;" type="submit" name="button" id="button" />
				</form>
			</div> 

			<div  class = "content"> 
			
			</div>
		</div>

		 
	</div>
</body>
</html>






