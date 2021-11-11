<?php

    // connection
    $db = mysqli_connect('localhost', 'root', '', 'attendance');

    // correct timezone
      date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");

    // code for retrieve from database
    $studPresent = mysqli_query($db, "SELECT * FROM students ");
    $prof = mysqli_query($db, "SELECT * FROM professor");
    $getStudents = mysqli_query($db, "SELECT * FROM professor");

    $TIME = date("h:i:s A");

    // insert to database
    if(isset($_POST['startclass'])){
        $profName = $_POST['profName'];
        $profSubject = $_POST['profSubject'];
        $totalStud = $_POST['totalStud'];
        $classCourseY = $_POST['classCourseY'];
        $yearlevel = $_POST['yearlevel'];
        $block = $_POST['block'];
        $timeOut = $_POST['timeOut'];
        $TIME = date("h:i A");
 
        $queryProf = "INSERT INTO professor (profName, profSubject, totalStud, classCourseY, yearlevel, block, timeIn, timeOut)
         VALUES ('$profName', '$profSubject', '$totalStud', '$classCourseY', '$yearlevel', '$block', '$TIME', '$timeOut')";
        mysqli_query($db, $queryProf);

        // $_SESSION['message'] = "new record has been saved";
        // $_SESSION['msg_type'] = "green-500";

        header("location: attendance.php");
    }

    // get the total number of present
    $sql = "SELECT count(id) AS total FROM students";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $num_rows = $values['total'];


    // drop and empty database of professor table
    if (isset($_GET['endclass'])) {
            $id = $_GET['endclass'];
            // query all data from professor table and DELETE
            mysqli_query($db, "TRUNCATE TABLE professor");
            // query all data from students table and DELETE
            mysqli_query($db, "TRUNCATE TABLE students");
            ;
            header('location: ../../index.php');
        }

?>