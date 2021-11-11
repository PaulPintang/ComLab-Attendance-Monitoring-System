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
            $name = $_POST['name'];
            $username = $_POST['username'];
            $passcode = $_POST['passcode'];

            mysqli_query($db, "INSERT INTO profaccounts (name, username, passcode) VALUES ('$name', '$username', '$passcode')");
			header("location: ./");
          }
	}

	function doUpdate(){
		 include('../conn.php');
		 if (isset($_POST['update'])){
			$id = $_POST['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $passcode = $_POST['passcode'];

            mysqli_query($db, "UPDATE profaccounts SET name='$name', username='$username', passcode='$passcode'  WHERE id=$id");
			header("location: ./");
       
          }
	}

	function doDelete(){
		include ('../conn.php');
  		  if (isset($_GET['del'])) {
			$id = $_GET['del'];
			mysqli_query($db, "DELETE FROM profaccounts WHERE id=$id");
			header("location: ./");
   		 }
	}

?>