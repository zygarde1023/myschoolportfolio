<?php
$demo = isset($_GET['demo']) ? $_GET['demo'] : '';
switch ($demo) {
	case 'html5com' :
		$content 	= 'htmlcombo.php';
		break;
  
		
	default :
		$content 	= 'index.php';
}
//require_once $content;
require_once 'templatehtml5.php';
?>
