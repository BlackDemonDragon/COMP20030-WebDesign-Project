<!DOCTYPE html>
<html lang="en">

<!--John O'Donnell    18368983
Home Page for Pluto's Planetarium Web website-->

<head>
  <meta charset="utf-8">

  <!--Favicon Image-->
  <link rel="icon" href="../media/PlutoFavicon.png" type="image/png">

  <!--Linking Css StyleSheet-->
  <link rel="stylesheet" href="./ProjectStyleSheet.css">

  <!--Page Title-->
  <title>Pluto's Planetarium</title>
</head>

<body>

  <!--Include navBar to the top of the page-->
  <?php include 'navBar.php'; ?>

  <!--Div that contain the main body of the page apart from navBar and footer-->
  <div class="MainText">

    <!--Paragraph that would overview the solar system -->
    <h1>The Solar System</h1>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis dui auctor tellus sodales dapibus quis ut orci. Nunc fermentum velit risus, quis tincidunt ipsum pellentesque in. Integer nec tincidunt urna. Maecenas a ultricies enim. Phasellus eleifend semper mollis. Aliquam quis lacus nec lectus consequat consequat eget non magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam sed auctor arcu. Morbi vitae augue in justo rutrum placerat cursus a dolor.
    </p>

    <!--The Paragraph overviewing the sun and has a picture that links to the sun.php page-->
    <h2>The Sun</h2>
    <div class="Sun" style="overflow: hidden;">

      <!--Sun image that when hovered greys the image and displays caption. Image links to Sun.php-->
      <div class="PlanetBox" style="float: right;padding-top: 0%;">

        <!--Links the image to Sun.php. Image is given the PlanetBoxPicture class-->
        <a href="./Sun.php"><img src="../Media/Sun1.jpg" alt="Sun Image Not Found" class="PlanetBoxPicture" ></a>

        <!--Caption for the image-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Sun.php">Sun</a></div>
        </div>
      </div>

      <!--Paragraph for the sun overview-->
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis dui auctor tellus sodales dapibus quis ut orci. Nunc fermentum velit risus, quis tincidunt ipsum pellentesque in. Integer nec tincidunt urna. Maecenas a ultricies enim. Phasellus eleifend semper mollis. Aliquam quis lacus nec lectus consequat consequat eget non magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam sed auctor arcu. Morbi vitae augue in justo rutrum placerat cursus a dolor.
      </p>
    </div>

    <!--Break that clears the float-->
    <br style="clear:both;">

    <!--Images with links to all the planet pages seperated into the Terrestrial and Jovian planets-->
    <h2 id="Planets">The Planets</h2>

    <!--Terrestrial Planets-->
    <h3>Terrestrial Planets</h3>
    <div class="TerrestrialPlanetsNav">

      <!--Mercury Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Mercury"><img src="../Media/Mercury.jpg" alt="Mercury Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Mercury">Mercury</a></div>
        </div>
      </div>


      <!--Venus Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox" >

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Venus"><img src="../Media/Venus.jpg" alt="Venus Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Venus">Venus</a></div>
        </div>
      </div>


      <!--Earth Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Earth"><img src="../Media/Earth.jpg" alt="Earth Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Earth">Earth</a></div>
        </div>
      </div>


      <!--Mars Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Mars"><img src="../Media/Mars.jpg" alt="Mars Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Mars">Mars</a></div>
        </div>
      </div>

    </div>

    <!--Break that clears the float-->
    <br style="clear:both;">


    <!--Jovian Planets-->
    <h3 >Jovian Planets</h3>
    <div class="JovianPlanetsNav">

      <!--Jupiter Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Jupiter"><img src="../Media/Jupiter.jpg" alt="Jupiter Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Jupiter">Jupiter</a></div>
        </div>
      </div>


      <!--Saturn Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox" >

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Saturn"><img src="../Media/Saturn.jpg" alt="Saturn Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Saturn">Saturn</a></div>
        </div>
      </div>


      <!--Uranus Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Uranus"><img src="../Media/Uranus.jpg" alt="Uranus Image Not Found" class="PlanetBoxPicture"></a>

        <!--Image Caption-->
        <div class="PlanetBoxTextPosition">
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Uranus">Uranus</a></div>
        </div>
      </div>

      <!--Neptune Planet Box that has a image of the planet and Links to planet page-->
      <div class="PlanetBox">

        <!--Image of planet and link to planet page-->
        <a href="./Planets.php?Planet=Neptune"><img src="../Media/Neptune.jpg" alt="Neptune Image Not Found" class="PlanetBoxPicture"></a>
        <div class="PlanetBoxTextPosition">

          <!--Image Caption-->
          <div class="PlanetBoxText"><a href="./Planets.php?Planet=Neptune">Neptune</a></div>
        </div>
      </div>

    </div>

    <!--Break that clears the float-->
    <br style="clear:both;">
  </div>

  <!--Include the footer to the bottom of the page-->
  <?php include 'footerNav.php'; ?>


</body>
</html>
