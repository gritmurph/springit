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
      <a href="team.php">Baltimore Ravens</a>
      <a href="#">Cincinnati Bengals</a>
      <a href="#">Cleveland Browns</a>
      <a href="#">Cleveland Browns</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC East</button>
  <div class = "leftcolumn">
    <div class="dropdown-content">
      <a href="#">Buffalo Bills</a>
      <a href="#">Miami Dolphins</a>
      <a href="#">New England Patriots</a>
      <a href="#">New York Jets</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC South</button>
  <div class = "leftcolumn">

    <div class="dropdown-content">
      <a href="#">Houston Texans</a>
      <a href="#">Indianapolis Colts</a>
      <a href="#">Jacksonville Jaguars</a>
      <a href="#">Tennessee Titans</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AFC West</button>
  <div class = "leftcolumn">

    <div class="dropdown-content">
      <a href="#">Denver Broncos</a>
      <a href="#">Kansas City Chiefs</a>
      <a href="#">Oakland Raiders</a>
      <a href="#">Pittsburgh Steelers</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC North</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="#">Chicago Bears</a>
      <a href="#">Detroit Lions</a>
      <a href="#">Green Bay Packers</a>
      <a href="#">Minnesota Vikings</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC East</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="#">Dallas Cowboys</a>
      <a href="#">New York Giants</a>
      <a href="#">Philadelphia Eagles</a>
      <a href="#">Washington Redskins</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC South</button>
  <div class = "rightcolumn">
    <div class="dropdown-content">
      <a href="#">Atlanta Falcons</a>
      <a href="#">Carolina Panthers</a>
      <a href="#">New Orleans Saints</a>
      <a href="#">Tampa Bay Buccaneers</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">NFC West</button>
  <div class = "rightcolumn">

    <div class="dropdown-content">
      <a href="#">Arizona Cardinals</a>
      <a href="#">St. Louis Rams</a>
      <a href="#">San Francisco 49ers</a>
      <a href="#">Seattle Seahawks</a>
    </div>
  </div>
</div>

</body>
</html>
