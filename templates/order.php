 <?php
 echo "заказ авто с конкретным id";
require_once ("layout.php");
?>

<!DOCTYPE html>
 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="style.css"> 
 	<link rel="stylesheet" type="text/css" href="style_order.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	<?php
	

	



	?>
	<div class="container">
	  <form class="form-reg" method="POST">
		<h2>Регистрация</h2>
		<input type="text" name="user-name" class="form-control" placeholder="user name" required>
		<input type="email" name="email" class="form-control" placeholder="email" required>
		<input type="password" name="password" class="form-control" placeholder="password" required>
		<button class="btn" type="submit">Запрос на аренду</button>
	  </form>
	</div>




</body>
</html>