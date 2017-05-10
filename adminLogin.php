<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
     <style>
       .row{
         padding-top: 200px;
         padding-left: 450px;
       }
       button{
         padding-left: 350px;
       }


     </style>

   <body>
   <form action="#" method="POST">
     <div class="row">
         <div class="col s12 m6">
           <div class="input-field col s12">
             <input id="username" name="username" type="text" class="validate">
             <label for="username">Username</label>
           </div>
             <div class="input-field col s12">
               <input id="password" name="password" type="password" class="validate">
               <label for="password">Password</label>
             </div>
             <button name="submit" class="btn-floating btn-large waves-effect waves-light right blue darken-3"><i class="material-icons ">arrow_forward</i></button>
         </div>

       </div>
       </form>
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
 </html>

<?php
if (isset($_POST["submit"])) {
  if ($_POST["username"]==="root" AND $_POST["password"]==="root") {
    header("location:uploader.php");
  }
  else {
    echo "<script>alert('Invalid Credentials');</script>";
    die();
  }
}

?>
