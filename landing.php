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
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background-image: url(header.jpg);
  background-size: 100%;
}

.header h1 {
  font-size: 50px;
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
  font-size: 100px;
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
  min-width: 160px;
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

<div class="header">
  <h1>Football Statistics</h1>
  <p>See how successful each NFL team was in a particular game situtation!</p>
</div>

<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
</div>
<div>
  <p>CHOSE A TEAM: </P>
</div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC North</button>
  <div class = "leftcolumn">
    <div class="dropdown-content">
      <a href="ravens.php">Baltimore Ravens</a>
      <a value="bengals" href="bengals.php">Cincinnati Bengals</a>
      <a href="browns.php">Cleveland Browns</a>
      <a href="steelers.php">Pittsburgh Steelers</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC East</button>
  <div class = "leftcolumn">
    <div class="dropdown-content">
      <a href="bills.php">Buffalo Bills</a>
      <a href="dolphins.php">Miami Dolphins</a>
      <a href="patriots.php">New England Patriots</a>
      <a href="jets.php">New York Jets</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC South</button>
  <div class = "leftcolumn">

    <div class="dropdown-content">
      <a href="texans.php">Houston Texans</a>
      <a href="colts.php">Indianapolis Colts</a>
      <a href="jaguars.php">Jacksonville Jaguars</a>
      <a href="titans.php">Tennessee Titans</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC West</button>
  <div class = "leftcolumn">

    <div class="dropdown-content">
      <a href="broncos.php">Denver Broncos</a>
      <a href="chiefs.php">Kansas City Chiefs</a>
      <a href="raiders.php">Oakland Raiders</a>
      <a href="chargers.php">San Diego Chargers </a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC North</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="bears.php">Chicago Bears</a>
      <a href="lions.php">Detroit Lions</a>
      <a href="packers.php">Green Bay Packers</a>
      <a href="vikings.php">Minnesota Vikings</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC East</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="cowboys.php">Dallas Cowboys</a>
      <a href="giants.php">New York Giants</a>
      <a href="eagles.php">Philadelphia Eagles</a>
      <a href="redskins.php">Washington Redskins</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC South</button>
  <div class = "rightcolumn">
    <div class="dropdown-content">
      <a href="falcons.php">Atlanta Falcons</a>
      <a href="panthers.php">Carolina Panthers</a>
      <a href="saints.php">New Orleans Saints</a>
      <a href="buccaneers.php">Tampa Bay Buccaneers</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC West</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="cardinals.php">Arizona Cardinals</a>
      <a href="rams.php">St. Louis Rams</a>
      <a href="49ers.php">San Francisco 49ers</a>
      <a href="seahawks.php">Seattle Seahawks</a>
    </div>
  </div>
</div>

</body>
</html>
