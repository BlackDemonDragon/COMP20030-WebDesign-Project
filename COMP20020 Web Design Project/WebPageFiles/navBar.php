<!--Navigation Bar for the top of every page-->
<div class="navBar">

  <!--Logo Link which links to home page-->
  <a href="./Home.php" class="logo">Pluto's Planetarium</a>

  <!--The NavBar that floats left-->
  <div class="navBar-left">
    <!--Home Link to home.php-->
    <a class="Home" href="./Home.php">Home</a>

    <!--Sun Link to Sun.php-->
    <a href="./Sun.php">Sun</a>

    <!--Dropdown for Terrestrial planet-->
    <div class="PlanetsDropDown">

      <!--Links to planets selection of Home.php-->
      <a href="./Home.php#Planets">Terrestrial Planets</a>

      <!--Links to planet.php with the variable planets passed by url set to the planet's name-->
      <div class="PlanetsDropDownList">
        <a href="./Planets.php?Planet=Mercury">Mercury</a>
        <a href="./Planets.php?Planet=Venus">Venus</a>
        <a href="./Planets.php?Planet=Earth">Earth</a>
        <a href="./Planets.php?Planet=Mars">Mars</a>
      </div>
    </div>


    <!--Dropdown for Jovian planets-->
    <div class="PlanetsDropDown">

      <!--Links to planets selection of Home.php-->
      <a href="./Home.php#Planets">Jovian Planets</a>

      <!--Links to planet.php with the variable planets passed by url set to the planet's name-->
      <div class="PlanetsDropDownList">
        <a href="./Planets.php?Planet=Jupiter">Jupiter</a>
        <a href="./Planets.php?Planet=Saturn">Saturn</a>
        <a href="./Planets.php?Planet=Uranus">Uranus</a>
        <a href="./Planets.php?Planet=Neptune">Neptune</a>
      </div>
    </div>

    <!--Link to about page-->
    <a href="./About.php">About</a>
  </div>

  <!--Break that clears the float-->
  <br style="clear:both;">
</div>
