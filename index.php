<!DOCTYPE html>
<html>
<head>
	<title>Hello from PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
	<?php
		echo "<div class='container text-dark text-center'>";
			# exercise 1
			echo "<p class='text-info'>Exercise 1</p>";
			$message = "<h1>Admir Saraseli!</h1>";
			echo $message; 

			# exercise 2
			echo "<br>";
			echo "<p class='text-info'>Exercise 2</p>";
			$d=date("D");
			if ($d=="Mon")
			echo "<h3>Happy Monday!</h3>";
			else
			echo "<h3>Have a nice day!</h3>";

			# exercise 3
			echo "<br>";
			echo "<p class='text-info'>Exercise 3</p>";
			$d=date("D");
			if ($d=="Mon")
			echo "<h3>Today is Monday!</h3>";
			elseif ($d=="Tue")
			echo "<h3>Today is Tuesday!</h3>";
			elseif ($d=="Wed")
			echo "<h3>Today is Wednesday!</h3>";
			elseif ($d=="Thu")
			echo "<h3>Today is Thursday!</h3>";
			elseif ($d=="Fri")
			echo "<h3>Today is Friday!</h3>";
			elseif ($d=="Sat")
			echo "<h3>Today is Saturday!</h3>";
			elseif ($d=="Sun")
			echo "<h3>Today is Sunday!</h3>";
			else
			echo "Wonder which day is this ?!" ; 

			# exercise 4
			echo "<br>";
			echo "<p class='text-info'>Exercise 4</p>";
			echo "for loop";
			echo "<div class='border border-radius'>";
			$message = "Admir Saraseli!";
			for($i=0; $i<10; $i++)
			{
				echo ("My name is: message = $message <br>");
			}
			echo "</div>";

			echo "<br>";
			echo "while loop";
			echo "<div class='border border-radius'>";
			$i=0;
			$message = "Admir Saraseli!";
			while($i < 10)
			{
				$i++ ;
				echo ("My name is: message = $message <br>");
			}
			echo "</div>";

			echo "<br>";
			echo "do while loop";
			echo "<div class='border border-radius'>";
			$i=0;
			$message = "Admir Saraseli!";
			do
			{
				$i++ ;
				echo ("My name is: message = $message <br>");
			}while($i < 10);
			echo "</div>";

			# exercise 5
			echo "<br>";
			echo "<p class='text-info'>Exercise 5</p>";
			$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
			foreach( $array as  $value )
			{
				echo "Value is $value <br/>";
			}

			# exercise 6
			echo "<br>";
			echo "<p class='text-info'>Exercise 6</p>";
			echo "<div class='border border-radius'>";
			$options = array(
				"cartoon" => "Mickey Mouse",
				"anime"  => "Pokemon ",
				"game" =>  "Super Mario"
			);
			echo "Cartoon we have: ". $options['cartoon'] . "<br/>";
			echo "Anime we have: " . $options['anime']. "<br/>" ;
			echo "Game we have: ". $options['game'] . "<br/>";
			echo "</div>";

			# multi array
			echo "<br>";
			echo "<div class='border border-radius'>";
			$options = array(
				"cartoon" => array
				(
					"value1" => "Mickey Mouse",
					"value2" => "Bugs Bunny",
					"value3"  => "Popeye"
				),
				"anime" =>  array
				(
					"value1"  => "Pokemon",
					"value2" => "Dinosaur King",
					"value3"  => "Hero Mask"
				),
				"game" =>  array
				(
					"value1" =>  "Super Mario",
					"value2" => "Pac Man",
					"value3" => "Iron Man"
				)
			);
	    	echo "Cartoon we have: ". $options['cartoon']['value1']." <br/>";
	    	echo "Anime we have: ".$options['anime']['value2']."<br/> ";
	    	echo "Game we have: ".$options['game']['value3']."<br/><br/>";  
			echo "</div>";
									
		echo "</div>"
	 ?>
	
</body>
</html>