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
					$name = array(
						array(
							'id'        =>'201',
							'firstName' =>'Md.',
							'lastName'  =>'Enamul' 
						),
						array(
							'id'        =>'202',
							'firstName' =>'Nahid',
							'lastName'  => 'ajad'
						),
						array(
							'id'        => '203',
							'firstName' => 'alif',
							'lastName'  => 'sharker'	
						)
					);
					
					//$lastName= array_column($name,'lastName');
					$firstName = array_column($name,'firstName','id');
					print("<pre>");
					print_r($firstName);
					print("</pre>");
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>