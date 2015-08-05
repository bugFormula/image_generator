<?php
require_once('class/Image_generator.php');
?>
<html>
<head>
	<title>Testing OOP</title>
</head>
<body>
	<h1>Testing OOPHP!</h1>
	<ul>
		<?php
		$test = new Image_generator();
		foreach ($test->push_images('images/') as $key => $value) {
			echo "<li><img src='".$value."'</li>";
		}
		?>
	</ul>
</body>
</html>