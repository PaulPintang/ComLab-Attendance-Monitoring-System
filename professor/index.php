<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Good day !!</title>
</head>
<body>
    <div class="mx-auto flex flex-col items-center justify-center h-screen" style="max-width: 1100px;">
        <div class="self-start" style="margin-top: -80px">
            <h1 style="font-size: 3rem;">Let's start the class !!</h1>
        </div>
        <div  class="flex justify-around gap-9">
             <div class="self-center">
                <img src="../images/start2.svg" alt="" style="width: 600px">
            </div>
            <div class="flex flex-col space-y-4 w-96">
                <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none" placeholder="Your name">
                <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none" placeholder="Your subject">
                <div class="flex gap-2">
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="Your class course">
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="Your class block">
                </div>
                <div class="flex gap-2">
                     <input type="date" name="datetoday" id="datetoday" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-600 focus:outline-none w-full">
                    <input type="time" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="time in">
                </div>
                <div>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full h-12" placeholder="Add greetings here...">
                </div>
                 <div class="flex justify-center">
                    <button class="rounded p-3 pl-5 pr-5 text-white w-full" style="background-color: #FF8A00;" type="submit">Let's Start</button>
                </div>
                <div>
                    <p class="text-gray-500" style="font-size: 12px">Hi! this inputs will also seen in your student pc. And don't forget to start your class with a smile :)</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>