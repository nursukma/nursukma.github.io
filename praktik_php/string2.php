<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
			<?php
				$numberedString = "12345678901234567890";
				$fivePos = strpos($numberedString, "5");
				echo "posisi angka 5 di dalam string adalah $fivePos";
				$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
				echo "<br> Posisi angka 5 yang kedua di dalam string adalah $fivePos2";
			?>
		</body>
	</html>
