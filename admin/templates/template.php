<?php
include('../conn.php');
    session_start();
    if (isset($_SESSION['id']) && (isset($_SESSION['username']))) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>College Student Council 2021</title>
    <script>
        function display_ct6() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            // var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
            x1 = hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
            document.getElementById('ct6').innerHTML = x1;
            display_c6();
        }
        function display_c6(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct6()',refresh)
        }
    </script>
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }

        .button:active {
        background: #007a63;
        }

        .button-text {
        color: #ffffff;
        transition: all 0.2s;
        }

        .button--loading .button-text {
        visibility: hidden;
        opacity: 0;
        }

        .button--loading::after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        border: 4px solid transparent;
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: button-loading-spinner 1s ease infinite;
        }

        @keyframes button-loading-spinner {
        from {
            transform: rotate(0turn);
        }

        to {
            transform: rotate(1turn);
        }
        }

   </style>
</head>
<body onload=display_c6();>
    <section class="px-6 md:px-14 lg:px-14">
        <div class="flex mx-auto container justify-between items-center">
            <div class="flex items-center gap-3 py-7">
                 <!-- <img class="h-8 w-auto sm:h-10" src="../images/index.jpg" > -->
                <div>
                    <h1 class="font-bold uppercase text-gray-600">Attendance Monitoring System for CSD Laboratory</h1>
                </div>
            </div>
            <div class="flex items-center gap-2">
                    <div class="hidden md:flex items-center text-sm text-gray-600">
                       <p> Hello, </p>
                       <img src="../../images/wave.gif" alt="" style="width: 30px">
                       <span> Administrator </span>
                    </div>
                    <div class="flex-shrink-0 h-10 w-10 pl-2">
                        <!-- <img class="h-10 w-10 rounded-full" src="<?php echo '../modals/upload/' . $row['picture']; ?>" alt=""> -->
                    </div>
                <div class="opacity-10">|</div>
                 <div>
                     <form action="../logout.php" method="POST">
                            <!-- use for status -->
                            <input type="hidden" name="status" value="Offline">
                            <input type="hidden" name="username" value="">
                            <!-- end -->
                            <button type="submit" name="logout">
                                <i class="fas fa-sign-out-alt text-gray-400 hover:text-red-300 transition-all"></i>
                            </button>
                        </form>
                </div>
            </div>
        </div>
        <hr class="opacity-30">
        <div class="flex gap-3 container mx-auto py-4 items-center" style="font-size: 12px">
            <!-- <button class="bg-gray-100 rounded py-3 px-5 text-gray-700">Dashboard</button> -->
            <h1 class="hidden md:flex lg:flex text-sm font-medium text-gray-700">System Management</h1>
            <div class="hidden md:flex lg:flex h-4 bg-gray-200" style="width: 1.2px"></div>
            <div class="flex justify-between items-center w-full">
                <div class="flex gap-3 items-center ">
                    <a href="../home" class="text-purple-700 hover:text-purple-500 active:text-blue-400 font-medium transition-all">Home</a>
                    <a href="../logs" class="text-gray-400 active:text-blue-400 hover:text-yellow-400 font-medium transition-all">Logs</a>
                    <!-- <a href="../officers"><i class="fas fa-user-cog text-gray-500 hover:text-yellow-300 active:text-blue-500  transition-all"></i></a> -->
                </div>
                <div>
                   <a href="#about" data-toggle="modal">
                         <i class="fas fa-info-circle fa-lg text-gray-400 cursor-pointer hover:text-blue-300 transition-all"></i>
                     </a>
                </div>
            </div>
        </div>
    </section>

    <section class="md:bg-gray-50 lg:bg-gray-50 lg:mx-0 ">
        <div class="container mx-auto h-full flex justify-center items-center">
            <?php require_once $content; ?> 
        </div>
    </section>
    
    <div class="flex justify-center items-end py-5 text-gray-500">
        <small>Attendance Monitoring System for CSD Laboratory &copy; 2021 </small>
    </div>
   </body>
    <script src="../js/jquery-1.12.4.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>