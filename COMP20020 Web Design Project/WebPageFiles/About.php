<!DOCTYPE html>
<html lang="en">

<!--John O'Donnell    18368983
    About Page for Pluto's Planetarium Website-->

<head>
  <meta charset="utf-8">

  <!--Favicon Image-->
  <link rel="icon" href="../media/PlutoFavicon.png" type="image/png">

    <!--Linking Css StyleSheet-->
  <link rel="stylesheet" href="./ProjectStyleSheet.css">

  <!--Page Title-->
  <title>Pluto's Planetarium About</title>
</head>
<body>


    <!--Include navBar to the top of the page-->
    <?php include 'navBar.php'; ?>


    <!--Div that contain the main body of the page apart from navBar and footer-->
    <div class="MainText" style="min-height: 100vh;">

      <!--About Information-->
      <h1>About Pluto's Planetarium</h1>
      <p>
        Pluto's Planetarium is a site designed to educate people on our solar system. <br>
        This website was created as a student web design project for University College Dublin's COMP20030 Web Design module.
      </p>

      <!--Contact Information. Link to an email address.-->
      <h2>Contact</h2>
      <p>
        Email - <a href="plutosplanetarium@gmail.com">plutosplanetarium@gmail.com</a>
      </p>

    </div>

  <!--Include the footer to the bottom of the page-->
  <?php include 'footerNav.php'; ?>

</body>
</html>
