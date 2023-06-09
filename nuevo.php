
<!DOCTYPE html>

<html>
   <head>
    <title>Consumo Api PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   </head>
		<body>
		
		 <?php
         //api mercado libre
         $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'),true);
		 
		 ?>
			
	  <nav aria-label="breadcrumb">	  	
         <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Usuario: <?php echo $data['nickname'];?></li>
			<li class="breadcrumb-item active" aria-current="page"><br>Dirección: <?php echo $data['address']['city'];?></li>
         </ol>
      </nav>
		
		
		<?php
		///api jsonplaceholder
         $data1 = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
         
		foreach ($data1 as $i) 
		{
        ?>
		
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?php echo "Usuario " . $i['id'];?> </h5>
						<small><?php echo "<b>Nombre de usuario </b>" . $i['username'];?></small>
					</div>
					<br>
						<small><?php echo "<b>Nombre: </b>" . $i['name'];?></small> <br>
						<small><?php echo "<b>Correo electrónico </b>" . $i['email'];?></small> <br>
						<small><?php echo "<b>Número telefónico </b>" . $i['phone'];?></small> <br>
						<small><?php echo "<b>Sitio web </b>" . $i['website'];?></small> <br>
						<small><?php echo "<b>Sitio web </b>" . $i['company'];?></small> <br>
				</a>
			</div>
		<?php
         }
         ?>
		</body>
		
		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>