<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

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
    <title>Document</title>
</head>
<body>
   <div class="top-background">
    <div class="menu" id="st">
        <ul class="menu-ul">
            <li><a href="{{ url('/')}}" class="nav-link">Home</a></li>
            <li><a href="{{ url('/more-designs')}}" class="nav-link">Our Designs</a></li>
            <li><a href="{{ url('/')}}" class="nav-link">Why Us</a></li>
            <li><a href="{{ url('/')}}" class="nav-link">Appointment</a></li>
            <li><a href="{{ url('/login')}}" class="nav-link">Sign In</a></li>
        </ul>
    </div>
</div>
<div class="overlay" data-aos="fade-left">
    <div class="container1"></div>
    <div class="container2"></div>
    <div class="container3"></div>
    <div class="container4"></div>
</div>

<main data-aos="zoom-in">
    <h1><span>Kitchen Designs</span></h1>
    <h4><span>L shape, U Shape, Breakfast Counter and many more</span></h4>
</main>

<div class="over" data-aos="fade-right">
    <div class="container5"></div>
    <div class="container6"></div>
    <div class="container7"></div>
    <div class="container8"></div>
</div>

<div class="sec" data-aos="zoom-in">
    <h1><span>Bedroom Designs</span></h1>
    <h4><span>Contemporary,Beige Modern,Compact Modern etc </span></h4>
</div>

<div class="over2" data-aos="fade-left">
    <div class="container9"></div>
    <div class="container10"></div>
    <div class="container11"></div>
    <div class="container12"></div>
</div>

<div class="sec2" data-aos="zoom-in">
    <h1><span>Home Office<br/> Designs</span></h1>
    <h4><span>Contemporary,Spacious,Modern Home Office and More </span></h4>
</div>

<div class="over3" data-aos="fade-right">
    <div class="container13"></div>
    <div class="container14"></div>
    <div class="container15"></div>
    <div class="container16"></div>
</div>

<div class="sec3" data-aos="zoom-in">
    <h1><span>Bathroom<br/> Designs</span></h1>
    <h4><span>Contemporary Beige, Convenient Modern style and More </span></h4>
</div>
</body>
</html>

<script>
    AOS.init({
        duration:1400
    });
</script>