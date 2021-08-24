<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>List of present student's in your class</title>
</head>
<body>
    <!-- include connection to student database -->
    <?php include('./../../students/student_attendance/studentprocess.php');?>

    <!-- include the process in professor page -->
    <?php include('profprocess.php');?>

    <div class="mx-auto" style="max-width: 1100px">
        <div class="h-14 flex justify-between items-center text-sm sticky top-0 bg-white">
            <h1>BUPC Attendance Monitoring System</h1>
            <div class="flex gap-5">
            <?php while ($row = mysqli_fetch_array($prof)) { ?>
                <div class="text-gray-500 flex gap-1 ">
                    <p class=" text-yellow-400">Professor:</p>
                    <p><?php echo $row['profName'];?></p>
                </div>

            <div class="flex items-center text-gray-500 gap-1">
                <i class="far fa-clock"></i>
                <p>Time out: <span class="text-red-400"><?php echo $row['timeOut'];?></span></p>
            </div>
            </div>
        </div>
        <div class="pt-10">
            <div class="flex justify-between">
                <div>
                <div class="flex items-center">
                    <h1>Hi <span><?php echo strtok($row['profName'], " ");?></span></h1>
                    <img src="../../images/wave.gif" alt="" style="width:30px">
                </div>
                <div class="pb-4">
                    <!-- <h3 style="font-size: 40px">Who are you looking for ?</h3> -->
                    <h3 style="font-size: 40px">Let's look who's here today !!</h3>
                </div> 
                <div class="text-sm">
                    <div class="flex gap-1 items-center">
                        <p>Your Subject:</p>
                        <p class="text-gray-500"><?php echo $row['profSubject']; ?></p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Course and Year:</p>
                        <p  class="text-gray-500"><?php echo $row['classCourseY'];?></p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Total no. of students:</p>
                        <p class="text-gray-500"><?php echo $row['totalStud'];?></p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Date:</p>
                        <p class="text-gray-500"><?php echo $date;?></p>
                        <!-- <p class="text-gray-500" id="date"></p> -->
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Time in:</p>
                        <p class="text-gray-500"><?php echo $row['timeIn']; ?></p>
                    </div>
                    <!-- <div class="flex gap-1 items-center">
                        <p>Exact time to end of the class: </p>
                        <p class="text-gray-500"><?php echo $row['timeOut']; ?></p>
                    </div> -->
        
                
                    <div class="flex gap-1 items-center">
                        <p>Clock: </p>
                        <!-- <div class="text-red-400" id="MyClockDisplay" onload="showTime()"></div> -->
                        <div class="text-red-400"><?php echo $TIME;?></div>
                    </div>
                    <div class="pt-3">
                    <a href="profprocess.php?endclass=<?php echo $row['id']; ?>">
                      <button class="rounded p-1 pl-4 pr-4 bg-green-400 text-white" type="submit" name="endclass">End class</button>
                    </a>
                      <small class="block text-gray-500 max-w-xs">Clicking this will end the class and generate a file of list of present students in your class today!!</small>
                    </div>
                </div>
             <?php } ?>
                </div>
                <div>
                    <img src="../../images/present.svg" alt="" style="width:380px">
                </div>
            </div>
        </div>
        <div class="flex gap-2 w-1/2 pt-7 pb-10">
            <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full"
             placeholder="who's here today..."
             name="search_text"
             id="search_text"
             >
            <button class="rounded p-1 pl-5 pr-5 text-white" style="background-color: #FF8A00;" type="submit">Search</button>
        </div>
       
        </div>
        <div class="bg-gray-100">


        <!-- table -->
       <div style="font-size: 12px; max-width: 1100px" class="mx-auto">
       <div class="flex justify-between text-gray-500 text-sm pt-10 pb-4">
            <p class="">
                    Your Students:
            </p>
            <p>Total present: <span class="bg-yellow-400 text-white"><span><?php echo $num_rows?></span> Students</span></p>
       </div>
  
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-2">rank time</div>
                <div class="col col-2">Name</div>
                <div class="col col-2">Time in</div>
                <div class="col col-2">Student ID</div>
                <div class="col col-2">Year&Block</div>
                <!-- <div class="col col-2">Subject</div> -->
                <div class="col col-2">Greetings</div>
            </li>
            <?php while ($row = mysqli_fetch_array($studPresent)) { ?>
                <li class="table-row" id="getdata">
                    <div class="col col-2" ><?php echo $row['id']; ?></div>
                    <div class="col col-2 text-yellow-500" ><?php echo $row['studentName']; ?></div>
                    <div class="col col-2" ><?php echo $row['timeIn']; ?></div>
                    <div class="col col-2" ><?php echo $row['studentId']; ?></div>
                    <div class="col col-2" ><?php echo $row['studCourseY']; ?></div>
                    <div class="col col-2" ><?php echo $row['greetings']?></div>
                </li>
            <?php } ?>
        </ul>
        </div>
        <div class="h-28"></div>
        <div class="flex justify-center text-gray-500 pb-4">
            <small>BUPC Attendance Monitoring System &copy; 2021</small>
        </div>
        </div>
    </div>
   

 <script>
    function showTime(){
    var date = new Date();
    var d = date.getDate();
    var d1 = date.getDay();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "PM";
    
    if(h == 02){
        h = 12;
    }
    
    
    if(h > 12){
        session = "PM";
    }
    if(h < 12) {
    session = "AM"
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    }
    showTime();
 </script>
</body>
</html>