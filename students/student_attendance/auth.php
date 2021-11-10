<?php

    $db = mysqli_connect('localhost', 'root', '', 'attendance');
     // date
    date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");

 if(isset($_POST['studentName']) && isset($_POST['studentId'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $studentName = validate($_POST['studentName']);
        $studentId = validate($_POST['studentId']);
    

        if (empty($studentName)) {
            header("Location: ./student.php?error=Ooops! your fullname is required");
            exit();
        } else if(empty($studentId)){
            header("Location: ./student.php?error=Ooops! your student ID is required");
            exit();
        }
        else{
            $sql = "SELECT * FROM studaccounts WHERE studentName='$studentName' AND studentId='$studentId'";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result)) {
                // INSERT TO DATABASE TABLE 'students'
                 if (isset($_POST['impresent'])) {
                    $studentName = $_POST['studentName'];
                    $studentId = $_POST['studentId'];
                    $pcNum = $_POST['pcNum'];
                    $TIME = date("h:i A");

                    $query = "INSERT INTO students (studentName, studentId, pcNum, timeIn) VALUES ('$studentName', '$studentId', '$pcNum', '$TIME')";
                    mysqli_query($db, $query);
                    }  
                    header("location: ../index.php");
                }
                else{
                    header("Location: ./student.php?error=Ooops! something wasn't right, please check your inputs");
                    exit();
                    // header("location: student.php");
              }
            }

    }else{
        header(location: index.php);
        exit();
    }

?>