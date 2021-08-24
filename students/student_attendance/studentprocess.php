<?php
    // session for alert message
    // session_start();

    // initialize variable
    // $name = "";
    // $id = 0;
    // $update = false;

    // connection
    $db = mysqli_connect('localhost', 'root', '', 'attendance');

    // date
    date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");
    
    // insert to database
    if(isset($_POST['impresent'])){
        $studentName = $_POST['studentName'];
        $studentId = $_POST['studentId'];
        $studCourseY = $_POST['studCourseY'];
        $TIME = date("h:i A");
        // $classDate = $_POST['classDate'];
        // $timeIn = $_POST['timeIn'];
        $greetings = $_POST['greetings'];

        $query = "INSERT INTO students (studentName, studentId, studCourseY, greetings, timeIn)
         VALUES ('$studentName', '$studentId', '$studCourseY', '$greetings', '$TIME')";
        mysqli_query($db, $query);

        // $_SESSION['message'] = "new record has been saved";
        // $_SESSION['msg_type'] = "green-500";

        // header("location: ../index.php");
        header("location: ../index.php");
    }

?>
