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
					function myFunction($value){
						$word = strtoupper($value);
						return $word;
					}
					   /*  $ary_one = array("red","black","green");
					    $ary_two = array("white","brown","green"); */
					   $ary_one = array(
					        "a" => "red",
					        "b" => "black",
					        "c" => "green",
					        "d" => "white"	
					   );
					   $ary_two = array(
					        "e" => "brown",
					        "f" => "pink",
					        "g" => "green",
					        "d" => "yellow"	
					   );
					   
					   $result = array_merge($ary_one,$ary_two);
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