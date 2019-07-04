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
					$array_one = array(
					    "1" => "red",
						"2" => "green",
						"3" => "blue",
						"4" => "yellow"		
					);
					$array_two = array(
						"2" => "green",
						"1" => "blue",
						"3" => "pink"
					
					);
					$result = array_intersect( $array_one, $array_two);
					print("<pre>");
					print_r($result);
					print("</pre>");
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>