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
						"a"=>"red",
						"b"=>"green",
						"c"=>"blue",
						"d"=>"yellow"
					);
					$array_two = array(
						"b" => "red",
						"f"  => "balck",
						"g"  => "purple"
					);
					$array_three = array(
						"a" => "red",
						"i"  => "black",
						"c"  => "blue"
					);
					
				   //$differ = array_diff($array_one, $array_two);
				     $differ = array_diff_key($array_one, $array_two, $array_three);
					print("<pre>");
					print_r( $differ );
					print( "</pre>" )
				
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>