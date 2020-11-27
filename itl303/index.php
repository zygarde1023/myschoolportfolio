<?php
$view = isset($_GET['view']) ? $_GET['view'] : '';
switch ($view) {
	case 'css' :
		$content 	= 'css/index.php';
		break;
		
	case 'svg' :
		$content 	= 'svg/index.php';
		break;
		
	case 'html5' :
		$content 	= 'html5/index.php';
		break;
		
	default :
		$content 	= 'main.php';
}
//require_once $content;
require_once 'template.php';
?>
