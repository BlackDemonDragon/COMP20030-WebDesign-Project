<!DOCTYPE html>
<html lang="en">

<!--John O'Donnell    18368983
Planet Page for Pluto's Planetarium Website
Uses a variable passed throught the url to call an SQL database to request data for webpage-->

<head>
  <meta charset="utf-8">

  <!--Favicon Image-->
  <link rel="icon" href="../media/PlutoFavicon.png" type="image/png">

  <!--Linking Css StyleSheet-->
  <link rel="stylesheet" href="./ProjectStyleSheet.css">

  <!--Page title gets the Planet variable from the url and uses it in the title of the web page-->
  <title>Pluto's Planetarium - <?php echo $_GET["Planet"] ?></title>
</head>

<body>

  <!--Include navBar to the top of the page-->
  <?php include 'navBar.php'; ?>

  <!--Div that contain the main body of the page apart from navBar and footer-->
  <div class="MainText">

  <!--PHP to get information from the SQL database and echo the correct table, image and paragraph back-->
  <?php

    /*If the Planet variable in the url is set*/
    if (isset($_GET["Planet"])) {
      /*Plane*Name is set to Planet variable in URL*/
      $PlanetName = $_GET["Planet"];

      /*Use PlanetN?ame to echo the correct Heading for the page*/
      echo "<h1>".$PlanetName."</h1>";


      /*Login in varibles for the webserver*/
      $servername = "127.0.0.1";
      $username = "Admin_ProjectDataBase";
      $password = "Pluto";
      $dbname = "webdesignprojectdatabase";


      /*Creating a connect to webserver using login and storing in $conn*/
      $conn = new mysqli('127.0.0.1', $username, $password, $dbname);

      /*If there was a connection error print error*/
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }


      /*Select the row of planetstable data base that matches the PlanetName*/
      $sql = "SELECT * FROM planetstable WHERE PlanetName = '$PlanetName'";
      /*Store in result*/
      $result = $conn->query($sql);

      /*Fetch the row and store $row*/
      $row = $result->fetch_assoc();

      /*Echo out the Planet's table using the database*/
      echo "<h2>".$row["PlanetName"]." Information</h2>
      <table class=\"planetTable\">
        <tr>
          <th>Name</th>
          <td>".$row["PlanetName"]."</td>
        </tr>

        <tr>
          <th>Diameter</th>
          <td>".$row["PlanetDiameter"]."</td>
        </tr>

        <tr>
          <th>Mass</th>
          <td>".$row["PlanetMass"]."</td>
        </tr>

        <tr>
          <th>Density</th>
          <td>".$row["PlanetDensity"]."</td>
        </tr>

        <tr>
          <th>Speed of Gravity</th>
          <td>".$row["PlanetGravity"]."</td>
        </tr>

        <tr>
          <th>Planet from the Sun</th>
          <td>".$row["PlanetNumber"]."</td>
        </tr>

        <tr>
          <th>Distance from the Sun</th>
          <td>".$row["SunDistance"]."</td>
        </tr>

        <tr>
          <th>Number of Moons</th>
          <td>".$row["NumberMoon"]."</td>
        </tr>

        <tr>
          <th>Planetary Rings</th>
          <td>".$row["PlanetRings"]."</td>
        </tr>

        <tr>
          <th>Magnetic Field</th>
          <td>".$row["MagneticField"]."</td>
        </tr>

        <tr>
          <th>Atmosphere</th>
          <td>".$row["PlanetAtmosphere"]."</td>
        </tr>

        <tr>
          <th>Atmosphere Composition</th>
          <td>".$row["PlanetAtmosphereComposition"]."</td>
        </tr>

      </table>";

      /*Echo the image stored in database*/
      echo "<div class=\"PlanetPageImageContain\"><img src=".$row["PlanetImage"]." class=\"PlanetPageImage\" alt=\"".$PlanetName." Image\"></div>";

      /*Echo the Facts paragraph stored in the database of the planet*/
      echo "<br style=\"clear:both;\"><h2>".$row["PlanetName"]." Facts</h2><p>".$row["PlanetMoreFacts"]."</p>";

      $conn->close();
    }

    /*Else the Planet variable in the url is not set*/
    else {
      /*Redirect the user to the Planets anchor on the Home page*/
      header("Location:./home.php#Planets");
      exit();
    }

  ?>

  </div>

  <!--Include the footer to the bottom of the page-->
  <?php include 'footerNav.php'; ?>

</body>
</html>
