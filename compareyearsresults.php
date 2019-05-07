<!DOCTYPE html>
<html lang="en">
<head>
<title>Football Statistics</title>
<style>

/* FOOTBALL */
/*http://www.courtdimensions.net/football-field/index.php*/
/*http://static.nfl.com/static/content/public/image/rulebook/pdfs/4_Rule1_The_Field.pdf*/

#football {
  width: 900px;
  height: 420px;
  border: 3px solid #FFF;
  position: relative;
  box-shadow: 0 0 55px #000;
}

#football span {
  border-right: 2px solid #FFF;
  width: 8.33%;
  height: 100%;
  display: inline-block;
  float: left;
  position: relative;
}

#football .endzone {
  background: #01A54F;
  width: 8.352%;
}
/* Pylons */
/*#football .endzone::before,
#football .endzone::after {
	content: '';
	display: block;
	width: 5px;
	height: 5px;
	border-radius: 50%;
	position: absolute;
	top: -2px;
	right: -2px;
	background: #E87600;
}

#football .endzone::after,
#football .endzone:last-of-type::after {
	top: auto;
	bottom: -2px;
}

#football .endzone:last-of-type::before,
#football .endzone:last-of-type::after {
	right: auto;
	left: -2px;
}*/

#football .endzone:last-of-type {
  background: #01652F;
  border-right: none;
}
/* Uprights */

#football::before,
#football::after {
  content: '';
  display: block;
  width: 3px;
  height: 18.7%;
  background: yellow;
  position: absolute;
  left: 1px;
  top: 41%;
  z-index: 100;
}

#football::after {
  left: auto;
  right: 1px;
}

#football .endzone::before,
#football .endzone::after {
  content: '';
  display: block;
  width: 23px;
  height: 3px;
  background: yellow;
  position: absolute;
  top: 40%;
  left: -25%;
  /*border: 1px solid #000;*/
  
  border-radius: 2px;
  -webkit-transform: rotate(20deg);
}

#football .endzone::after {
  top: 60%;
  -webkit-transform: rotate(-20deg);
}

#football .endzone:last-of-type::before,
#football .endzone:last-of-type::after {
  left: auto;
  right: -25%;
  -webkit-transform: rotate(-20deg);
}

#football .endzone:last-of-type::after {
  -webkit-transform: rotate(20deg);
}

#football .yard {
  background: -webkit-linear-gradient(left, transparent 0, transparent 48.5%, #FFF 48.5001%, #FFF 51.5%, transparent 51.5001%), -webkit-linear-gradient(left, #01652F 0, #01652F 7%, transparent 7.1%, transparent 9.5%, #01652F 9.6%, #01652F 17.6%, transparent 17.7%, transparent 19.2%, #01652F 19.3%, #01652F 27.3%, transparent 27.4%, transparent 29.9%, #01652F 30%, #01652F 38%, transparent 38.1%, transparent 40.6%, #01652F 40.7%, #01652F 50%, #01A54F 50.001%, #01A54F 59.6%, transparent 59.7%, transparent 62.3%, #01A54F 62.4%, #01A54F 70.4%, transparent 70.5%, transparent 73%, #01A54F 73.1%, #01A54F 81.1%, transparent 81.2%, transparent 83.7%, #01A54F 83.8%, #01A54F 91.8%, transparent 91.9%, transparent 94.4%, #01A54F 94.5%), -webkit-linear-gradient(top, #01A54F 0, #01A54F 1.25%, #FFF 1.2501%, #FFF 4.76%, #01A54F 4.7601%, #01A54F 35%, #FFF 35.0001%, #FFF 38.51%, #01A54F 38.52%, #01A54F 65%, #FFF 65.01%, #FFF 68.51%, #01A54F 68.52%, #01A54F 95.23%, #FFF 95.24%, #FFF 98.74%, #01A54F 98.75%) no-repeat 37px 0, -webkit-linear-gradient(top, #01652F 0, #01652F 1.25%, #FFF 1.2501%, #FFF 4.76%, #01652F 4.7601%, #01652F 35%, #FFF 35.0001%, #FFF 38.51%, #01652F 38.52%, #01652F 65%, #FFF 65.01%, #FFF 68.51%, #01652F 68.52%, #01652F 95.23%, #FFF 95.24%, #FFF 98.74%, #01652F 98.75%);
}

#football .yard::before,
#football .yard::after {
  content: attr(data-yard)'\25C2';
  /*width: 20px;*/
  /*height: 20px;*/
  
  position: absolute;
  top: 55px;
  right: -24.5%;
  display: block;
  color: #FFF;
  font-size: 2rem;
  line-height: 1;
  z-index: 100;
  -webkit-transform: rotate(180deg);
}

#football .yard::after {
  top: auto;
  bottom: 55px;
  -webkit-transform: rotate(0deg);
}

#football .yard:nth-of-type(6)::before,
#football .yard:nth-of-type(6)::after {
  content: attr(data-yard);
}

#football .yard:nth-of-type(1)::after,
#football .yard:nth-of-type(2)::after,
#football .yard:nth-of-type(3)::after,
#football .yard:nth-of-type(4)::after,
#football .yard:nth-of-type(5)::after,
#football .yard:nth-of-type(7)::before,
#football .yard:nth-of-type(8)::before,
#football .yard:nth-of-type(9)::before,
#football .yard:nth-of-type(10)::before {
  content: '\25C2'attr(data-yard);
}

#football .yard:nth-of-type(1)::before,
#football .yard:nth-of-type(2)::before,
#football .yard:nth-of-type(3)::before,
#football .yard:nth-of-type(4)::before,
#football .yard:nth-of-type(5)::before,
#football .yard:nth-of-type(7)::after,
#football .yard:nth-of-type(8)::after,
#football .yard:nth-of-type(9)::after,
#football .yard:nth-of-type(10)::after {
  content: attr(data-yard)'\25B8';
}

#football .yard:nth-of-type(7)::before,
#football .yard:nth-of-type(7)::after,
#football .yard:nth-of-type(9)::before,
#football .yard:nth-of-type(9)::after,
#football .yard:nth-of-type(8)::before,
#football .yard:nth-of-type(8)::after,
#football .yard:nth-of-type(10)::before,
#football .yard:nth-of-type(10)::after {
  right: -46.5%;
}

#football .yard:nth-of-type(11)::before,
#football .yard:nth-of-type(11)::after {
  content: '';
  width: 743px;
  height: 2px;
  top: 64%;
  background: -webkit-linear-gradient(left, transparent 0, transparent 31px, #FFF 32px, #FFF 42px, transparent 43px, transparent 69px, #FFF 70px, #FFF 80px, transparent 81px, transparent 106px, #FFF 107px, #FFF 117px, transparent 117px, transparent 143px, #FFF 144px, #FFF 154px, transparent 155px, transparent 179px, #FFF 180px, #FFF 190px, transparent 191px, transparent 217px, #FFF 218px, #FFF 228px, transparent 229px, transparent 255px, #FFF 256px, #FFF 266px, transparent 267px, transparent 292px, #FFF 293px, #FFF 303px, transparent 305px, transparent 329px, #FFF 330px, #FFF 340px, transparent 341px, transparent 367px, #FFF 368px, #FFF 378px, transparent 379px, transparent 404px, #FFF 405px, #FFF 415px, transparent 416px, transparent 442px, #FFF 443px, #FFF 453px, transparent 454px, transparent 478px, #FFF 479px, #FFF 489px, transparent 490px, transparent 515px, #FFF 516px, #FFF 526px, transparent 527px, transparent 552px, #FFF 553px, #FFF 563px, transparent 564px, transparent 591px, #FFF 592px, #FFF 602px, transparent 603px, transparent 627px, #FFF 628px, #FFF 638px, transparent 639px, transparent 664px, #FFF 665px, #FFF 675px, transparent 676px, transparent 700px, #FFF 701px, #FFF 711px, transparent 712px);
  right: 0;
}

#football .yard:nth-of-type(11)::before {
  right: 1px;
  top: 38%;
}
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
  background-image: url(nfl.jpg);
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
    <h1>Team Name</h1>
</div>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
</div>


<div id="football">
  <span class="endzone"></span>
  <span class="yard" data-yard="10"></span>
  <span class="yard" data-yard="20"></span>
  <span class="yard" data-yard="30"></span>
  <span class="yard" data-yard="40"></span>
  <span class="yard" data-yard="50"></span>
  <span class="yard" data-yard="40"></span>
  <span class="yard" data-yard="30"></span>
  <span class="yard" data-yard="20"></span>
  <span class="yard" data-yard="10"></span>
  <span class="yard"></span>
  <span class="endzone"></span>
</div>


<div id="football">
  <span class="endzone"></span>
  <span class="yard" data-yard="10"></span>
  <span class="yard" data-yard="20"></span>
  <span class="yard" data-yard="30"></span>
  <span class="yard" data-yard="40"></span>
  <span class="yard" data-yard="50"></span>
  <span class="yard" data-yard="40"></span>
  <span class="yard" data-yard="30"></span>
  <span class="yard" data-yard="20"></span>
  <span class="yard" data-yard="10"></span>
  <span class="yard"></span>
  <span class="endzone"></span>
</div>



<!-- Form page -->
<!-- https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/How_to_structure_an_HTML_form -->



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



// // Querey Section
// $test_query = "SELECT * FROM instructor";
// $result = mysqli_query($conn, $test_query);

// $tuple_count = 0;
// while($row = mysqli_fetch_array($result)) {
//   $tuple_count++;
//   echo "<p> You have this instructor: $row[1] with ID $row[0]";
// }

// echo "<p> There are $tuple_count instructors";

?>
<!-- END OF PHP -->

</body>
</html>
