<!DOCTYPE html>
<html lang="en">
<head>
<title>Football Statistics</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
  color: black;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  /* http://www.sportslogos.net/teams/list_by_league/7/National_Football_League/NFL/logos/ */
  background-image: url(packers.jpg);
  background-size: 15%;
}

.header h1 {
  font-size: 50px;
  color: white;
  text-shadow:
    -4px -4px 0 black,
    4px -4px 0 black,
    -4px 4px 0 black,
    4px 4px 0 black; 
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column a:hover{
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.column {   
  overflow: hidden;
  background-color: white;
  font: impact;

}

.column a{
  display: block;
  color: red;
  text-align: center;
  font-size: 18px;
  font: impact;
  padding: 140px 160px;
  text-decoration: none;
}



.dropbtn {
  background-color: red;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: blue;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: gray;}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .column{   
    width: 100%;
    padding: 0;
    font: impact;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
  
}
</style>
</head>
<body>

<div class= "header">
    <h1>Packers</h1>
</div>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
</div>

</body>
</html>

<!-- Form page -->
<!-- https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/How_to_structure_an_HTML_form -->

<section>
    <h2>Input Play Information Below:</h2>


    <h3>Show One Year:</h3>

    <p>
      <label for="quarter">
        <span>Quarter:</span>
      </label>
      <select id="quarter" name="usercard">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </p>
    <p>
    <p>
      <label for="down">
        <span>Down:</span>
      </label>
      <select id="down" name="usercard">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </p>
    <p>

    <p>
      <label for="distance">
        <span>Distance:</span>
      </label>
      <select id="distance" name="usercard">
        <option value="1">Short (1 - 5 yards)</option>
        <option value="2">Medium (6 - 10 yards)</option>
        <option value="3">Long (11 - 15 yards)</option>
        <option value="4">Very Long (15+ yards)</option>
      </select>
    </p>
    <p>

    <p>
      <label for="field position">
        <span>Field Position:</span>
      </label>
      <select id="field position" name="usercard">
        <option value="1">Own 1 - 25</option>
        <option value="2">Own 26 - 50</option>
        <option value="3">Opponent 49 - 25</option>
        <option value="4">Opponent 24 - goalline</option>
      </select>
    </p>

    <p>
      <label for="year">
        <span>Year:</span>
      </label>
      <select id="year" name="usercard">
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </p>

    <p> <button onclick="window.location.href = 'oneyearresults.php';" type="submit">Submit Choices</button> </p>
</section>

<section>
    <h3>Compare Two Years:</h3>

    <p>
      <label for="quarter">
        <span>Quarter:</span>
      </label>
      <select id="quarter" name="usercard">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </p>
    <p>
    <p>
      <label for="down">
        <span>Down:</span>
      </label>
      <select id="down" name="usercard">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </p>
    <p>

    <p>
      <label for="distance">
        <span>Distance:</span>
      </label>
      <select id="distance" name="usercard">
        <option value="1">Short (1 - 5 yards)</option>
        <option value="2">Medium (6 - 10 yards)</option>
        <option value="3">Long (11 - 15 yards)</option>
        <option value="4">Very Long (15+ yards)</option>
      </select>
    </p>
    <p>

    <p>
      <label for="field position">
        <span>Field Position:</span>
      </label>
      <select id="field position" name="usercard">
        <option value="1">Own 1 - 25</option>
        <option value="2">Own 26 - 50</option>
        <option value="3">Opponent 49 - 25</option>
        <option value="4">Opponent 24 - goalline</option>
      </select>
    </p>

    <p>
      <label for="year1">
        <span>First Year:</span>
      </label>
      <select id="year1" name="usercard">
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </p>

    <p>
      <label for="year2">
        <span>Second Year:</span>
      </label>
      <select id="year2" name="usercard">
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </p>

    <p> <button onclick="window.location.href = 'compareyearsresults.php';" type="submit">Submit Choices</button> </p>
</section>



<!-- START OF PHP -->

<?php
$servername = "localhost";
$username = "root";
$password = "123456";
// Whatever activity we named for our database
$dbname = "Activity4";

//Set up
$conn = new mysqli($servername, $username, $password);

mysqli_select_db($conn, $dbname) or die("Could not open the '$dbname'");


// Querey Section
$test_query = "SELECT * FROM instructor";
$result = mysqli_query($conn, $test_query);

$tuple_count = 0;
while($row = mysqli_fetch_array($result)) {
  $tuple_count++;
  echo "<p> You have this instructor: $row[1] with ID $row[0]";
}

echo "<p> There are $tuple_count instructors";

?>
<!-- END OF PHP -->
