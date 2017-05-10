<html>
  <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>

  </head>
  <body>

    <form action="#" method="post" enctype="multipart/form-data">
      <div class="container" style="padding-top:15%;">
        <div class="row valign-wrapper">
          <div class="col s12 m6 l6 offset-m3 offset-l3">
            <div class="card blue lighten-2">
              <div class="card-content white-text">
                <span class="card-title"><b>Uploads....</b></span>
                  <div class="file-field input-field">
                    <div class="btn blue darken-4">
                      <span>File</span>
                      <input type="file" name="upload[]" type="file" multiple="multiple">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
                  <button class="btn-floating halfway-fab waves-effect waves-light indigo darken-4 btn-large" type="submit" name="submit">
                    <i class="material-icons">backup</i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
  </body>
</html>
<?php
  if (isset($_POST["submit"]))
  {
    // open directory where images are stored
    opendir('assets/images');

    //count the total number of images
    $total = count($_FILES['upload']['name']);

    // Loop through each image
    for($i=0; $i<$total; $i++)
    {
      //Get the temp file path
      $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
      //Make sure tempfilepath is not empty, that is, image exists
      if ($tmpFilePath != "")
      {
        //Setup our new file path
        $newFilePath = "assets/images/" . $_FILES['upload']['name'][$i];

        //Upload the file into the temp dir
        move_uploaded_file($tmpFilePath, $newFilePath);
      }
    }
    echo "<script>alert('Upload Successful');</script>";
  }





  ?>
