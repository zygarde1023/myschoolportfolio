<?php
$demo = isset($_GET['demo']) ? $_GET['demo'] : '';
switch ($demo) {
	case 'trs' :
		$content 	= 'csstranslate.php';
		break;
		
	case 'skw' :
		$content 	= 'skewcss.php';
		break;
	
	case 'scl' :
		$content 	= 'scalecss.php';
		break;
    
    case 'rtt' :
		$content 	= 'cssrotate.php';
		break;
        
    case 'clogo' :
		$content 	= 'csslogo.php';
		break;
        
    case '2dm' :
		$content 	= 'css2dmatrix.php';
		break;
        
    case '2dt' :
		$content 	= 'css2dtransition.php';
		break;
        
    case '2dt' :
		$content 	= 'css2dtransition.php';
		break;
    
    case '2da' :
		$content 	= 'css2danimation.php';
		break;
        
    case '3dt' :
		$content 	= 'css3dtransform.php';
		break;
        
    case '3dm' :
		$content 	= 'css3dmatrix.php';
		break;
        
    case '3da' :
		$content 	= 'css3danimation.php';
		break;
    
    
	
	case 'update' :
		$content 	= 'update.php';
		break;
		
	default :
		$content 	= 'index.php';
}
//require_once $content;
require_once 'templatecss.php';
?>