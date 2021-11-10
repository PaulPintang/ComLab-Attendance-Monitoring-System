<!-- login page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/main.css">
  <title>Atendance Monitoring System</title>
</head>
<body>
  <div class="container-fluid">
    <div class="flex justify-center flex-col items-center h-screen space-y-3 ">
      <div class="text-center">
        <div class="flex items-center">
         <form action="auth.php" method="POST">
                <div class="flex flex-col space-y-5 w-96">
                    <div>
                        <h1 class="text-4xl">Login</h1>
                    </div>
                    <div>
                    </div>
                    <div class="flex flex-start text-xl text-gray-700">
                         <label for="" >Username</label>
                    </div>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none" placeholder="Your username" name="username" required>
                    <div class="flex flex-start text-xl text-gray-700">
                         <label for="" >Password</label>
                    </div>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-purple-500 focus:outline-none" placeholder="Your password" name="password" required>
                    <div class="flex justify-center">
                        <button class="rounded p-3 pl-5 pr-5 text-white w-full bg-purple-900 bg" type="submit" name="login">Login</button>
                    </div>
                </div>
         </form>
      </div> 
    </div>
  </div>
 
</body>
</html>