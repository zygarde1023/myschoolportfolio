<?php
$demo = isset($_GET['demo']) ? $_GET['demo'] : '';
switch ($demo) {
	case 'svgcom' :
		$content 	= 'svgcombi.php';
		break;
  
		
	default :
		$content 	= 'index.php';
}
//require_once $content;
require_once 'templatehtml5.php';
?>
