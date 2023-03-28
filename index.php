
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
         <div class="breadcrumb">
            <h1 class="breadcrumb-item active" aria-current="page">Consumo de API CON PHP</h1> <br>
			<br><h5 class="breadcrumb-item active" aria-current="page"><br><a href="https://jsonplaceholder.typicode.com/" target="_blank">ENLACE A API</a></h5>
		</div>
      </nav>
		
	  <h3>Datos de usuarios</h3>
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
				</a>
			</div>
		<?php
         }
         ?>
		
		<br>
		<h3>Publicaciones</h3>
		<br>
		<?php
		///api jsonplaceholder
         $data2 = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'), true);
         
		foreach ($data2 as $i) 
		{
        ?>
		
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?php echo "Publicación " . $i['id'];?> </h5>
					</div>
					<br>
						<small><?php echo "<b>Título: </b>" . $i['title'];?></small> <br>
						<small><?php echo "<b>Descripción </b>" . $i['body'];?></small> <br>
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