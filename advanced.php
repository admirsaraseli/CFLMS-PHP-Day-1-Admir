<!DOCTYPE html>
<html>
<head>
	<title>Advanced Exercise</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<center>
		<form method="post">
			<div class="form-row justify-content-center">
				<div class="col-sm-3 mt-4 mx-auto">
				  	<label class="font-weight-bold" for="validationDefault01">Enter Temperature in Fahrenheit :</label>
				 	<input type="text" class="form-control mb-3" id="validationDefault01" placeholder="Fahrenheit" name="far">
			 	</div>
		 	</div>
		 	<div class="form-row justify-content-center mx-auto">
		 		<button type="submit" class="btn btn-primary mb-4" name="submit">Convert</button>
		 	</div>
		</form>
	</center>
	 
	<?php
		function convert($fahrenheit){
			$celsius = ($fahrenheit - 32)*5/9;
			echo "<center class='text-info'>";
			echo "<h3>Temprature is = "; echo round($celsius); echo "° Celsius"; echo "</h3>";
			if ($celsius >= 0 && $celsius<= 5)
			echo "
			<figure class='figure'>
				<img src='img/cold-weather.jpg' class='figure-img img-fluid rounded' alt='...'>
				<figcaption class='figure-caption'><h1>It is Very cold.</h1bye></figcaption>
			</figure>";
			elseif ($celsius >= 6 && $celsius<=10)
			echo "
			<figure class='figure'>
				<img src='img/cold-weather.jpg' class='figure-img img-fluid rounded' alt='...'>
				<figcaption class='figure-caption'><h1>It is Cold.</h1></figcaption>
			</figure>";
			elseif ($celsius >= 11 && $celsius<=15)
			echo "
			<figure class='figure'>
				<img src='img/cool-weather.jpg' class='figure-img img-fluid rounded' alt='...'>
				<figcaption class='figure-caption'><h1>It is Pleasant.</h1></figcaption>
			</figure>";
			elseif ($celsius >= 16 && $celsius<=20)
			echo "
			<figure class='figure'>
				<img src='img/cool-weather.jpg' class='figure-img img-fluid rounded' alt='...'>
				<figcaption class='figure-caption'><h1>It is Warm.</h1></figcaption>
			</figure>";
			elseif ($celsius >= 21)
			echo "
			<figure class='figure'>
				<img src='img/hot-weather.jpg' class='figure-img img-fluid rounded' alt='...'>
				<figcaption class='figure-caption'><h1>It is Hot.</h1></figcaption>
			</figure>";
			echo "</center>";
		}

		if(isset($_POST['submit']))
		{
			$f= $_POST['far'];
			convert($f);
		} 
	?>
</body>
</html>