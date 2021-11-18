<?php

    session_start();
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

    if(isset($_POST['profName']) && isset($_POST['passcode'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $profName = validate($_POST['profName']);
        $passcode = validate($_POST['passcode']);
    

        if (empty($profName)) {
            header("Location: ../index.php?error=profName is required");
            exit();
        } else if(empty($passcode)){
            header("Location: ../index.php?error=passcode is required");
            exit();
        }
        // pag goods su profName and pass amo kadi maga execute na code
        else{
            $sql = "SELECT * FROM profaccounts WHERE profName='$profName' AND passcode='$passcode'";

            $result = mysqli_query($db, $sql);

            // binutang ko ide kading insert to database para pag tama lang su profName and pass saka lang sya maga insert sa database. 
            // pag sala su profName and pass diman da mangyayare na INSERT INTO database.
            if(mysqli_num_rows($result)) {

                  // // insert to database
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
                      
                  }

                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['profName'] = $row['profName'];
                    $_SESSION['id'] = $row['id'];

                  header("location: attendance.php");

                }
                    else{
                    header("Location: ../index.php?error=There is something wrong in your passcode!");
                    exit();
              }
            }

    }


    // // insert to database
    // if(isset($_POST['startclass'])){
    //     $profName = $_POST['profName'];
    //     $profSubject = $_POST['profSubject'];
    //     $totalStud = $_POST['totalStud'];
    //     $classCourseY = $_POST['classCourseY'];
    //     $yearlevel = $_POST['yearlevel'];
    //     $block = $_POST['block'];
    //     $timeOut = $_POST['timeOut'];
    //     $TIME = date("h:i A");
 
    //     $queryProf = "INSERT INTO professor (profName, profSubject, totalStud, classCourseY, yearlevel, block, timeIn, timeOut)
    //      VALUES ('$profName', '$profSubject', '$totalStud', '$classCourseY', '$yearlevel', '$block', '$TIME', '$timeOut')";
    //     mysqli_query($db, $queryProf);

    //     // $_SESSION['message'] = "new record has been saved";
    //     // $_SESSION['msg_type'] = "green-500";

    //     header("location: attendance.php");
    // }

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