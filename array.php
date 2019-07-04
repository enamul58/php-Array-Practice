<html>
	<head>
		<style>
			.php_coding{ width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{ background:#444;color:#fff;padding:20px;text-align:center;}
			.maincontent{ min-height: 400px; padding: 20px;}
			.headeroption h2, .footeroption h2{ margin:0;}
		</style>
	</head>
	<body>
		<div class="php_coding">
			<section class="headeroption">
				<h2>php Fundamentals Training</h2>
			</section>
			<section class="maincontent">
				<?php
					/* $car = array("BMW","Toyota","Audi");
					$length = count($car);
					for($i=0; $i < $length; $i++){
						echo $car[$i]."<br/>";
					} */
					$ages = array(
						"jamal" => "23",
						"kamal" => "24",
						"mim"   => "25",
						"alif"  => "26",
						"shohag" => "27"					
					);
					
					foreach($ages as $name => $age){
						echo "key: ".$name." value: ".$age."<br/>";
					}
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>