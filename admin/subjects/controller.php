<?php
session_start();
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add':
		doInsert();
		break;

	case 'update':
		doUpdate();
		break;

	case 'del':
		doDelete();
		break;

	}
   
	function doInsert(){
		 include('../conn.php');
		 if (isset($_POST['add'])){
            $subject = $_POST['subject'];

            mysqli_query($db, "INSERT INTO subjects (subject) VALUES ('$subject')");
			header("location: ./");
          }
	}

	function doUpdate(){
		 include('../conn.php');
		 if (isset($_POST['update'])){
			$id = $_POST['id'];
            $subject = $_POST['subject'];

            mysqli_query($db, "UPDATE subjects SET subject='$subject' WHERE id=$id");
			header("location: ./");
       
          }
	}

	function doDelete(){
		include ('../conn.php');
  		  if (isset($_GET['del'])) {
			$id = $_GET['del'];
			mysqli_query($db, "DELETE FROM subjects WHERE id=$id");
			header("location: ./");
   		 }
	}

?>