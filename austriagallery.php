<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/austriagallerystyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/main.js"></script>
</head>
<body>

<?php
include 'header.php';
?>


        <div class="slider">
                <div class="slide current">
                  <div class="content">
                    <h1>Slide One</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
                <div class="slide">
                  <div class="content">
                    <h1>Slide Two</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
                <div class="slide">
                  <div class="content">
                    <h1>Slide Three</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
                <div class="slide">
                  <div class="content">
                    <h1>Slide Four</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
                <div class="slide">
                  <div class="content">
                    <h1>Slide Five</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
                <div class="slide">
                  <div class="content">
                    <h1>Slide Six</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
              </div>
              <div class="slide">
                  <div class="content">
                    <h1>Slide Seven</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                      maxime, voluptatibus labore doloremque vero!
                    </p>
                  </div>
                </div>
              </div>
              <div class="buttons">
                <button id="prev"><i class="fas fa-arrow-left"></i></button>
                <button id="next"><i class="fas fa-arrow-right"></i></button>
              </div>
          
              <script src="js/austriagallery.js"></script>

<?php
include 'footer.php';
?>
</body>
</html>