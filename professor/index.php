<?php
    include('../admin/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Good day !!</title>
     
    <style>
           .show {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;

  
}
    </style>
</head>
<body>
    <?php include('./attendancetable/profprocess.php');?>
    <div class="mx-auto flex flex-col items-center justify-center h-screen" style="max-width: 1100px;">
        <div class="flex justify-around" style="margin-top: -30px; margin-bottom: 30px">
            <h1 style="font-size: 3rem;">Let's start the class!</h1>
        </div>
        <div  class="flex justify-around gap-9">
             <!-- <div class="self-center">
                <img src="../images/start2.svg" alt="" style="width: 600px">
            </div> -->
            <form action="./attendancetable/profprocess.php" method="POST">
                <div class="flex flex-col space-y-3 w-96">
                    <p class="text-sm"> <span class="text-purple-600">Note: </span>The date and time is auto detect by the system once you submit your inputs. Thank you !!</p>
                    <p class="text-sm"><span class="text-purple-600">Date today: </span> <?php echo $date;?></p>
                    <select class="input border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="" name="profName" required>
                        <option selected disabled hidden>Professor</option>
                        <?php $profaccounts = mysqli_query($db, "SELECT * FROM profaccounts ORDER BY ID DESC"); ?>
                        <?php while ($row = mysqli_fetch_array($profaccounts)) { ?>
                            <option class="text-xs"><?php echo $row['profName'] ?></option>
                        <?php }?>
                    </select>

                    <select class="input border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="" name="profSubject" required>
                        <option selected disabled hidden>Subject</option>
                        <?php $subjects = mysqli_query($db, "SELECT * FROM subjects ORDER BY ID DESC"); ?>
                        <?php while ($row = mysqli_fetch_array($subjects)) { ?>
                            <option class="text-xs" value="<?php echo $row['subject'] ?>"><?php echo $row['subject']; ?></option>
                        <?php }?>
                    </select>
                    
                    <select class="input text-xs border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="" name="classCourseY" required>
                        <option class="text-sm w-full" selected disabled hidden>Course</option>
                        <?php $course = mysqli_query($db, "SELECT * FROM courses ORDER BY ID DESC"); ?>
                        <?php while ($row = mysqli_fetch_array($course)) { ?>
                            <option  class="text-xs w-full" value="<?php echo $row['code']?>"><?php echo $row['course'] ?></option>
                        <?php }?>
                    </select>

                    <div class="flex gap-2">
                        <select class="input text-xs border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="" name="yearlevel" required>
                            <option selected disabled hidden>Year Level</option>
                            <option class="text-xs" value="1">1st Year</option>
                            <option class="text-xs" value="2">2nd Year</option>
                            <option class="text-xs" value="3">3rd Year</option>
                            <option class="text-xs" value="4">4th Year</option>
                        </select>
                        <select class="input text-xs border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="" name="block" required>
                            <option selected disabled hidden>Block</option>
                            <option class="text-xs" value="A">A</option>
                            <option class="text-xs" value="B">B</option>
                            <option class="text-xs" value="C">C</option>
                            <option class="text-xs" value="D">D</option>
                        </select>
                    </div>
                    <small style="font-size: 10px" class="text-gray-500">This timeout is the exact time to end the class: Example: type '12:00 AM '</small>
                    
                    
                    <div  class="flex gap-2">
                    <input type="number" class="input border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="No. of students" name="totalStud" required>
                    <input type="text" class="input border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="Time out" name="timeOut" required>
                    </div>

                    
                    <div class="flex justify-center">
                            <a href="#inputCode"  data-toggle="modal" class="button bg-purple-900 rounded p-3 pl-5 pr-5 text-white w-full">Let's Start</a>
                    </div>
                </div>
                 <?php include './popUp.php'?>
            </form>
        </div>
      
    </div>
  <script src="../js/jquery-1.12.4.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- <script>
let input = document.querySelector(".input");
let warn = document.querySelector(".warn");
let code = document.querySelector(".code");
code.disabled = true;
warn.style.display = "block";
input.addEventListener("change", stateHandle);

function stateHandle() {
    if(input.value === "") {
       warn.style.display = "block";
       code.disabled = true;
    } else {
       warn.style.display = "none";
       code.disabled = false;
    }
}
</script> -->
</body>
</html>