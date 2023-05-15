<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script>
        function stmenu(){
            var st=document.getElementById("st");
            if(window.pageYOffset>20){
                st.classList.add("st");
                st.classList.remove("menu-ul");
            }
            else{
                st.classList.remove("st");
            }
        }
       window.onscroll=function(){
        stmenu();
       } 
    </script>
    <title>@yield('title')</title>
</head>
<body>
   <div class="top-background w-100">
    <div class="menu" id="st">
        <ul class="menu-ul d-flex align-items-center justify-content-center color-white">
            <li><a href="#Home" class="nav-link">Home</a></li>
            <li><a href="{{ url('/more-designs') }}" class="nav-link">Our Designs</a></li>
            <li><a href="#Why Us" class="nav-link">Why Us</a></li>
            <li><a href="#Appointment" class="nav-link">Appointment</a></li>
            <li><a href="{{ url('/members') }}" class="nav-link">Members</a></li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-dark " style="text-decoration:none"><i class="fa fa-user mx-1 text-dark"></i> Logout</a></li>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">@csrf</form>

                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Sign In</a></li>
                    @endauth
                </div>
            @endif
        </ul>
    </div>