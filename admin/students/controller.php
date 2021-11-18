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

	case 'delete':
		doDelete();
		break;

	}
   
	function doInsert(){
		 include('../conn.php');
		 if (isset($_POST['add'])){
            $studentName = $_POST['studentName'];
            $studentId = $_POST['studentId'];

            mysqli_query($db, "INSERT INTO studaccounts (studentName, studentId) VALUES ('$studentName', '$studentId')");
			header("location: ./");
          }
	}

	function doUpdate(){
		 include('../conn.php');
		 if (isset($_POST['update'])){
			$id = $_POST['id'];
            $studentName = $_POST['studentName'];
            $studentId = $_POST['studentId'];

            mysqli_query($db, "UPDATE studaccounts SET studentName='$studentName', studentId='$studentId' WHERE id=$id");
			header("location: ./");
       
          }
	}

	function doDelete(){
		include ('../conn.php');
  		 
			$id = $_GET['id'];
			mysqli_query($db, "DELETE FROM studaccounts WHERE id=$id");
			header("location: ./index.php");
   		 
	}

?>