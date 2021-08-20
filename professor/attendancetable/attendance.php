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
    <div class="mx-auto" style="max-width: 1100px">
        <div class="h-14 flex justify-between items-center text-sm sticky top-0 bg-white">
            <h1>BUPC Attendance Monitoring System</h1>
            <div class="flex gap-5">
                <div class="text-gray-500 flex gap-1 ">
                    <p class=" text-yellow-400">Professor: </p>
                    <p>Allan Rempillo</p>
                </div>
            <div class="flex items-center text-gray-500 gap-1">
                <i class="far fa-clock"></i>
                <p>Time out: <span class="text-red-400">11:00 AM</span></p>
            </div>
            </div>
        </div>
        <div class="pt-10">
            <div class="flex justify-between">
                <div>
                <div class="flex items-center">
                    <h1>Hi Allan</h1>
                    <img src="../../images/wave.gif" alt="" style="width:30px">
                </div>
                <div class="pb-4">
                    <!-- <h3 style="font-size: 40px">Who are you looking for ?</h3> -->
                    <h3 style="font-size: 40px">Let's look who's here today !!</h3>
                </div> 
                <div class="text-sm">
                    <div class="flex gap-1 items-center">
                        <p>Your Subject:</p>
                        <p class="text-gray-500">Rizal Works</p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Course and Year:</p>
                        <p  class="text-gray-500">BSIS - 4A</p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Total no. of students:</p>
                        <p class="text-gray-500">38</p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Date:</p>
                        <p class="text-gray-500" id="date"></p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Time in:</p>
                        <p class="text-gray-500">10:00 AM</p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p>Clock: </p>
                        <!-- <div class="text-red-400" id="txt"></div> -->
                        <div class="text-red-400" id="clock"></div>
                    </div>
                    <div class="pt-3">
                      <button class="rounded p-1 pl-4 pr-4 bg-green-400 text-white" type="submit">End class</button>
                      <small class="block text-gray-500 max-w-xs">Clicking this will end the class and generate a file of list of present students in your class today!!</small>
                    </div>
                </div>
                </div>
                <div>
                    <img src="../../images/present.svg" alt="" style="width:380px">
                </div>
            </div>
        </div>
        <div class="flex gap-2 w-1/2 pt-7 pb-10">
            <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="Search present student...">
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
            <p>Total present: <span class="bg-yellow-400 text-white">35 Students</span></p>
       </div>
    
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-2">Name</div>
                <div class="col col-3">Time in</div>
                <div class="col col-2">Student ID</div>
                <div class="col col-2">Year&Block</div>
                <div class="col col-2">Subject</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
            <li class="table-row">
                <div class="col col-2 text-yellow-500" data-label="Job Id">Paul Justine Pintang</div>
                <div class="col col-3" data-label="Job Id">7:40 PM</div>
                <div class="col col-2" data-label="Customer Name">BU-6523</div>
                <div class="col col-2" data-label="Amount">BSIS-4A</div>
                <div class="col col-2" data-label="Payment Status">Rizal Works</div>
            </li>
        </ul>
        </div>
        <div class="h-28"></div>
        <div class="flex justify-center text-gray-500 pb-4">
            <small>BUPC Attendance Monitoring System &copy; 2021</small>
        </div>
        </div>
    </div>
   

 <script>
    //  Script for clock
    // function currentTime() {
    //     var date = new Date(); /* creating object of Date class */
    //     var hour = date.getHours();
    //     var min = date.getMinutes();
    //     var sec = date.getSeconds();
    //     var midday = "AM";
    //     midday = (hour >= 12) ? "PM" : "AM";
    //     hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour);
    //     hour = updateTime(hour);
    //     min = updateTime(min);
    //     sec = updateTime(sec);
    //     document.getElementById("clock").innerText = hour + " : " + min + " : " + sec + " : " + midday; /* adding time to the div */
    //     var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
    //     }
    //     function updateTime(k) {
    //     if (k < 10) {
    //         return "0" + k;
    //     }
    //     else {
    //         return k;
    //     }
    //     }
    //  currentTime(); /* calling currentTime() function to initiate the process */
        var myDate = new Date();
        var today = new Date();

        var month=new Array();
        month[0]="Jan";
        month[1]="Feb";
        month[2]="Mar";
        month[3]="Apr";
        month[4]="May";
        month[5]="Jun";
        month[6]="Jul";
        month[7]="Aug";
        month[8]="Sep";
        month[9]="Oct";
        month[10]="Nov";
        month[11]="Dec";
        var hours = myDate.getHours();
        var minutes = myDate.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';
        hours = hours % 12;
        hours = hours ? hours : 12;
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ampm;
        // e.g. "13 Nov 2016 11:00pm";
        document.querySelector('#date').innerHTML=(month[myDate.getMonth()]+" "+myDate.getDate()+" "+myDate.getFullYear()+" ");
        </script>
</body>
</html>