<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/css.php":
			$CURRENT_PAGE = "Css"; 
			$PAGE_TITLE = "Css Us";
			break;
		case "/php-template/tilt.php":
			$CURRENT_PAGE = "Tilt"; 
			$PAGE_TITLE = "Tilt Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Studio.Jekeru.fr";
	}
?>