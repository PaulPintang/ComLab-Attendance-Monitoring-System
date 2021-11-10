<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Student Page</title>
</head>
<body>
    <?php
         date_default_timezone_set("Asia/Manila");
         $date = date("D M d, Y");
    ?>
    <div class="mx-auto flex flex-col items-center justify-center h-screen" style="max-width: 1100px;">
        <div class="" style="margin-bottom: 40px">
            <h1 style="font-size: 3rem;">Hi, Great day Student!</h1>

        </div>
        <div class="flex justify-around gap-9">
            <!-- <div class="self-center">
                <img src="../../images/student1.svg" alt="" style="width: 530px">
            </div> -->
            <form action="auth.php" method="POST">
                <div class="flex flex-col space-y-3 w-96">
                    <p> <span class="text-purple-600">Note: </span>your time in will auto detect by the system once you submit your inputs. Thank you !!</p>
                    <p><span class="text-purple-600">Date today: </span> <?php echo $date; ?></p>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="text-white pb-2 pt-2 pl-4 bg-red-500 text-sm">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>

                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none" placeholder="Your fullname" name="studentName" >
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none" placeholder="Your student ID" name="studentId" >
                    <div>
                        <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none w-full" placeholder="Your PC no." name="pcNum">
                    </div>
                    <div class="flex justify-center">
                            <button class="bg-purple-900 rounded p-3 pl-5 pr-5 text-white w-full"
                            type="submit" name="startclass">Let's Start</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>