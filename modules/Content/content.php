<div id="content">
	<?php
		$xem='';
		if (isset($_GET["xem"])) {
			$xem=$_GET["xem"];
		}
		$unit='';
		if (isset($_GET["unit"])) {
			$unit=$_GET["unit"];
		}
		$grade='';
		if (isset($_GET["grade"])) {
			$grade=$_GET["grade"];
		}
		include("modules/Content/unit.php");
		if ($xem=="contest") {
			include("Contest/Grade10/contest.php");
		}
		if ($xem=="irre") {
			include("modules/verb.php");
		}
		if ($xem=="relax") {
			include("modules/relax.php");
		}
		if ($xem=="upload") {
			include("modules/Upload/upload.php");
		}
		if ($xem=="down") {
			include("modules/Download/download.php");
		}
		if ($xem=="login") {
			include("modules/Login/login.php");
		}
		if ($xem=="register") {
			include("modules/Register/input.php");
		}
		if ($xem=="unit"&$unit=="unit1"&$grade=="10") {
			include("Grade/Grade10/Unit1/Unit1.php");
		}
		if ($xem=="vocabulary"&$unit=="unit1"&$grade=="10") {
			include("Grade/Grade10/Unit1/Unit1.php");
			include("Grade/Grade10/Unit1/vocabulary.php");
		}
		if ($xem=="grammar"&$unit=="unit1"&$grade=="10") {
			include("Grade/Grade10/Unit1/Unit1.php");
			include("Grade/Grade10/Unit1/grammar.php");
		}
		if ($xem=="listening"&$unit=="unit1"&$grade=="10") {
			include("Grade/Grade10/Unit1/Unit1.php");
			include("Grade/Grade10/Unit1/listening.php");
		}
		if ($xem=="test"&$unit=="unit1"&$grade=="10") {
			include("Grade/Grade10/Unit1/Unit1.php");
			include("Grade/Grade10/Unit1/testyourself.php");
		}

		else if ($xem=="") {
			include("modules/Content/welcome.php");
			include("modules/Content/boxtin.php");
		}
	?>
</div>