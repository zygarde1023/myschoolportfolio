<?php
$demo = isset($_GET['demo']) ? $_GET['demo'] : '';
switch ($demo) {
	case 'svgcom' :
		$content 	= 'svgcombi.php';
		break;
        
    case 'svgtxt' :
		$content 	= 'svgtextart.php';
		break;
        
    case 'svgamt' :
		$content 	= 'svganimation.php';
		break;
		
	case 'skw' :
		$content 	= 'skewcss.php';
		break;
	
	

		
	default :
		$content 	= 'index.php';
}
//require_once $content;
require_once 'templatesvg.php';
?>
