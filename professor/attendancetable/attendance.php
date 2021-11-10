<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <title>BUPC AMS</title>
</head>
<body>
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
                        <div class="text-red-400" id="MyClockDisplay" onload="showTime()"></div>
                    </div>

<!-- End class button with print -->


                    <div class="pt-3 pb-2">

                    

<!-- Jessie Code                     -->


                      <!-- <button class="rounded p-1 pl-4 pr-4 bg-green-400 text-white" type="submit" name="endclass">End class</button> -->
                    </a>
                      <small class="block text-gray-500 max-w-xs">Clicking this will end the class and generate a file of list of present students in your class today!!</small>
                    </div>

                    
          <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
            End Class
          </button>
          <button style="background-color: #FF8A00;" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" onclick="window.print()">Print Class</button>
          <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                    End Class?
                  </h3>
                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      ×
                    </span>
                  </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                  <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
                  Are you sure you want to end your class? 
                  All of your data will be permanently removed. This action cannot be undone.
                  </p>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                  <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    Cancel
                  </button>

              <a href="profprocess.php?endclass=<?php echo $row['id']; ?>">    
                  <button name="endclass" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm type="button" onclick="toggleModal('modal-id')">
                    End Class
                  </button>
              </a>    
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
          <script type="text/javascript">
            function toggleModal(modalID){
              document.getElementById(modalID).classList.toggle("hidden");
              document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
              document.getElementById(modalID).classList.toggle("flex");
              document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
          </script>

<!-- End class button with print -->


                </div>

                </div>
                <div>
                    <img src="../../images/polangui.jpg" alt="" style="width:320px">
                </div>
            </div>
        </div>

<!-- Search bar function         -->
        <div class="flex gap-2 w-1/2 pt-7 pb-10">
            <!-- <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full"
             placeholder="who's here today..."
             name="search_text"
             id="search_text"
             > -->

             <input class="form-control border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" id="myInput" type="text" placeholder="Search..">
            <button class="rounded p-1 pl-5 pr-5 text-white" style="background-color: #FF8A00;" type="submit">Search</button>
        </div>

<!-- Search bar function         -->
       
        </div>
        <div class="bg-gray-100">


        <!-- table -->
       <div style="font-size: 12px; max-width: 1100px" class="mx-auto">
       <div class="flex justify-between text-gray-500 text-sm pt-10 pb-4" id="total">
                <!-- display total students here -->
       </div>

        <div class="flex flex-col table-header">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg" id="link_wrapper">
              <!-- table here -->
                 
              </div>
            </div>
          </div>
        </div>

  </div>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<!-- jessie table end -->


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

 <script>
  //  script to auto refresh and update database
function loadTable() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "table.php", true);
  xhttp.send();
}
setInterval(() => {
  loadTable()
}, 7000);

window.onload = loadTable;

function loadTotal() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("total").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "displayTotal.php", true);
  xhttp.send();
}
setInterval(() => {
  loadTotal()
}, 1000);

window.onload = loadTotal;
</script>
</body>
</html>