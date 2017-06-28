 <?php

          if($_POST["submit"]){
          	$recipient="akshita.lakkad@gmail.com";
          	$subject=$_POST["sub"];
          	$sender=$_POST["sender"];
          	$senderemail=$_POST["Semail"];
          	$message=$_POST["message"];

          	$mailBody="Name:$sender\nEmail:$senderemail\n\n$message";

          	mail($recipient,$subject,$mailBody);
          }
		?>