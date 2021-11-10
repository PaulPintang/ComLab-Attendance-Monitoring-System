

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title>Atendance Monitoring System</title>
</head>
<body>
  <div class="container-fluid">
    <!-- <div class="flex justify-between h-14 items-center">
        <p>BUPC Attendance Monitoring System</p>
        <p>theme switcher / darkmode</p>
    </div> -->
    <div class="flex justify-center flex-col items-center h-screen space-y-3 ">
      <!-- <div class="p-4">
        <img src="./images/torch.jpg" alt="">
      </div> -->
      <div class="text-center">
        <div class="flex items-center">
          <h1 style="font-size: 50px">Who are you?</h1>
        </div>
        <p class="max-w-md text-center mx-auto text-sm text-gray-500">
          </p>
      </div> 
      <div>
      <div class="ml-3 inline-flex rounded-md shadow">
        <a href="./professor/index.php" class="border-purple-900 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
          I'm Professor
        </a>
      </div>
        <div class="ml-3 inline-flex rounded-md shadow ">
        <a href="./students/student_attendance/student.php" class="border-purple-900 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
          I'm Student
        </a>
      </div>
      </div>
    </div>
  </div>
 
</body>
</html>