<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Import Animate.css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="screen,projection"/>

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
   <!-- <script type="text/javascript" src="js/anime.js"></script>-->

   <!--Hover--> 
   <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

   <!--Font-->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=ABeeZee">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
      body{
        font-family: 'ABeeZee',serif !important;
      }

      .card{
        border: 0px !important;
        background-color: #ffffff !important;
        opacity: 0.85 !important;
        filter: alpha(opacity=85) !important;
      }

      .card-content{
        font-weight: bold !important;
      }


      	section.about-w3l h2 {
      	text-align:center;
      	padding:0 0 30px;
      }
      section.about-w3l p {
      	text-align:center;
      	padding-bottom:20px;
      }


      section.about-w3l {
      	padding:100px 0;
      }
      section.about-w3l h2 {
      	font-size:40px;
      	font-weight:bold;
      	color:#3ba2c1;
      	padding:55px 0 20px;
      	font-family: 'Poiret One', cursive;
      }
      section.about-w3l p {
      	font-size:16px;
      	font-weight:normal;
      	line-height:35px;
      }
      ul, li{
        display: inline;
      }

      i:hover{
        color: black;
      }


    </style>
    <script type="text/javascript">
          var options = [
        {selector: '.class', offset: 200, callback: customCallbackFunc },
        {selector: '.other-class', offset: 200, callback: function() {
          customCallbackFunc();
        } },
      ];
      Materialize.scrollFire(options);

    </script>
    <script type="text/javascript">
        var options = [
        {selector: '.about-w3l', offset: 50, callback: function(el) {
          //Materialize.toast("This is About Us!", 1500 );
          $('.c1').removeClass("hide");
           $('.c1').addClass("animated fadeInUp");

        } },
        {selector: '#Princi', offset: 50, callback: function(el) {
          //Materialize.toast("This is About Us!", 1500 );
          $('.c2').removeClass("hide");
           $('.c2').addClass("animated fadeInUp");

        } },
        //what we do
         {selector: '#wwd', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row1 !", 1500 );
          $('.wwd1').removeClass("hide");
           $('.wwd1').addClass("animated fadeInUp");

        } },
        {selector: '#wwd1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row1 !", 1500 );
         $('.wwd2').removeClass("hide");
           $('.wwd2').addClass("animated fadeInUp");

        } },
        {selector: '#wwd2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.wwd3').removeClass("hide");
           $('.wwd3').addClass("animated fadeInUp");
        } },

        //competitions
        {selector: '#Comp', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.cmp1').removeClass("hide");
           $('.cmp1').addClass("animated fadeInUp");
        } },
         {selector: '.comp2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p2').addClass("animated fadeInUp");
          $('.p2').addClass("animated fadeInUp");
          $('.p2').addClass("animated fadeInUp");
        } },
        {selector: '.comp3', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p3').addClass("animated fadeInUp");
        } },
        {selector: '.comp4', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p4').addClass("animated fadeInUp");
        } },
        {selector: '.comp5', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p5').addClass("animated fadeInUp");
        } },
        {selector: '.comp6', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p6').addClass("animated fadeInUp");
        } },

        //airplanes
        {selector: '#Air', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.a1').removeClass("hide");
           $('.a1').addClass("animated fadeInUp");
        } },
        {selector: '.air2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.a2').addClass("animated fadeInUp");
          $('.a2').addClass("animated fadeInUp");
          $('.a2').addClass("animated fadeInUp");
        } },


        //workshops
        {selector: '#Workshop', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.w1').removeClass("hide");
           $('.w1').addClass("animated fadeInUp");
        } },
        {selector: '.work2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.w2').removeClass("hide");
           $('.w2').addClass("animated fadeInUp");
        } },

       //sponsors
        {selector: '#Sponsors', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.car').removeClass("hide");
           $('.car').addClass("animated fadeInUp");
        } },


        //team
        {selector: '#Team', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.t1').removeClass("hide");
           $('.t1').addClass("animated fadeInUp");
        } },
        {selector: '#t1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.t2').removeClass("hide");
           $('.t2').addClass("animated fadeInUp");
        } },
        {selector: '#t2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.t3').removeClass("hide");
           $('.t3').addClass("animated fadeInUp");
        } },
        {selector: '#t3', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.t4').removeClass("hide");
           $('.t4').addClass("animated fadeInUp");
        } },
        {selector: '#t4', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.t5').removeClass("hide");
           $('.t5').addClass("animated fadeInUp");
        } },
       
        //forms
        {selector: '#Contact', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
        $('.con').removeClass("hide");
           $('.con').addClass("animated fadeInUp");
        } },
      ];
      Materialize.scrollFire(options);

    </script>
  </head>

  <body class="grey lighten-1">


   <!--Navigation-->

<script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      });

    </script>


    <div class="navbar-fixed" id="navv">
    <nav id="navbar">
     <div class="nav-wrapper">
       <a href="#!" class="brand-logo"><img src="assets/images/skylogo2.PNG" height="65px" width="180px" style="padding-top:0px; padding-left:0; margin-top:0px;align="left"></a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">dehaze</i></a>
       <ul class="right hide-on-med-and-down">
         <li><a href="#Home" class="scroll waves-effect waves-light">Home</a></li>

          <li><a class="dropdown-button scroll" href="#drop" data-activates="drop">About Us</a>
          </li>
              <ul id="drop" class="dropdown-content">
                <li><a href="#Who" class="scroll waves-effect waves-light">Who We Are</a></li>
                <li class="divider"></li>
                <li><a href="#Princi" class="scroll waves-effect waves-light">From The Principal's Desk</a></li>
              </ul>

         <li><a href="#WWD" class="scroll waves-effect waves-light">What We Do</a></li>
         <li><a href="#Comp" class="scroll waves-effect waves-light">Competition</a></li>

         <li><a href="#Air" class="scroll waves-effect waves-light">Accolades</a></li>
         <li><a href="#Workshop" class="scroll waves-effect waves-light">Workshop</a></li>
         <li><a class="dropdown-button scroll" href="#drop" data-activates="drop1">Publicity</a>
          </li>
              <ul id="drop1" class="dropdown-content">
                <li><a href="#Exhibit" class="scroll waves-effect waves-light">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#Mass" class="scroll waves-effect waves-light">Mass Media</a></li>
              </ul>
         <li><a href="#Sponsors" class="scroll waves-effect waves-light">Sponsors</a></li>
         <li><a href="#Team" class="scroll waves-effect waves-light">Team</a></li>
         <li><a href="#Contact" class="scroll waves-effect waves-light">Contact Us</a></li>
       </ul>


       <ul class="side-nav" id="mobile-demo">
         <li><a href="#Home" class="scroll waves-effect waves-light">Home</a></li>
          <li><a href="#Who" class="scroll waves-effect waves-light">Who We Are</a></li>              
          <li><a href="#Princi" class="scroll waves-effect waves-light">From The Principal's Desk</a></li>
         <li><a href="#WWD" class="scroll waves-effect waves-light">What We Do</a></li>
         <li><a href="#Comp" class="scroll waves-effect waves-light">Competition</a></li>
         <li><a href="#Air" class="scroll waves-effect waves-light">Accolades</a></li>
         <li><a href="#Workshop" class="scroll waves-effect waves-light">Workshop</a></li>
          <li><a href="#Exhibit" class="scroll waves-effect waves-light">Exhibition</a></li>
          <li><a href="#Mass" class="scroll waves-effect waves-light">Mass Media</a></li>
         <li><a href="#Sponsors" class="scroll waves-effect waves-light">Sponsors</a></li>
         <li><a href="#Team" class="scroll waves-effect waves-light">Team</a></li>
         <li><a href="#Contact" class="scroll waves-effect waves-light">Contact Us</a></li>
       </ul>
     </div>
   </nav>
     </div>
   <!-- End Navigation -->

  
   <section id="Home">

   <style>

    .video-container{
      /*position:absolute;*/
      top:0;
      bottom:0;
      height:70% !important;
      width:100%;
      min-width:100%;
      min-height:70% !important;
      overflow:hidden;
      background-color: black;
    }
    .video-container video{
      min-width:100%;
      min-height:0% !important;
      width:auto;
      height:auto;
      position:absolute;
      top:35%;
      left:50%;
      transform: translate(-50%,-50%);
    }
    </style>
 


    <div class="video-container" id="blabla" style="background-color:#9e9e9e; min-height:70%;">
    <video id="myvideo" autoplay class="responsive-video">
  <source class="active" src="assets/video.mp4" type="video/mp4" />
  <source src="assets/stupidvideo.mp4" type="video/mp4" />
</video>
<script>var myvid = document.getElementById('myvideo');

myvid.addEventListener('ended', function(e) {
  // get the active source and the next video source.
  // I set it so if there's no next, it loops to the first one
  var activesource = document.querySelector("#myvideo source.active");
  var nextsource = document.querySelector("#myvideo source.active + source") || document.querySelector("#myvideo source:first-child");
  
  // deactivate current source, and activate next one
  activesource.className = "";
  nextsource.className = "active";
  
  // update the video source and play
  myvid.src = nextsource.src;
  myvid.play();
});
</script>
</div>
</section>



<!--Trial About Us-->
<section class="about-w3l" style="background-color: #9e9e9e; height:70%; margin:0 auto;">
<div id="Who" class="grey">
	<div class="container ">
 
  
  <div class="row c1 hide center"><h4>Who We Are</h4>
  <hr style="width: 5%; color: #880e4f">
  <p  class="c1 hide">DJS SKYLARK is one of the country's most proficient aero design team from SVKM's Dwarkadas J. Sanghvi College of Engineering, Mumbai. <br>We fabricate remote controlled aircrafts and compete on an international platform against universities across the globe.
<br>With accolades to our name, we aim to set an example and promote aerospace engineering by organizing events and workshops for aero enthusiasts in the city.
</p>
  </div>
  </div><br><br>
  </div>
</section>
<section class="about-w3l" style="background-color: #bdbdbd;">
  <div id="Princi" class="grey lighten-1">
  <div class="container">
  <br><br><br>
  <center><h4 class="c2 hide">From the Principal's Desk</h4></center>
  <hr style="width: 5%; color:#98878F;"><br>

      <p style="text-align: justify;">
      DJS Skylark is grateful to have the support of SVKM and our Principal. Here is what he has to say about us:<br>
      “DJS Skylark represents of the techno-entrepreneurial spirit of Dwarkadas J. Sanghvi College of Engineering. An outcome of the grit and hard work of the engineers of tomorrow, this team has made a mark internationally and represents the vigour of the students of a great nation. I wish team DJS Skylark the very best for their future endeavours and vouch for their competence and fidelity.”<br>
	<div class="row">
		<div class="col s12 m6 l6 c2 hide">
      <div style="text-align: left;">Dr. Hari Vasudevan<br><br>
      Ph.D (IIT-B) <br>
      M.E. Production Engg. (VJTI) <br>
      Post-Graduate Diploma (VJTI) <br>
      B.E. Industrial Production (GIT)<br></div>

      </p>
		</div>
		<div class="col s12 m6 l6 c2 hide">
		    <img src="assets/img/principal.jpg" style="height: 240px !important; background-repeat: no-repeat; background-size: cover; padding-top: 0px;">
		</div>
	</div>
	</div><br><br><br><br><br>
  </div></section>

<!--What we do-->
<section id="WWD" style="background-image: url('assets/img/wwd.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
      <br><br><br>
      <center><h3 style="color:white;"><div class="wwd1 hide"><b>What We Do</b></div></h3></center>
      <hr style="width: 5%; color:#98878F;">
        <div class="container wwd1 hide"><p class="black-text cc0"></p></div>
        <div class="row">
          <div class = "col s12 m10 l10 offset-l1 offset-m1" id="wwd1">
            <div class="row wwd2 hide">
            <div class="col s12 m6 l4 offset-l1">
              <div class="card grey darken-4">
                <div class="card-content white-text">
                  <span class="card-title center"><i class="medium material-icons">build</i><br><br>DESIGN</span>
                  <p>With our thinking caps on, we start off by researching and designing a model of the aircraft, from scratch, using CAD softwares.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4 offset-l2">
              <div class="card grey darken-4 z-depth-5">
                <div class="card-content white-text ">
                  <span class="card-title center"><i class="medium material-icons">assessment</i><br><br>ANALYZE</span>
                  <p>The proposed model is now analysed by subjecting it to real life conditions and making modifications where required.<br><br> </p>
                </div>
              </div>
            </div>
          </div>
          <div  id="wwd2"></div>
          <div class="row wwd3 hide">
              <div class="col s12 m6 l4 offset-l1">
                <div class="card grey darken-4 z-depth-5">
                  <div class="card-content white-text ">
                    <span class="card-title center"><i class="medium material-icons">perm_data_setting</i><br><br>MANUFACTURE</span>
                    <p>After we carry out iterations,  the final aircraft design is brought to life using various manufacturing processes.<br><br> </p>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l4 offset-l2">
                <div class="card grey darken-4 z-depth-5 cc4">
                  <div class="card-content white-text ">
                    <span class="card-title center"><i class="medium material-icons">flight_takeoff</i><br><br>FLIGHT TEST</span>
                    <p>It is the moment of truth when the throttle roars as we watch our own aircraft take off from the runway.<br><br></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <br><br><br><br><br>
    </section>
    <!-- End What we do -->

    <!-- Competitions -->
  <section id="Comp" class="grey lighten-1">
  <br><br><br>
    <div class="comp1 cmp1 hide"><center><h3 class="p1">Competition-SAE Aerodesign</h3></center></div>
        <hr style="width: 5%; color:#98878F;"><br>

             <div class="container  cmp1 hide">

    <div class="row comp5">
    <p class="p5" style="font-size: 18px; text-align: center ">Studying, analyzing, improvising, testing and fabricating aircrafts is not where we stop. We at DJS SKYLARK are always up for the most grueling challenges. We leave no opportunity to display our strife to excellence through competitions, in the anticipation to inspire through our victories.<br>
    SAE Aero Design Competition<br>
    This contest intends to provide a real life challenge to engineering students by exposing them to situations faced in a professional environment. It is annually conducted in the USA, attracting 75 competition teams from renowned universities across the globe. It is a platform for young minds to display their innovation and exchange ideas. Amidst these creative creations, we aim to compete by building something a class apart.
  </p>
    </div></div>

    <div class="container">
    <div class="comp2">
    <div class="row center p2">
    <div class="col s12 m4 l4">
    </div>
    <div class="col s12 m4 l4">
      <img src="assets/images/saef.png" height="200px" width="400px">
    </div>
    <div class="col s12 m4 l4">
      </div>
    </div><br>
    <div class="row center comp3">
      <div class="col s12 m2 l2 p3">
      </div>
      <div class="col s12 m3 l3 p3">
        <img src="assets/images/boeingff.png" height="150px" width="300px">
      </div>
      <div class="col s12 m2 l2 p3">
      </div>
      <div class="col s12 m3 l3 p3">
        <img src="assets/images/lockheedmartinff.png" height="150px" width="300px">
      </div>
      <div class="col s12 m2 l2 p3">
      </div>
    </div>
    <div class="row center comp4">
      <div class="col s12 m2 l2 p4">
      </div>
      <div class="col s12 m3 l3 p4">
        <img src="assets/images/solidworksff.png" height="150px" width="300px">
      </div>
      <div class="col s12 m2 l2 p4">
      </div>
      <div class="col s12 m3 l3 p4">
        <img src="assets/images/ansysff.png" height="150px" width="300px">
      </div>
      <div class="col s12 m2 l2 p4">
      </div>

    </div>
    </div>
    </div>
<br><br>


  <br><br><br>
    </section>

    <!-- End Competitions -->


    <!--Accolades-->
    <section id="Air">
    <div class="grey">
    <br><br><br>

    <script>

      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
      });
    </script>

        <div class="air1 a1 hide"><center><h3 class="a1">Accolades</h3></center></div>
          <hr style="width: 5%; color:#98878F;">
          <br>
           <div class="container">
    <div class="row center air2">
      <!--<div class="col s12 m1 l1 a2">
      </div>-->
      <div class="col s12 m4 l4">
        <div class="a2"><a href="#modal1"><img src="assets/images/3.JPG" height="300px" width="300px"></a></div>
          <div id="modal1" class="modal" style="background-color: rgba(0,0,0,0.75) !important;overflow: hidden !important; border-radius: 20px;">
          <div class="modal-content white-text">
          <h4>SAE-Aerodesign 2017</h4>
              <div class="row center">
              <div class="col s12 m6 l6">
                <p style="margin-top: 100px;">
                DJS Skylark carved a niche on an international platform by being bestowed with the 1st prize in Design Report Worldwide, 4th Overall Worldwide apart from being 1st in Asia-Pacific regions.</p>
              </div>
              <div class="çol s12 m1 l1"></div>
              <div class="col s12 m5 l5">
                <img src="assets/images/Picture9.jpg" height="350px" width="350px">
              </div>
          </div>
          </div>
      </div>
      </div>
      <!--<div class="col s12 m1 l1 a2">
      </div>-->
      <div class="col s12 m4 l4">
       <div class="a2"><a href="#modal2"><img src="assets/images/bahar2.jpg" height="300px" width="300px"></a></div>
          <div id="modal2" class="modal" style="background-color: rgba(0,0,0,0.75) !important;overflow: hidden !important; border-radius: 20px;">
          <div class="modal-content white-text">
          <h4>SAE-Aerodesign 2016</h4>
              <div class="row center">
              <div class="col s12 m6 l6">
                <p style="margin-top: 100px;">In the second attempt at the competition, our performance was improvised, with not only a rank in the top 20 all across the globe, but also an award for the 3rd place in presentation worldwide.</p>
              </div>
              <div class="çol s12 m1 l1"></div>
               <div class="col s12 m5 l5">
                <img src="assets/images/Picture12.jpg" height="350px" width="350px">
          </div>
          </div>
          </div>
      </div>
      </div>
      <!--<div class="col s12 m1 l1 a2">
      </div>-->
      <div class="col s12 m4 l4">
     <div class="a2"><a href="#modal3"><img src="assets/images/bahar3.jpg" height="300px" width="300px"></a></div>
          <div id="modal3" class="modal" style="background-color: rgba(0,0,0,0.75) !important;overflow: hidden !important; border-radius: 20px;">
          <div class="modal-content white-text" >
          <h4>SAE-Aerodesign 2015</h4>
          <div class="row center">
          <div class="col s12 m6 l6">

                <p style="margin-top: 100px;">
The team had its first breakthrough by securing a rank of 17th in the world, in its debut year, against the likes of top universities, in SAE Aero Design West competition, held in Florida.</p>
            
          </div>
          <div class="çol s12 m1 l1"></div>
          <div class="col s12 m5 l5">
                <img src="assets/images/andar3.jpg" height="350px" width="350px">
          </div>
          </div>
    </div><br><br><br><br><br><br><br><br>
    </div><br><br><br><br><br><br><br><br><br><br>
</div>
      </section>
<!--End of aircrafts-->


<!--Workshop-->

<div style="background-color: #bdbdbd ">
<section class="main" id="Workshop">

<br><br><br>
  <div class="Work1 w1"><center><h3 class="a1">Aero-Modelling Workshop</h3></center></div>
  <hr style="width:5%; color: #98878F;">
  <br>
    <div class="container work2">
    <div class="row center w2">
      <div class="col s12 m5 l5">
        <video autoplay height="260px" width="400px" muted loop>
        <source src="assets/workvid.mp4" type="video/mp4">
        </video>
      </div>
      <div class="col s12 m1 l1">
      </div>
      <div class="col s12 m6 l6">
        <p style="font-size: 18px;">Our goal at DJS Skylark is not only to achieve perfection ourselves but to inspire learners driven with curiosity and determination. We achieve this goal by pouring our knowledge into the minds of keen students and assist them to create their own invention. DJS Skylark annually conducts an Aero Modelling workshop in DJSCE for undergraduate students.</p>
      </div>
    </div>
    <div class="row center w2">
      <div class="col s12 m6 l6">
        <p style="font-size: 18px;">We organise a large scale 3-Day annual (200+ Students ) workshop for young aero enthusiasts in the city. The three day workshop provides an opportunity to learn about:<br> <div style="text-align: left;font-size: 18px;"><span style="color:#006064"><b>Technical aspects</b></span> of fabricating an RC aircraft and the designing and analysis behind it.<br><span style="color:#006064"><b>Manufacturing</b></span> process involved.<br><span style="color:#006064"><b>Flight testing</b></span> their own aircrafts to assess their performance.</div></p>
      </div>
      <div class="col s12 m1 l1">
      </div>
      <div class="col s12 m5 l5">
        <img src="assets/images/Picture3.jpg" height="300px" width="400px">
      </div>
    </div>
    </div>
    <br><br>

  </section>
    </div>
<!--end of Workshop-->


<!--Exhibition-->
<style type="text/css">
  figure.effect-milo {
  background: #2e5d5a;
}

figure.effect-milo img {
  max-width: none;
  width: -webkit-calc(100% + 60px);
  width: calc(100% + 60px);
  opacity: 1;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-30px,0,0) scale(1.12);
  transform: translate3d(-30px,0,0) scale(1.12);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-milo:hover img {
  opacity: 0.5;
  -webkit-transform: translate3d(0,0,0) scale(1);
  transform: translate3d(0,0,0) scale(1);
}

figure.effect-milo h2 {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 1em 1.2em;
}

figure.effect-milo p {
  padding: 0 10px 0 0;
  width: 50%;
  border-right: 1px solid #fff;
  text-align: right;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

figure.effect-milo:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.grid {
  position: relative;
  margin: 0 auto;
  padding: 1em 0 4em;
  max-width: 1000px;
  list-style: none;
  text-align: center;
}

/* Common style */
.grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 320px;
  max-width: 480px;
  max-height: 360px;
  width: 48%;
  background: #3085a3;
  text-align: center;
  cursor: pointer;
}

.grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  opacity: 0.8;
}

.grid figure figcaption {
  padding: 2em;
  color: #fff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure h2 {
  word-spacing: -0.15em;
  font-weight: 300;
}

.grid figure h2 span {
  font-weight: 800;
}

.grid figure h2,
.grid figure p {
  margin: 0;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 75%;
}

.content {
  margin: 0 auto;
  max-width: 1000px;
}

.content > h2 {
  clear: both;
  margin: 0;
  padding: 4em 1% 0;
  color: #484B54;
  font-weight: 800;
  font-size: 1.5em;
}

.content > h2:first-child {
  padding-top: 0em;
}

@media screen and (max-width: 50em) {
  .content {
    padding: 0 10px;
    text-align: center;
  }
  .grid figure {
    display: inline-block;
    float: none;
    margin: 10px auto;
    width: 100%;
  }
}


</style>

<section id="Exhibit">
<div><center><h3 class="">Exhibition And Events</h3></center></div>
        <hr style="width: 5%; color:#98878F;"><br>

  <div class="container"><p style="font-size: 18px;">DJS Skylark believes in inspiring by setting an example. We leave no opportunity to showcase our aircraft and accolades and make our alma mater as well as our supporters proud. We display our aircraft at several events and exhibitions, including:</p> </div>
<div class="container" style="margin-left:135px;">
  <div class="row center">
    <div class="col s12 m1 l1"></div>
    <div class="col s12 m4 l4">
    <figure>
      <img src="assets/images/Picture6.jpg" height="240px" width="320px">
      <figcaption style="font-size: 15px;"><p>SVKM Yuva Fest</p></figcaption>
      </figure>
    </div>
    <div class="col s12 m2 l2"></div>
    <div class="col s12 m4 l4">
      <figure>
      <img src="assets/images/Picture5.jpg" height="241px" width="320px">
      <figcaption style="font-size: 15px;"><p>SVKMastermind</p></figcaption>
      </figure>
    </div>
    <div class="col s12 m1 l1"></div>
  </div>
  <br><br>
  <div class="row center" style="padding-left:0">
    <div class="col s12 m1 l1"></div>
    <div class="col s12 m4 l4">
      <figure>
      <img src="assets/images/Picture1.jpg" height="240px" width="320px">
      <figcaption style="font-size: 15px;"><p>Transform Maharashtra Vision 2025</p></figcaption>
      </figure>
    </div>
    <div class="col s12 m2 l2"></div>
    <div class="col s12 m4 l4">
      <figure>
      <img src="assets/images/Picture2.jpg" height="240px" width="320px">
      <figcaption style="font-size: 15px;"><p>World of Skill</p> </figcaption>
      </figure>
    </div>
    <div class="col s12 m1 l1"></div>
  </div>
</div><br><br><br><br>

<!--<div class="container">
<div class="content">
      <div class="grid">
          <figure class="effect-milo">
            <img src="assets/images/Picture6.jpg" alt="img11"/>
            <figcaption>
              <p>SVKM Yuva Fest</p>
            </figcaption>     
          </figure>
          <figure class="effect-milo">
            <img src="assets/images/Picture5.jpg" alt="img03"/>
            <figcaption>
              <p>SVKM Mastermind</p></figcaption>
          </figure>
      </div>
      <div class="grid">
          <figure class="effect-milo">
            <img src="assets/images/Picture1.jpg" alt="img11"/>
            <figcaption>
              <p>Transform Maharashtra Vision 2025</p>
            </figcaption>     
          </figure>
          <figure class="effect-milo">
            <img src="assets/images/Picture2.jpg" alt="img03"/>
            <figcaption>
              <p>World of Skill</p>
            </figcaption>     
          </figure>
      </div>
</div>
</div><br><br><br><br>-->

<!--End of exhibition-->

<!--Mass Media-->
<div id="Mass"><center><h3>Mass Media</h3></center></div>
        <hr style="width: 5%; color:#98878F;"><br>
        <div class="container"><div style="font-size: 18px;">DJS Skylark makes its presence felt in the city with the media coverage we attract due to our feats.</div></div><br><br>
          <div class="container" style="margin-left:135px;">
            <div class="row center">
              <div class="col s12 m2 l2"></div>
              <div class="col s12 m3 l3">
                <img src="assets/images/Picture8.jpg" height="300px" width="300px">
              </div>
              <div class="col s12 m2 l2"></div>
              <div class="col s12 m3 l3">
                <img src="assets/images/Picture7.jpg" height="300px" width="300px">
              </div>
              <div class="col s12 m2 l2"></div>
            </div>
          </div><br><br><br>
  </section>

<!--End of mass media-->

<!-- Sponsors -->
    <div class="grey">
    <style type="text/css">
                li {
          list-style: none;
        }

        .suga-container {
          
          padding: .2em;
          max-width: 800px;
          margin: 6em auto;
          border-radius: 5px;
        }

        .suga-slider-wrap {
          overflow: hidden;
          margin: 1em;
        }

        .suga-slider-group {
          &:before,
          &:after {
            content: " ";
            display: table;
          }

          &:after {
            clear: both;
          }
        }

        .suga-slide {
          float: left;
          position: relative;
          margin-left: 0;
          padding-right: 20px;
        }

    </style>
    <section id="Sponsors">
    <br><br><br>
          <div class="container" style="padding-top: 10px !important;">
           <div class="s1 car hide"> <h3 class="sp1"><center> Our Sponsors</center></h3></div>
             <hr style="width: 5%; color:#98878F;">
             <div id="logos">
              <ul>
                <li><img src="http://placehold.it/100x100" /></li>
                <li><img src="http://placehold.it/100x100" /></li>
                <li><img src="http://placehold.it/100x100" /></li>
                <li><img src="http://placehold.it/100x100" /></li>
                <li><img src="http://placehold.it/100x100" /></li>
                <li><img src="http://placehold.it/100x100" /></li>
              </ul>
            </div><br><br><br><br><br>
            </div>

       <!--<div class="carousel car hide">
            <?php
                //$dir = "assets/images";
                //$files = scandir($dir);
                // Count number of files and store them to variable..
               // $num_files = count($files)-2;
                //$c=1;

                /*if (is_dir($dir))
                {
                     if ($dh = opendir($dir))
                     {
                       while (($file = readdir($dh)) !== false)
                       {
                         if ($file == '.' OR $file == '..') {
                            continue;
                         }
                         echo "<a class='carousel-item'><img src='".$dir,"/".$file."'></a>";
                       }
                       closedir($dh);
                     }

                 }*/

            ?>
          </div>-->
    </section>
          </div>
    <!-- End Sponsors -->




    <!--Trial Teams-->
    <div class="grey lighten-1">
     <section class="main" id="Team">
<!--<div class="grey lighten-1">-->
<style type="text/css">

  .ch-grid {
    margin: 20px 0 0 0;
    padding: 0;
    list-style: none;
    display: block;
    text-align: center;
    width: 100%;
  }

        .ch-grid:after,
        .ch-item:before {
          content: '';
            display: table;
        }

        .ch-grid:after {
          clear: both;
        }

        .ch-grid li {
          width: 220px;
          height: 220px;
          display: inline-block;
          margin: 20px;
        }

        .ch-item {
          width: 100%;
          height: 100%;
          border-radius: 50%;
          overflow: hidden;
          position: relative;
          cursor: default;
          box-shadow:
            inset 0 0 0 16px rgba(255,255,255,0.6),
            0 1px 2px rgba(0,0,0,0.1);
          transition: all 0.4s ease-in-out;
        }

        /*The description element will be positioned absolutely
        and we’ll give it a semi-transparent background by setting an RGBA value. It’s opacity is going to be 0 and we’ll scale it down to 0, too:*/

        .ch-info {
          position: absolute;
          background: rgba(0,0,0,0.8); /*changed*/
          width: inherit;
          height: inherit;
          border-radius: 50%;
          overflow: hidden;
          opacity: 0;
          transition: all 0.4s ease-in-out;
          transform: scale(0);
        }


        .ch-info h3 {
          color: #fff;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-size: 22px;
          margin: 0 30px;
          padding: 45px 0 0 0;
          height: 140px;
          font-family: 'Open Sans', Arial, sans-serif;
          text-shadow:
            0 0 1px #fff,
            0 1px 2px rgba(0,0,0,0.3);
        }

        /*The paragraph element has 0 opacity and a transition (we want to fade it in on hover but with a delay):
        */

        .ch-info p {
          color: #fff;
          padding: 10px 5px;
          font-style: italic;
          margin: 0 30px;
          font-size: 12px;
          border-top: 1px solid rgba(255,255,255,0.5);
          opacity: 0;
          transition: all 1s ease-in-out 0.4s;
        }

        .ch-info p a:hover {
          color: rgba(255,242,34, 0.8);
        }

        /*nimation*/
        .ch-item:hover {
          box-shadow:
            inset 0 0 0 1px rgba(255,255,255,0.1),
            0 1px 2px rgba(0,0,0,0.1);
        }

        /*fadeIn*/

        .ch-item:hover .ch-info {
          transform: scale(1);
          opacity: 1;
        }

        .ch-item:hover .ch-info p {
          opacity: 1;
        }

        .main{
          width: 90%;
          margin: 0 auto;
          position: relative;
        }

        .ch-img-1 {
          background-image: url(assets/1.jpg);
        }

        .ch-img-2 {
          background-image: url(assets/2.jpg);
        }

        .ch-img-3 {
          background-image: url(assets/3.jpg);
        }

        .ch-info p{
          font-size: 30px;
        }

        .ch-info h3{
          padding-top: 75px;
          font-size: 30px;
        }

        .ch-info i:hover{
          color: black;
        }

</style>
<br><br>


           <div class=""><center><h3 class="ccc0">The Team</h3></center></div>
             <hr style="width: 5%; color:#98878F;">
      
           <br>
            <div class="container">
            <div class="row t1 hide">
                  <ul class="ch-grid">
                    <li>
                      <div class="ch-item ch-img-1 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-2 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-3 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                  </ul>

            </div>
            <div id="t1"></div>
            <div class="row t2 hide">
                  <ul class="ch-grid">
                    <li>
                      <div class="ch-item ch-img-1 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-2 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-3 ">
                        <div class="ch-info">
                         <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                  </ul>

            </div>
              <div id="t2"></div>
            <div class="row t3 hide">
                  <ul class="ch-grid">
                    <li>
                      <div class="ch-item ch-img-1 ccc3">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-2 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-3 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                  </ul>

            </div>
            <div id="t3"></div>
            <div class="row t4 hide">
                  <ul class="ch-grid">
                    <li>
                      <div class="ch-item ch-img-1 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-2 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-3 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
            </div>
          </div>
          <div id="t4"></div>
            <div class="row t5 hide">
                  <ul class="ch-grid">
                    <li>
                      <div class="ch-item ch-img-1 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-2 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ch-item ch-img-3 ">
                        <div class="ch-info">
                          <h3>Name</h3>
                          <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
                        </div>
                      </div>
                    </li>
            </div>
          </div>
          </section>
</div>

<!--End of teams-->

    
    <!-- COntact  -->
    <section id="Contact" class="grey">
    <div class="row con hide">
    <br><br>
        <div class="col s12 m6 co1">
          <div class="card blue-grey lighten-4 semi-transparent" >
            <div class="card-content">
              <span class="card-title center">Send Us a Message</span>
              <div class="row">
                 <form class="col s12">
                   <div class="row">
                     <div class="input-field col s6">
                       <i class="material-icons prefix">account_circle</i>
                       <input id="name" type="text" class="validate">
                       <label for="name" class="black-text">First Name</label>
                     </div>
                     <div class="input-field col s6">
                       <i class="material-icons prefix">mail</i>
                       <input id="email" type="email" class="validate">
                       <label for="email" class="black-text">Email</label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                       <i class="material-icons prefix">font_download</i>
                       <input id="subject" type="text" class="validate">
                       <label for="subject" class="black-text">Subject</label>
                     </div>
                   </div>
                   <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="msg" class="materialize-textarea"></textarea>
                      <label for="msg" class="black-text">Message</label>
                    </div>
                  </div>
                  <div class="row">
                  		<button class="btn waves-effect waves-light right blue-grey darken-3" type="submit" name="action">Submit<i class="material-icons right">send</i>
  						</button>
                  </div>
                 </form>
               </div>

            </div>
          </div>
        </div>
        <div class="col s12 m6 co1">
              <div class="card blue-grey lighten-4">
                <div class="card-content">
                  <span class="card-title center">Find Us Here</span>
                  <div class="row"><i class="fa fa-map-marker left" style="font-size: 30px;"></i>
                  <h5>Dwarkadas.J.Sanghvi College of Engineering</h5></div>
                  <br><br>
                  <div class="row"><i class="fa fa-phone left" style="font-size: 30px;"></i>
                  <h5>62434677584</h5></div>
                  <br><br>
                  <div class="row">
                  <i class="material-icons left" style="font-size:30px;">mail</i>
                  <h5>skylark.mihir@gmail.com</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>
    <!-- End Contact -->

    <!--Top Button-->
    <style type="text/css">
      #topButton{
        display: none;
      }
    </style>

    <div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light blue-grey scroll" href="#Home" id="topButton" onclick="topFunction()">
      <i class="fa fa-angle-double-up"></i>
    </a>
    </div>
    <!--End Top Button-->

    <!-- Footer -->
    <footer class="page-footer blue-grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l5 s12">
                <h5 class="white-text">Onwards & Upwards</h5>
                <p class="grey-text text-lighten-4"><p>
              </div>
              <div class="col l5 offset-l2 s12">
                <h5 class="white-text">Follow Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook-square" style="font-size: 36px; padding-right: 3px;"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter-square" style="font-size: 36px; padding-right: 3px;"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-instagram" style="font-size: 36px; padding-right: 3px;"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-google-plus-square" style="font-size: 36px; padding-right: 3px;"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <center><a class="grey-text text-lighten-4">Made with <i class="fa fa-heart" style="color: red;"></i> by Akshita Lakkad and Vidhi Shah</a></center>
            </div>
          </div>
        </footer>
        <!-- End Footer -->

    <!--Import jQuery before materialize.js-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>


<!-- Scroll Effect-->
    <script type="text/javascript">

		  $('.scroll').on('click', function(e) {
		  e.preventDefault();
		  var section = $(this).attr('href').substr($(this).attr('href').indexOf('#'));
		  var $section = $(section);

		  $('html, body').animate({
		    scrollTop: $section.offset().top + 'px'}, 1000);
		});
 	</script>
<!--End-->

<!--Navbar effect-->
<script type="text/javascript">
	$(window).scroll(function() {
  if ($(this).scrollTop() > 1) {
    $('#navbar').addClass('black');
  }
  else {
    $('#navbar').removeClass('black');
  }
});

</script>
<!--End-->

    
    <!--Hidden Top Button-->
    <script type="text/javascript">
        window.onscroll=function(){
          scrollFunction()};
          function scrollFunction(){
            if (document.body.scrollTop>20 || document.documentElement.scrollTop>20){
              document.getElementById("topButton").style.display="block";
            } else{
              document.getElementById("topButton").style.display="none";
            }
          }


    //Logo Slider

    //Logo Slider

/*

Suga Slider

Usage ---------

$(window).load(function(){
  $('#logos').suga({
    'transitionSpeed': 2000,
    'snap': false
  });
});

The markup should resemble the markup here

*/

$.fn.suga = function(options) {
  var settings = $.extend({
      'transitionSpeed': 3000,
      'snap': false
  }, options);

  var $this = $(this);

  // add plugin specific classes
  $this.addClass('suga-slider-wrap');
  $this.children('ul').addClass('suga-slider-group');
  $this.find('li').addClass('suga-slide');  

  // caching $$$
  var $slide = $('.suga-slide'),
      $firstEl = $('.suga-slide:first'),
      $group = $('.suga-slider-group'),
      $wrap = $('.suga-slider-wrap');

  var slideWidth = $slide.outerWidth(),
      slideHeight = $('.suga-slide').height(),
      slideCount = $slide.length,
      totalWidth = slideWidth * slideCount;

  // set width on group element
  $group.width(totalWidth);
  $wrap.height(slideHeight);
  $wrap.wrap('<div class="suga-container"></div>');

  // add first class at start
  if (!$group.find($firstEl).hasClass("suga-first")) {
    $group.find($firstEl).addClass("suga-first");
  }

  var transitionSnap = function() {
    var $firstEl = $group.find('.suga-first').html();
    
    $group.find('.suga-first').animate({
      'margin-left': '-' + slideWidth + 'px'
    }, function(){
     $group.append('<li class="suga-slide">' + $firstEl + '</li>');
     $(this).remove(); 
     $group.find('li:first').addClass("suga-first");
      
    });  
  };

  var transitionScroll = function() {
     var $firstEl = $group.find('.suga-first').html();

    $group.find('.suga-first').animate({
      'margin-left': '-' + slideWidth + 'px'
    }, settings.transitionSpeed, 'linear', function(){
     $group.append('<li class="suga-slide">' + $firstEl + '</li>');
     $(this).remove(); 
     $group.find('li:first').addClass("suga-first");
     transitionScroll();
    });       
  };

  if (settings.snap) {
    window.setInterval(transitionSnap, settings.transitionSpeed);  
  } else {
    transitionScroll();
  }
}

$(window).load(function(){
  $('#logos').suga({
    'transitionSpeed': 2000,
    'snap': true
  });
});

//dropdown

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

    </script>
  </body>
</html>
