<!DOCTYPE html>
<html lang="en">

<!--John O'Donnell    18368983
Sun Page for Pluto's Planetarium Website-->

<head>
  <meta charset="utf-8">

  <!--Favicon Image-->
  <link rel="icon" href="../media/PlutoFavicon.png" type="image/png">

  <!--Linking Css StyleSheet-->
  <link rel="stylesheet" href="./ProjectStyleSheet.css">

  <!--If Javascript is diabled use this stylesheet instead of the slideshow-->
  <noscript>
    <style>

    /*SunSlideShow style*/
    .SunSlideShow{
      width: 100%;
    }

    /*SunSlide Style - display all 3 images in a row insted of slide show*/
    .SunSlide{
      display: block;
      width: 33%;
      float:left;
      padding: 5%;
    }

    /*nextSlide, prevSlide and dotSlide style - hidden becaus no slideshow*/
    .nextSlide, .prevSlide, .dotSlide{
      display: none;
    }

    /*SunCaption style - Set to display under the images in black text*/
    .SunCaption{
      position: relative;
      width: 100%;
      font-size: 1em;
      color: Black;
    }
    </style>
  </noscript>

  <!--Page Title-->
  <title>Pluto's Planetarium - Sun</title>
</head>

<body>

  <!--Include navBar to the top of the page-->
  <?php include 'navBar.php'; ?>

  <!--Div that contain the main body of the page apart from navBar and footer-->
  <div class="MainText">

    <!--Informational Paragraph on the Sun-->
    <h1>The Sun</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida turpis vitae ligula facilisis suscipit. Praesent iaculis mauris eget porta tristique. Morbi pharetra pellentesque orci vitae facilisis. Aliquam purus est, posuere in est scelerisque, rhoncus semper tortor. Morbi blandit bibendum nisl, vel imperdiet nulla pretium laoreet. Aliquam non commodo magna. Aenean sit amet semper dui. Ut porttitor finibus massa, sit amet pulvinar sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent risus nulla, suscipit vel pulvinar sit amet, ornare hendrerit eros. Curabitur dignissim risus dictum venenatis luctus. Sed iaculis orci ut feugiat dapibus. Vivamus dignissim suscipit enim vel sodales. Morbi ultricies lacinia leo, auctor pellentesque mi pretium quis.<br>Morbi in cursus purus. Suspendisse gravida vestibulum aliquam. Duis molestie porttitor orci, sit amet tempus lectus ornare sed. Quisque tincidunt felis nec mauris pellentesque rutrum vitae vel nisl. Etiam dignissim lectus nec gravida pharetra. Curabitur facilisis massa nisl. Vestibulum sodales felis vehicula congue cursus. Pellentesque ipsum mauris, mollis eu mauris eu, accumsan rutrum lacus.Fusce congue enim libero, quis vulputate felis varius quis. Vivamus scelerisque nisl suscipit bibendum bibendum. Etiam non tempor nunc. Donec quis justo quis metus viverra ultrices. Etiam vestibulum neque nunc, eget aliquam augue pretium sollicitudin. Fusce pellentesque ipsum sit amet leo mollis lacinia. Aliquam venenatis laoreet ex, id dictum ante pharetra ut. Quisque id condimentum massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla sodales quam id elit laoreet, eget tempor ante aliquam. </p>

    <!--slideshow of the Sun images-->
    <div class="SunSlideShow">

      <!--First slide contains an image and a caption-->
      <div class="SunSlide">
        <img src="../Media/Sun1.jpg" alt="Sun Image 1" >
        <div class="SunCaption">The Sun</div>
      </div>

      <!--Secound slide contains an image and a caption-->
      <div class="SunSlide">
        <img src="../Media/Sun2.jpg" alt="Sun Image 2" >
        <div class="SunCaption">Layers of the Sun</div>
      </div>

      <!--Third slide contains an image and a caption-->
      <div class="SunSlide">
        <img src="../Media/Sun3.jpg" alt="Sun Image 3" >
        <div class="SunCaption">Sun with prominence</div>
      </div>

      <!--The next and previous slide buttons. Call ChangeSlides on click-->
      <a class="prevSlide" onclick="ChangeSlides(-1)">&#10094;</a>
      <a class="nextSlide" onclick="ChangeSlides(1)">&#10095;</a>

      <br>

      <!--Slide dots to show what slide its on and allows quick movement to slides as clicking on the dot change the slide to coorsponding image-->
      <div style="text-align:center">
        <span class="dotSlide" onclick="currentSlideDot(1)"></span>
        <span class="dotSlide" onclick="currentSlideDot(2)"></span>
        <span class="dotSlide" onclick="currentSlideDot(3)"></span>
      </div>

    </div>

  </div>

  <!--Include the footer to the bottom of the page-->
  <?php include 'footerNav.php'; ?>

  <!--Including the javascript
  Done at end of file so that the insistall set up of the slideshow happens after the slideshow elements-->
  <script type="text/javascript"  src="./SunSlide.js"></script>

</body>
</html>
