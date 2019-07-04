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
					    //$ary = array(1,2,3,4,5);
						$ary = array(
							"Department" => "cse",
							"Departments" => "eee",
							"Departmentt" => "eee"
						);
					   $result = array_map("myFunction",$ary);
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