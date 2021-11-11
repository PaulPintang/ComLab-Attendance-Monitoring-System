<?php
 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Admin"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'subjects.php';		
		break;

	default :
		$content    = 'subjects.php';		
}
require_once ("../templates/template.php");
?>