<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
  <title data-aos="zoom-in">ABOUT OUR TEAM </title>
<div class="wrap">
  <h1 style="font-family: 'Courier New', Courier, monospace;">ABOUT OUR TEAM</h1>
  <div class="team">
    <div class="team_member" data-aos="zoom-in">
      <div class="team_img">
        <img src="{{asset('./images/soumita.jpeg')}}" alt="Team_image">
      </div>
      <h3>SOUMITA KAR</h3>
      <p class="role">Front-End developer, Back-End Developer,  Team Leader</p>
    </div>
    <div class="team_member" data-aos="zoom-in">
      <div class="team_img">
        <img src="{{ asset('./images/tapanjan.jpeg')}}" alt="Team_image">
      </div>
      <h3>TAPANJAN MUKHERJEE</h3>
      <p class="role">Front-End developer,  Ideator </p>
    </div>
    <div class="team_member" data-aos="zoom-in">
      <div class="team_img">
        <img src="{{ asset('./images/trisha2.jpeg')}}" alt="Team_image">
      </div>
      <h3>TRISHA BHOWMICK</h3>
      <p class="role">Front-End developer,   Content Writer</p>
    </div>
    
    <div class="team_member" data-aos="zoom-in">
      <div class="team_img">
        <img src="{{ asset('./images/surjo2.jpeg')}}" alt="Team_image">
      </div>
      <h3>SURJATAPA ROY</h3>
      <p class="role">Documentation</p>
    </div>
    
    <div class="team_member" data-aos="zoom-in">
      <div class="team_img">
        <img src="{{ asset('./images/sanchali.jpeg')}}" alt="Team_image">
      </div>
      <h3>SANCHALI MAJUMDAR</h3>
      <p class="role">Documentation</p>
    </div>
  </div>
</div>	

</body>
</html>

<script>
  AOS.init({
      duration:1400
  });
</script>

