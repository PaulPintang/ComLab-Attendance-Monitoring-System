<style>
  .container-fluid{
    background-image: url(images/torch.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    
  }
</style>
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
          <h1 style="font-size: 50px">Hi, Good day Professor</h1>
          <img src="./images/wave.gif" alt="" style="width: 80px; mix-blend-mode: overlay;">
        </div>
        <p class="max-w-md text-center mx-auto text-sm text-gray-500">
          "This is the BUPC Attendance Monitoring System , Lorem ipsum dolor sit amet usandae! Cum maxime autem quia, expedita quisquam is"</p>
      </div> 
      <div>
        <a href="./professor/index.php">
          <button class="rounded pt-1 pb-1 pl-3 pr-3 text-white" style="background-color: #FF8A00;">Start Your Class</button>
        </a>
      </div>
    </div>
  </div>
 
</body>
</html>