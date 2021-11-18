<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'attendance');
     // date
    date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");

 if(isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
    

        if (empty($username)) {
            header("Location: ./index.php?error=Ooops! your fullname is required");
            exit();
        } else if(empty($password)){
            header("Location: ./index.php?error=Ooops! your student ID is required");
            exit();
        }
        else{
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result)) {
               
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];

                    header('location: ./home/');
                    echo "tama";

                }
                else{
                    header("Location: ./index.php?error=Ooops! something went wrong, please check your inputs");
                    exit();
                    // header("location: student.php");
              }
            }

    }else{
        header('location: index.php');
        exit();
    }

?>