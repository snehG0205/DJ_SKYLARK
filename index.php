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

   <!--Hover--> <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

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
        {selector: '.c1', offset: 50, callback: function(el) {
          //Materialize.toast("This is About Us!", 1500 );
           $('.c1').addClass("animated zoomIn");

        } },
        {selector: '.c2', offset: 50, callback: function(el) {
          //Materialize.toast("This is About Us!", 1500 );
           $('.c2').addClass("animated zoomIn");

        } },
        //what we do
         {selector: '.r0', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row1 !", 1500 );
           $('.cc0').addClass("animated fadeInUp");

        } },
        {selector: '.r1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row1 !", 1500 );
           $('.cc1').addClass("animated fadeInUp");
           $('.cc2').addClass("animated fadeInUp");

        } },
        {selector: '.r2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.cc3').addClass("animated fadeInUp");
          $('.cc4').addClass("animated fadeInUp");


        } },
        //Teams
         {selector: '.rr0', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.ccc0').addClass("animated fadeInUp");
        } },
        {selector: '.rr1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.ccc1').addClass("animated fadeInUp");
          $('.ccc1').addClass("animated fadeInUp");
          $('.ccc1').addClass("animated fadeInUp");

        } },
        {selector: '.rr2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.ccc2').addClass("animated fadeInUp");
          $('.ccc2').addClass("animated fadeInUp");
          $('.ccc2').addClass("animated fadeInUp");
        } },
        {selector: '.rr3', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.ccc3').addClass("animated fadeInUp");
          $('.ccc3').addClass("animated fadeInUp");
          $('.ccc3').addClass("animated fadeInUp");
        } },
        {selector: '.rr4', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.ccc4').addClass("animated fadeInUp");
          $('.ccc4').addClass("animated fadeInUp");
          $('.ccc4').addClass("animated fadeInUp");
        } },

        //Competitions

        {selector: '.comp1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.p1').addClass("animated fadeInUp");
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

        //Aircrafts
        {selector: '.air1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.a1').addClass("animated fadeInUp");
        } },
        {selector: '.air2', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.a2').addClass("animated fadeInUp");
          $('.a2').addClass("animated fadeInUp");
          $('.a2').addClass("animated fadeInUp");
        } },

        //Sponsors
        {selector: '.s1', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.sp1').addClass("animated fadeInUp");
        } },
        //Contact
        {selector: '.con', offset: 50, callback: function(el) {
          //Materialize.toast("This is wwd row2 !", 1500 );
          $('.co1').addClass("animated fadeInUp");
          $('.co1').addClass("animated fadeInUp");
        } },

      ];
      Materialize.scrollFire(options);

    </script>
  </head>

  <body class="grey lighten-2">


   <!--Navigation-->

    <div class="navbar-fixed" id="navv">
    <nav id="navbar">
     <div class="nav-wrapper">
       <a href="#!" class="brand-logo">Skylark</a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a>
       <ul class="right hide-on-med-and-down">
         <li><a href="#Home" class="scroll waves-effect waves-light">Home</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">About Us<i class="material-icons right">arrow_drop_down</i></a>
          </li>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#Who" class="scroll waves-effect waves-light">Who We Are</a></li>
              <li class="divider"></li>
              <li><a href="#Princi" class="scroll waves-effect waves-light">From The Principal's Desk</a></li>
            </ul>

         <li><a href="#WWD" class="scroll waves-effect waves-light">What We Do</a></li>
         <li><a href="#Comp" class="scroll waves-effect waves-light">Competitions</a></li>
         <li><a href="#Air" class="scroll waves-effect waves-light">Aircrafts</a></li>
         <li><a href="#Team" class="scroll waves-effect waves-light">Team</a></li>
         <li><a href="#Sponsors" class="scroll waves-effect waves-light">Sponsors</a></li>
         <li><a href="#Contact" class="scroll waves-effect waves-light">Contact Us</a></li>
       </ul>
       <ul class="side-nav" id="mobile-demo">
         <li><a href="#Home" class="scroll waves-effect waves-light">Home</a></li>
         <li><a href="#About" class="scroll waves-effect waves-light">About US</a></li>
         <li><a href="#WWD" class="scroll waves-effect waves-light">What We Do</a></li>
         <li><a href="#Comp" class="scroll waves-effect waves-light">Competitions</a></li>
         <li><a href="#Air" class="scroll waves-effect waves-light">Aircrafts</a></li>
         <li><a href="#Team" class="scroll waves-effect waves-light">Team</a></li>
         <li><a href="#Sponsors" class="scroll waves-effect waves-light">Sponsors</a></li>
         <li><a href="#Contact" class="scroll waves-effect waves-light">Contact Us</a></li>
       </ul>
     </div>
   </nav>
     </div>
   <!-- End Navigation -->

   <!-- Start Carousel -->
   <section id="Home">
    <div class="carousel carousel-slider center" data-indicators="true">
       <div class="carousel-item" href="#one!">
         <img src="assets/img/1.jpg">
       </div>
       <div class="carousel-item" href="#two!">
         <img src="assets/img/2.jpg">
       </div>
       <div class="carousel-item" href="#three!">
         <img src="assets/img/3.jpg">
       </div>
       <div class="carousel-item" href="#four!">
        <img src="assets/img/4.jpg">
       </div>
     </div>
    </section>
     <!-- End Carousel -->

<!--Trial About Us-->

<section class="about-w3l " id="About">
	<div class="container">
	<!--<div class="row c1" id="Who"><center><h2>About Us</h2></center></div>-->
  <div class="row c1 center"><h4>Who We Are</h4>
  <hr style="width: 5%; color:#98878F;">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis arcu at metus molestie, ut fermentum metus laoreet. Maecenas lectus felis, posuere ut elementum in, sodales eget leo. Nulla laoreet orci dui, fermentum luctus purus aliquet eu. Phasellus cursus, erat quis ullamcorper efficitur, erat ligula euismod purus, vitae semper ligula sapien id est. In lobortis vulputate ornare.</p>
  </div>

  <div  id="Princi">
  <center><h4>From the Principal's Desk</h4></center>
  <hr style="width: 5%; color:#98878F;"><br>
	<div class="row">
		<div class="col s12 m6 l6 c2">

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis arcu at metus molestie, ut fermentum metus laoreet. Maecenas lectus felis, posuere ut elementum in, sodales eget leo. Nulla laoreet orci dui, fermentum luctus purus aliquet eu. Phasellus cursus, erat quis ullamcorper efficitur, erat ligula euismod purus, vitae semper ligula sapien id est. In lobortis vulputate ornare.</p>
		</div>
		<div class="col s12 m6 l6 c2">
		    <img src="assets/img/images.jpg" style="height: 300px !important; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		</div>
	</div>
	</div>
  </div>

</section>

    <!-- what we do -->

    <section id="WWD" style="background-image: url('assets/img/21.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <br><br>
    <center><h3><div><b>What We Do</b></div></h3></center>
      <hr style="width: 5%; color:#98878F;">
    <div class="r0">

    <div class="container"><p class="black-text cc0"><b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,</b></p></div></div>
    <div class="row">
      <div class = "col s12 m10 l10 offset-l1 offset-m1">
    <div class="row r1">
        <div class="col s12 m6 l4 offset-l1">
          <div class="card grey darken-4 z-depth-5 cc1">
            <div class="card-content white-text ">
              <span class="card-title center"><i class="medium material-icons">build</i><br><br>DESIGN</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 offset-l2">
          <div class="card grey darken-4 z-depth-5 cc2">
            <div class="card-content white-text ">
              <span class="card-title center"><i class="medium material-icons">assessment</i><br><br>ANALYZE</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row r2">
          <div class="col s12 m6 l4 offset-l1">
            <div class="card grey darken-4 z-depth-5 cc3">
              <div class="card-content white-text ">
                <span class="card-title center"><i class="medium material-icons">perm_data_setting</i><br><br>FABRICATE</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4 offset-l2">
            <div class="card grey darken-4 z-depth-5 cc4">
              <div class="card-content white-text ">
                <span class="card-title center"><i class="medium material-icons">flight_takeoff</i><br><br>FLIGHT TESTING</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- End What we do -->

    <!-- Competitions -->
    <section id="Comp">
    <div class="comp1"><center><h3 class="p1">Competitions</h3></center></div>
      <hr style="width: 5%; color:#98878F;"><br>

    <div class="container">

    <div class="row center comp2" style="margin-right: 20px; margin-left:20px;" >
      <div class="col s12 m4 l4 p2">
        <img src="assets/img/1.jpg" style="width: 290px;height: 290px; padding: 10 10 10 10;">
      </div>
      <div class="col s12 m4 l4 p2" >
       <img src="assets/img/2.jpg" style="width: 290px;height: 290px; padding: 10 10 10 10;">
      </div>
      <div class="col s12 m4 l4 p2">
        <img src="assets/img/3.jpg" style="width: 290px;height: 290px; padding: 10 10 10 10;">
      </div>
    </div>

    <div class="row comp3 " style="margin-left:20px; margin-right: 10px;">
    <p class="p3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis arcu at metus molestie, ut fermentum metus laoreet. Maecenas lectus felis, posuere ut elementum in, sodales eget leo. Nulla laoreet orci dui, fermentum luctus purus aliquet eu. Phasellus cursus, erat quis ullamcorper efficitur, erat ligula euismod purus, vitae semper ligula sapien id est. In lobortis vulputate ornare.</p><br>
    </div>

    </div>
    </div>
    </section>
    <!-- End Competitions -->

        <!--Aircrafts-->

    <style type="text/css">
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            transition: opacity 200ms;
            visibility: hidden;
            opacity: 0;
          }
          .overlay.light {
            background: rgba(255, 255, 255, 0.5);
          }
          .overlay .cancel {
            position: absolute;
            left: 500px;
            width: 100%;
            height: 100%;
            cursor: default;
          }
          .overlay:target {
            visibility: visible;
            opacity: 1;
          }

          .popup {
            margin: 75px auto;
            left: 500px;
            padding: 20px;
            background: #fff;
            border: 1px solid #666;
            width: 300px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            position: fixed;
          }
          .light .popup {
            border-color: #aaa;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
          }
          .popup h2 {
            margin-top: 0;
            color: #666;
            font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
          }
          .popup .close {
            position: fixed;
            width: 20px;
            height: 20px;
            top: 20px;
            right: 20px;
            opacity: 0.8;
            transition: all 200ms;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #666;
          }
          .popup .close:hover {
            opacity: 1;
          }
          .popup .content {
            max-height: 400px;
            overflow: auto;
          }
          .popup p {
            margin: 0 0 1em;
          }
          .popup p:last-child {
            margin: 0;
          }

    </style>


    <section id="Air">
    <div class="air1"><center><h1 class="a1">Aircrafts</h1></center></div>
      <hr style="width: 5%; color:#98878F;">
      <br>
    <div class="container">
    <div class="row center air2">
      <div class="col s12 m4 a2">
        <a href="#popup1" ><img src="assets/img/1.jpg" style="width:290px; height:290px; padding:10 10 10 10;"></a>
      </div>
      <div class="col s12 m4 a2">
        <a href="#popup2" ><img src="assets/img/1.jpg" style="width:290px; height:290px; padding:10 10 10 10;"></a>
      </div>
      <div class="col s12 m4 a2">
        <a href="#popup3" ><img src="assets/img/1.jpg" style="width:290px; height:290px; padding:10 10 10 10;"></a>
      </div>
    </div>

      <!--PopUp Blocks-->
      <div id="popup1" class="overlay light">
        <a class="cancel" href="#"></a>
        <div class="popup">
          <h2>What the what?</h2>
          <div class="content">
                <p>Click outside the popup to close.</p>
          </div>
        </div>
      </div>
      <div id="popup2" class="overlay light">
        <a class="cancel" href="#"></a>
        <div class="popup">
          <h2>What the what?</h2>
          <div class="content">
                <p>Click outside the popup to close.</p>
          </div>
        </div>
      </div>
      <div id="popup3" class="overlay light">
        <a class="cancel" href="#"></a>
        <div class="popup">
          <h2>What the fuck?</h2>
          <div class="content">
                <p>Click outside the popup to close.afyuactw
                ywetf7twevuewhvwe;v
                jvt7rvgweivbrevnerbiuthbetbdf,m lernvierbieurvkerv kdfvd</p>
          </div>
        </div>
      </div>
    </div>
<!--End of aircrafts-->


    <!--Trial Teams-->
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

<br>
  <div class="grey lighten-2">
 <section class="main" id="Team">
 <div class="rr0"><center><h3 class="ccc0">The Team</h3></center></div>
   <hr style="width: 5%; color:#98878F;">
 <br>
  <div class="container">
  <div class="row rr1">


        <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1 ccc1">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2 ccc1">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3 ccc1">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
        </ul>

  </div>
  <div class="row rr2">


        <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1 ccc2">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2 ccc2">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3 ccc2">
              <div class="ch-info">
               <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
        </ul>

  </div>
  <div class="row rr3">


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
            <div class="ch-item ch-img-2 ccc3">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3 ccc3">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
        </ul>

  </div>
  <div class="row rr4">


        <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1 ccc4">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2 ccc4">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3 ccc4">
              <div class="ch-info">
                <h3>Name</h3>
                <p>Post<br> <a href="http://drbl.in/eOPF"><i class="fa fa-facebook-square" style="font-size: 15px; color: white;"></i></a></p>
              </div>
            </div>
          </li>
        </ul>

  </div>
</div>
</section>
</div>
<!--End of teams-->

    <!-- Sponsors -->
    <br>
    <section id="Sponsors">
    <div class="container" style="padding-top: 10px !important;">
     <div class="s1"> <h3 class="sp1"><center> Our Sponsors</center></h3></div>
       <hr style="width: 5%; color:#98878F;">
    <div class="carousel">
      <?php
          $dir = "assets/images";
          $files = scandir($dir);
          // Count number of files and store them to variable..
          $num_files = count($files)-2;
          $c=1;

          if (is_dir($dir))
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

           }

      ?>
<!--
      <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/2"></a>
      <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/3"></a>
      <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/4"></a>
      <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/5"></a> -->
    </div>
    </div>
    </section>
    <!-- End Sponsors -->

    <!-- COntact  -->
    <section id="Contact">
    <div class="row con" style="background-color: #627186;">
    <br><br>
        <div class="col s12 m6 co1">
          <div class="card blue-grey lighten-4" >
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
                  <h5>xyz@gmail.com</h5>
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
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      });

    </script>

<!--Carousel-->
    <script type="text/javascript">
    $(document).ready(function(){
  $('.carousel').carousel();
});
      $('.carousel.carousel-slider').carousel({fullWidth: true});
      // Next slide
      $('.carousel').carousel('next');
      $('.carousel').carousel('next', 3); // Move next n times.
      // Previous slide
      $('.carousel').carousel('prev');
      $('.carousel').carousel('prev', 4); // Move prev n times.
      // Set to nth slide
      $('.carousel').carousel('set', 4);
    </script>
    <script type="text/javascript">
    $(document).ready(function () {
      var $scrollingDiv = $("nav");

      $(window).scroll(function () {
        //  $scrollingDiv.stop()
        //      .animate({
        //      "marginTop": ($(window).scrollTop() + 0) + "px"
        //  }, "slow");
        $('.navbar-fixed').children('div').css('background','green');
       });
      });

    </script>

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
    </script>
  </body>
</html>
