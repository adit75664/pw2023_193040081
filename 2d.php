<!DOCTYPE html>
<html>
<head>
	<title>2d</title>
	<style type="text/css">
		.black {
			background-color: black;
		}
		.white {
			background-color: white;
		}
		.box {
			width: 50px;
			height: 50px;
            border: 1px solid black;
            display: inline-block;
            margin: 0px;
		}
	</style>
</head>
<body>
	<?php
		$size = 5;

		for ($i = 1; $i <= $size; $i++) {
			for ($j = 1; $j <= $size; $j++) {
				if (($i + $j) % 2 == 0) {
					$color = "black";
				} else {
					$color = "white";
				}

				echo "<div class='box " . $color . "'></div>";
			}

			echo " <br>";
		}
	?>
</body>
</html>
