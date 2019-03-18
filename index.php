<!DOCTYPE html>
<html>
<title>PISTOBOLTZ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="nav.css">


<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


body {

  height: 100%;

  background-image: url("img/back/1.png");

  background-size: cover;


  opacity: 0.9;


  background-color: black;

  color: white;
}
.w3-top
{

}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/logo.jpeg");
  border-radius: 50px;
  margin-top: 20px;
  margin-bottom: 60px;
  margin-left: 20px;
  margin-right: 20px;

top:40px;
  min-height: 118%;
}
@media (max-width: 480px)
{
  .bgimg-1{
    background-size: cover;
    background-image: url("img/4.jpg");
  }
}


.w3-bar .w3-button {
  padding: 16px;
}

.w3-container
{ margin: 20px;
  border: 0;

  background-image: url("img/1.png");
  border-radius: 50px;

}
footer
{

  border: 0;
  border-radius: 50px;
  background-image: url("img/1.png");
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"style="background:url("img/.png")">HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>


      <a href="work.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORKSHOPS</a>
      <a href="img gallery.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>EVENTS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>


  <a href="work.html" onclick="w3_close()" class="w3-bar-item w3-button">WORKSHOPS</a>
  <a href="img gallery.html" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<script src="nav.js"></script>
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">


  </div>
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>





<center>
  <div class="w3-row-padding w3-grayscale" style="margin-top:0px">
    <div class="w3-col 4 m12">
      <div class="w3-card" style="text-align:ce">

       <div class="w3-display-bottomcenter w3-text-grey w3-large" style="padding:1px 48px;top:200px;">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfvmfZgUto1LwSVlQcykfNSRnqW4hXIO51fwLGIweFOsOIz8g/viewform?usp=sf_link" type="button" name="button" style="color:white;background:green;padding:5px;border:3px;">REGISTER NOW </a>
       </div>
</div>
</div>
</div>
<center>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT PISTOBOLTZ</h3>



<p>Pistoboltz is a kind of symposium by mechanical engineers of the Madras Institute of Technology(MIT), for aspiring engineers. </p>
<p>MIT is a college known for its unique courses in UG and PG level. It is also known for its high level research output and T-series relationship which is very unique amongst other colleges in Tamil Nadu.</p>
<p>Mechanical Engineering was started in 2015 for the first time under the Department of Production Technology. This gave birth to Pistoboltz, under The Association  of Mechanical Engineers(TAME).
</p>
<p>The inaugural version of Pistoboltz is being embellished with 3+ workshops , 8+ technical events , 5+ non technical events, it exemplifies the art of  catering to all the participants to bring about the best in them.</p>



</div>


<!-- Team Section -->

<div class="w3-container" style="padding:1px 16px" id="team">
  <h3 class="w3-center">                 </h3>

  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col 4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/events1.jpg" alt="John" style="width:100%"; height="346px">
        <div class="w3-container">
          <h3><a href="img gallery.html" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a></h3>



        </div>
      </div>
    </div>
    <div class="w3-col 4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/wk.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3><a href="work.html" onclick="w3_close()" class="w3-bar-item w3-button">WORKSHOPS</a></h3>




        </div>
      </div>
    </div>


  </div>
</div>





<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:0px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <h4><i class="fa fa-map-marker fa-fw w3-xxlarge"></i>Chromepet,Chennai-600044</h4>
    <h4>Phone: <code>9884925227</code> (Sankesh)</h4>
    <h4>Phone: <code>8667063627</code> (Ramachandran)</h4>
    <h4><i class="fa fa-envelope fa-fw w3-xxlarge "> </i><strong> Email: pistoboltz2k19@gmail.com</strong></h4>
    <br>
<style media="screen">
  code{
    font-size: 20px;
  }
</style>
    <!-- Image of location/map -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5352.794801892768!2d80.13769781948191!3d12.945398692672375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525fac595c29ff%3A0xb76082ae18b51418!2sMadras+Institute+Of+Technology%2C+Anna+University!5e0!3m2!1sen!2sde!4v1548396490713" width="800" height="600" frameborder="0" style="width:100%;margin-top:10px;border:0" allowfullscreen>
    </iframe>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://instagram.com/pistoboltz19"><i class="fa fa-instagram w3-hover-opacity"></i></a>
<a href="https://facebook.com/pistoboltzmit" <i class="fa fa-facebook-official w3-hover-opacity"></i></a>


    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

</body>
</html>
