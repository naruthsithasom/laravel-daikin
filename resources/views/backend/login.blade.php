<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/backend/dist/images/logo.svg" rel="shortcut icon">
        <title>Backoffice Diakin</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/backend/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    {{-- <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone - HTML Admin Template" class="w-6" src="/backend/dist/images/logo_diakin.svg">
                        <span class="text-white text-lg ml-3"> Backoffice Diakin </span> 
                    </a> --}}
                    <div class="my-auto">
                        <img  class="-intro-x w-1/2 -mt-16" src="/backend/dist/images/logo_diakin.svg">
                        
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
               
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center"><img src="/logo.png"></div>
                        <form action="{{ url('webpanel/authenPost') }}" method='post'>
                         @csrf
                        <div class="intro-x mt-8">
                            <input type="text" name="uname" class="intro-x login__input form-control py-3 px-4 block" placeholder="Username">
                            <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                        </div>
                        
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        </div>
                        </form>
                    </div>
                </div>
                
                <!-- END: Login Form -->
            </div>
        </div>
        
        
        <!-- BEGIN: JS Assets-->
        <script src="/backend/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>