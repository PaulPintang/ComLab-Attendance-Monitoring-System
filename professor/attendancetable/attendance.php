<?php
    session_start();
    if (isset($_SESSION['id']) && (isset($_SESSION['profName']))) {
        # code...
?>

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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>BUPC AMS</title>

</head>

<body>
  <!-- include the process in professor page -->
  <!-- <?php include('profprocess.php'); ?> -->

  <div class="mx-auto" style="max-width: 1100px">
    <div class="h-14 flex justify-between items-center text-sm sticky top-0 bg-white">
      <h1 class="font-bold uppercase text-gray-600">Attendance Monitoring System for CSD Laboratory</h1>
      <div class="flex gap-5">
        <?php while ($row = mysqli_fetch_array($prof)) { ?>
          <div class="text-gray-500 flex gap-1 ">
            <p class=" text-gray-500">Professor:</p>
            <p class="text-indigo-500"><?php echo $row['profName']; ?></p>
          </div>

          <div class="flex items-center text-gray-500 gap-1">
            <i class="far fa-clock"></i>
            <p>Time out: <span class="text-indigo-500"><?php echo $row['timeOut']; ?></span></p>
          </div>
      </div>
    </div>
    <div class="pt-10">
      <div class="flex justify-between">
        <div>
          <div class="flex items-center">
            <h1 class="font-bold uppercase text-indigo-700"><span>Good Day !!</span></h1>
           
          </div>
          <div class="pb-4">
            <!-- <h3 style="font-size: 40px">Who are you looking for ?</h3> -->
            <!-- <h3 style="font-size: 40px">Let's look who's here today !!</h3> -->
          </div>
          <div class="text-sm">
            <div class="flex gap-1 items-center">
              <p>Subject:</p>
              <p class="text-indigo-500"><?php echo $row['profSubject']; ?></p>
            </div>
            <div class="flex gap-1 items-center">
              <p>Course and Year:</p>
              <p class="text-indigo-500"><?php echo $row['classCourseY']; ?>-<?php echo $row['yearlevel']; ?><?php echo $row['block']; ?></p>
            </div>
            <div class="flex gap-1 items-center">
              <p>Total no. of students:</p>
              <p class="text-indigo-500"><?php echo $row['totalStud']; ?></p>
            </div>
            <div class="flex gap-1 items-center">
              <p>Date:</p>
              <p class="text-indigo-500"><?php echo $date; ?></p>
              <!-- <p class="text-gray-500" id="date"></p> -->
            </div>
            <div class="flex gap-1 items-center">
              <p>Time in:</p>
              <p class="text-indigo-500"><?php echo $row['timeIn']; ?></p>
            </div>
            <!-- <div class="flex gap-1 items-center">
                        <p>Exact time to end of the class: </p>
                        <p class="text-gray-500"><?php echo $row['timeOut']; ?></p>
                    </div> -->


            <div class="flex gap-1 items-center">
              <p>Clock: </p>
              <div class="text-indigo-500" id="MyClockDisplay" onload="showTime()"></div>
            </div>

            <!-- End class button with print -->


            <div class="pt-3 pb-2">



              <!-- Jessie Code                     -->


              <!-- <button class="rounded p-1 pl-4 pr-4 bg-green-400 text-white" type="submit" name="endclass">End class</button> -->
              </a>
              <small class="block text-gray-500 max-w-xs">Clicking this will end the class and generate a file of list of present students in your class today!!</small>
            </div>

           

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
                    <button class="text-purple-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                      Cancel
                    </button>

                    <a href="profprocess.php?endclass=<?php echo $row['id']; ?>">
                      <button name="endclass" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 transition-all text-base font-medium text-white hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm type=" button" onclick="toggleModal('modal-id')">
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
            function toggleModal(modalID) {
              document.getElementById(modalID).classList.toggle("hidden");
              document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
              document.getElementById(modalID).classList.toggle("flex");
              document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
          </script>

          <br><br>

          <!-- End class button with print -->


          </div>

        </div>
        <div>
          <img src="../../images/polangui.jpg" alt="" style="width:200px">
        </div>
      </div>

        <div class="flex justify-between w-full pb-10" style="margin-top: -20px">
              <div class="flex gap-2">
                  <button class=" p-2 pl-5 pr-5 bg-transparent border-2 border-indigo-500 hover:border-red-500 text-white-500 text-sm rounded-lg transition-colors duration-300 transform hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-indigo-300" type="button" onclick="toggleModal('modal-id')">
                    End Class
                  </button>
                 <a href="generate-report.php"><button class=" p-2 pl-5 pr-5 bg-transparent border-2 border-indigo-500 text-white-500 text-sm rounded-lg transition-colors duration-300 transform hover:bg-indigo-500 hover:text-gray-100 focus:border-4 focus:border-indigo-300">
                    Generate Report
                  </button></a> 
              </div>
              <div>
              <input type="text" id="myInput" onkeyup="myFunction()" class="border-2 border-opacity-50 border-indigo-400 rounded p-2 text-sm focus:border-purple-500 focus:outline-none" placeholder="Search student..." >
              </div>
        </div>
    </div>



  </div>
  <div class="bg-gray-100">


    <!-- table -->
    <div style="font-size: 12px; max-width: 1100px" class="mx-auto">
      <div class="flex justify-between text-gray-500 text-sm pt-10 pb-4" id="total">
        <!-- display total students here -->
      </div>

      <table class="min-w-full divide-y divide-gray-200" id="data">
	   <thead class="bg-gray-50">
	     <tr>

	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Rank Time
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Name
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Time In
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Student ID
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         PC no.
	       </th>
	     </tr>
	   </thead>

	   <tbody class="bg-white divide-y divide-gray-200" id="myTable">
	     <tr>
	       <?php while ($row = mysqli_fetch_array($studPresent)) { ?>
	         <td class="px-6 py-4 whitespace-nowrap">
	           <div class="text-sm font-medium text-gray-900">
	             <?php echo $row['id']; ?>
	           </div>

	         </td>
	         <td class="px-6 py-4 whitespace-nowrap" id="name">
	           <div class="text-sm text-gray-900"><?php echo $row['studentName']; ?></div>
	        
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap">
	           <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
	             <?php echo $row['timeIn']; ?>
	           </span>
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	           <?php echo $row['studentId']; ?>
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	          PC-<?php echo $row['pcNum'] ?>
	         </td>
	     </tr>
	   <?php } ?>

	   </tbody>
	 </table>



    </div>




    



    <div class="h-28"></div>
    <div class="flex justify-center text-gray-500 pb-4">
      <small>BUPC Attendance Monitoring System &copy; 2021</small>
    </div>
  </div>
  </div>


  <script>
    function showTime() {
      var date = new Date();
      var d = date.getDate();
      var d1 = date.getDay();
      var h = date.getHours(); // 0 - 23
      var m = date.getMinutes(); // 0 - 59
      var s = date.getSeconds(); // 0 - 59
      var session = "PM";

      if (h == 02) {
        h = 12;
      }


      if (h > 12) {
        session = "PM";
      }
      if (h < 12) {
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

    // window.onload = loadTotal;



    
  </script>
  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
  
</body>

</html>
<?php
    }else{
          header("location: ../index.php");
          exit();
    }

?>