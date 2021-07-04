<?php
    $dir = "uploads";
    $files = glob($dir . '/*.*');
    $file = array_rand($files);

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Filmitsitaatide generaator</title>
      <link rel="stylesheet" href="main.css">
      <link rel="shortcut icon" type="image/jpg" href="pics/favicon.jpg"/>
      <script src="https://kit.fontawesome.com/639c50220f.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class = "container">
        <div class ="empty"><i id = "back_button" class="fas fa-arrow-left" onclick="window.location.href ='index.html'"></i></div>
        <div class = "heading">Suvaliste tsitaatide generaator</div>
        <div class = "download"><i id = "dwn_btn" class="fas fa-upload"></i></div>
      </div>
      <div class = "mainBody">
        <div class = "bg_left"><img id = "bg_left" src="pics/movie_reel.png" alt="moviereel"></div>
        <div class = "main_text">
          <img src=<?php echo $files[$file]; ?> alt="movie_meme" width="350" height="350">
          <button class = generate type="button" name="button" onclick = "window.location.reload()">Genereeri uus</button>
        </div>
        <div class = "bg_right"><img id = "bg_right" src="pics/movie_reel.png" alt="moviereel"></div>
      </div>
    </body>
  </html>
