<!-- This is our Main Home page -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Football Statistics</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #FF2D00;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

article {
  float: left;
  width: 50%;
  background-color: #f1f1f1;
}

.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 50%;
  background-color: #f1f1f1;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}


.dropbtn {
  background-color: #4CAF50;
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
  background-color: #f1f1f1;
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

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

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
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}


</style>
</head>
<body>

<header>
    <h1>Football Statistics</h1>
</header>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="#">About</a>
  <a href="#">Link</a>
  <a href="#" style="float:right">Link</a>
</div>

<h2>CHOSE A TEAM: </h2>

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
