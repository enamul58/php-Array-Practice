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
							"a" => "red",
							"b" => "green",
							"c" => "blue",
							"d" => "yellow"
					   );
					   if(isset($_POST["text"])){
						   global $txt;
						   $txt = $_POST["text"];
						   $result = array_search($txt, $ary_one);
						   echo "key= ".$result." value= ".$txt;
					   }
					  
				?>
				<form action="" method="post">
					<input type = "text" name="text" value="<?php global $txt; echo $txt;?>"/>
					<input type="submit" value="submit"/>
				</form>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>