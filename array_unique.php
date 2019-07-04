<html>
	<head>
		<style>
			.php_coding{ width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{ background:#444;color:#fff;padding:20px;text-align:center;}
			.maincontent{ min-height: 400px; padding: 20px;}
			.headeroption h2, .footeroption h2{ margin:0;}
			input[type="text"]{width: 250px; }
		</style>
	</head>
	<body>
		<div class="php_coding">
			<section class="headeroption">
				<h2>php Fundamentals Training</h2>
			</section>
			<section class="maincontent">
				<?php
				       $ary_one = array(
							"a" => "50",
							"b" => "60",
							"c" => "20",
							"d" => "60",
							"e" => "50",
							"f" => "20",
							"g" => "10",
							"h" => "10"
					   );
					   $result = array_unique($ary_one);
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