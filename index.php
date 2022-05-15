<?php

if($_POST["message"]) {

mail("seanvalis@gmail.com", "message from ReSESS.nyc",

$_POST["comments"], "From: ".$_POST["email"]);

}

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ReSESS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <!--favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
	height: 100%;
  }
  html{
  height: 100%;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
     /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("Landsat.jpg");

  /* Set a specific height */
  height: 100%;

  /* Position and center the image to scale nicely on all screens */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
  
    
  }
  .jumbo-text{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;


    font-family: Helvetica, sans-serif;
  }
  .parallax{
	   /* The image used */
  background-image: url("city_tech.jpg");


  height: 75%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }
  .footer{
	height:50px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  
}  
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #466d1d;
    font-size: 50px;
  }
  .logo {
    color: #466d1d;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #466d1d;
  }
  .carousel-indicators li {
    border-color: #466d1d;
  }
  .carousel-indicators li.active {
    background-color: #466d1d;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #466d1d; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #466d1d;
    background-color: #fff !important;
    color: #466d1d;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #466d1d !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #466d1d;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #466d1d;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Helvetica, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #466d1d !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #466d1d;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img style= "height: 35px"src="https://blogs.fu-berlin.de/reseda/files/2018/05/landsat8.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Programs</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#pricing">News</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
	<div class="jumbo-text">
		<h1>ReSESS</h1> 
		<p>The Center for Remote Sensing and Earth System Sciences</p> 
	</div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About ReSESS</h2><br>
	  <h4>Located at the campus of New York City College of Technology in Brooklyn. ReSESS is using data from satellites to record changes in ecologies, and environments. With help and support from numerous organizations from across the globe, we aim to make environmental issues a thing of the past.</h4>
	  <p>ReSESS at the New York City College of Technology (City Tech) started on December 9, 2011 through an agreement with the CUNY CREST Institute and under the leadership of Dr. Reginald Blake. Today, ReSESS is Co-Directed by Dr. Blake and Dr. Hamidreza Norouzi. The Center plays a critical role not only in helping to replenish this nation’s geoscience workforce, but also in establishing a vibrant, faculty-student centered research culture at City Tech. The center focuses on the formal, integrated, interdisciplinary, and comprehensive implementation of Earth Systems Science and Remote Sensing technologies and applications at City Tech. This single-minded mission helps to foster an institutional research culture change by creating, sustaining, and promoting collaborative research that coalesces around the relatively new and exciting study of the Earth and its environment via satellite and ground-based Remote Sensing. The Center’s mission is anchored in course offerings, research activities, exposure trips, seminars, internships, conferences, and citizen science to engage and to stimulate the curiosity of City Tech’s faculty and students to the varied applications of Remote Sensing to the cryosphere, the biosphere, the lithosphere, the atmosphere, and the hydrosphere.With ReSESS’s mission in place, the City Tech will, therefore, soon become a leader in producing the next generation of scientists and engineers with unique expertise in satellite and ground-based remote sensing and their applications to geophysics. The Center’s research activities have produced peer reviewed publications and the garnering of educational and research grants that are being used to pursue and to promote remote sensing studies.</p>
      <br><a href="#contact" class="btn btn-default btn-lg" >Get in Touch</a>
	  <br>
	  <br>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-deciduous logo"></span>
    </div>
  </div>

<div class="container-fluid bg-grey">
 <h2>Special thanks to:</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/USGS_logo_green.svg/2560px-USGS_logo_green.svg.png" class="center" style="height: 175px;">
		<br><h4>United States Geological Survey</h4>
      </div>
      <div class="item">
		<img src="https://www.celt.iastate.edu/wp-content/uploads/2021/05/MATLAB-logo.png" class="center" style="height:175px">
        <br><h4>MATLAB</h4>
      </div>
      <div class="item">
	  <img src="https://robinhoodorg-production.s3.amazonaws.com/uploads/2016/10/generic_rh.jpg" class="center" style="height:175px;">
        <br><h4>Robin Hood Foundation</h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>In Association with:</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
	  <a href="https://www.nsf.gov/">
      <img src="https://www.nsf.gov/pubs/1999/nsf99113/image15.gif" style="height: 100px;">
      </a>
    </div>
    <div class="col-sm-4">
	  <a href="https://rhicenter.org/red-hook-farms/the-farms/">
      <img src="https://res.cloudinary.com/rhi/image/upload/c_scale,w_600/v1/wp/2019/11/RedhookFarms.png" style="height: 100px;">
      </a>
    </div>
    <div class="col-sm-4">
	<a href="https://www.bnl.gov/world/">
      <img src="https://www.bnl.gov/assets/global/images/bnl-logo-2021.svg" style="height:100px;">
	</a>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
	<a href="https://www.cessrst.org/">
      <img src="https://www.cessrst.org/favicon.png" style="height:100px;">
	</a>
    </div>
    <div class="col-sm-4">
	<a href="https://crest.cuny.edu/">
      <img src="https://crest.cuny.edu/wp-content/uploads/2019/06/cropped-cropped-cuny_crest-1.png" style="height:100px;">
      <br>
	  </a>
    </div>
    <div class="col-sm-4">
	<a href="https://www.citytech.cuny.edu/">
	  <img src="https://upload.wikimedia.org/wikipedia/en/3/30/City_Tech.png" style="height:100px;">
      <br>
	  </a>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Research Posters we've created.</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-6">
      <div class="thumbnail">
       <a href="AMS_poster.pdf"> <img src="AMS_poster.jpg" alt="Urban" width="400" height="300"></a>
        <p><b>Urban Heat Island</b></p>
        <p style="padding:10px;">Urban Heat Islands (UHI) are one of the leading environmental issues in densely populated urban areas. Accurate characterization of the surface energy balance is required to better predict the
dynamics of the UHI and its impact on extreme heat events. However, a better complete knowledge of urban surface energy balance is needed to accurately understand climate processes
revolving around high-density urban environments. The goal of this study, using satellite data, is to enhance the understanding the urban surface energy budget and observe land surface
temperatures. Using a linear regression model, GOES-16 LST data, which has a spatial resolution of 2km and a temporal resolution of 5 minutes, was combined with Landsat 8 LST data,
which has a spatial resolution of 30m and a temporal resolution of 16 days to get a high spatio-temporal resolution (30m every 5 minutes) LST product. The downscaled estimates showed a
reasonable agreement (-0.09 to 3.30 K) when they were validated against independent Landsat images.</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
	  <a href="Lake_Poster_Fall_2021.pdf">
        <img src="Lake_Poster.jpg" alt="Lake Project" width="400" height="300"></a>
        <p><b>GLOBAL LAKES SURFACE TEMPERATURE VARIABILITIES USING SATELLITES</b></p>
        <p style="padding:10px;">Anthropogenic climate change has made a noticeable
impact on our worldwide ecosystem, often leading to
cascading effects that impact human lives. Although lakes
consist of a small percentage of global water bodies, they
nevertheless have significant influence on their surrounding
environment, impacting the lives around them. For this
research, 519 lakes from all over the world were studied
using daily observations from the Moderate Resolution
Imaging Spectroradiometer (MODIS) from the NASA
website. The Lake Surface Water Temperature (LSWT)
was found to be an indicator of climate change. In the
study, LSWT was compared with Land Surface
Temperatures and related factors. Results were analyzed
using MATLAB . Approximately 54.24% of the lakes studied
were shown to be warming, while 40.03% were shown to
be cooling; in addition, 68.44% of the lakes were found to
be shrinking; while 24.85% were found to be growing.
Continued studies of lake surface temperature trends of
global lakes are imperative for communities that depend on
them for survival, as well as the entirety of Earth.</p>
      </div>
    </div>
   
  </div><br>
  
 
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>News</h2>
    <h4>What's happening at ReSESS?</h4>
	<br><h5>ReSESS News Now</h5>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Red Hook Farms</h1>
        </div>
        <div class="panel-body">
          <p>Thanks to one of our leaders</p>
		  <br><p>Tiaamé, a graduate student</p>
		  <br><p>working with ReSESS.</p>
		  <br><p>They are paving a new path</p>
		  <br><p>for new ReSESS Rock Stars</p>
		  <br><p>working on the impact urban farming</p>
		  <br><p>has on it's environment</p>
		  <br><p>using satellite imagery!</p>
        </div>
        <div class="panel-footer">
          <a href="https://rhicenter.org/red-hook-farms/the-farms/"><button class="btn btn-lg" >Learn More!</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>New paper about Spatial Downscaling of GOES-R</h1>
        </div>
        <div class="panel-body">
          <p>We would like to congratulate</p>
		  <br><p>ReSESS' Abdou Bah, and Dr. Norouzi,</p>
		  <br><p>for their work on the</p>
		  <br><p>GOES-R downscaling project.</p>
		  <br><p>If you'd like to read their journal</p>
		  <br><p>please click on the link below!</p>
        </div>
        <div class="panel-footer">
          <a href="https://www.mdpi.com/2073-4433/13/2/332"><button class="btn btn-lg">Learn More!</button></a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>AMS conference 2022 a Success!</h1>
        </div>
        <div class="panel-body">
          <p>ReSESS is pleased to announce</p>
		  <br><p>that our posters were well recieved!</p>
		  <br><p>The presentations about both the Urban Heat</p>
		  <br><p>Island effect and the Global</p>
		  <br><p>Lakes Surface Temperature were both</p>
		  <br><p>well received in the virtual conference</p>
        </div>
        <div class="panel-footer">
          <a href="https://annual.ametsoc.org/index.cfm/2022/"><button class="btn btn-lg">Learn More!</button></a>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> New York, US</p>
      <p><span class="glyphicon glyphicon-envelope"></span> hnorouzi@citytech.cuny.edu</p>
    </div>
   
   
   
     
  
  <form action= "index.php"

method=”POST”>


 <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>

</form>
   
  </div>
  
</div>




<!-- Image of location/map -->
<div class="parallax">
</div>
<footer class="text-center footer bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"><br>ReSESS</span>
  </a>
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
