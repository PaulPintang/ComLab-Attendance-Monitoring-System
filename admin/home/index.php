<?php
 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Admin"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'home.php';		
		break;

	default :
		$content    = 'home.php';		
}
require_once ("../templates/template.php");
?>