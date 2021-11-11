<?php
 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Admin"; 
 $header=$view; 
switch ($view) {
	case 'prof' :
		$content    = 'prof.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	default :
		$content    = 'prof.php';		
}
require_once ("../templates/template.php");
?>