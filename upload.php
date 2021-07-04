<!DOCTYPE html>
  <html>
    <head>
      <title>Page Title</title>
      <link rel="stylesheet" href="main.css">
    </head>
    <body>
    </body>
  </html>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<h1>Fail on pilt - " . $check["mime"] . ".</h1>";
    $uploadOk = 1;
  } else {
    echo "<h1>Sinu fail pole pilt!</h1>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<h1>See fail on juba olemas!</h1>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<h1>Vabandust, see fail on liiga suur.</h1>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<h1>Ainult JPG, JPEG, PNG ja GIF formaat on lubatud!</h1>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<h1>Vabandust, sinu faili ei laetud ülesse.</h1>";
  echo "<h1><a href = 'index.html'>Tagasi avalehele</a></h1>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h1>Fail ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " on üles laetud. Vaatame selle esimesel võimalusel üle.</h1>";
    echo "<h1><a href ='index.html'>Tagasi avalehele</h1>";
  } else {
    echo "<h1>Vabandust, sinu faili üleslaadimisega tekkis tõrge.</h1>";
  }
}

 ?>
