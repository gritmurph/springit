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
    <p>See how successful each NFL team was in a particular game situtation!</p>
</div>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
</div>

</body>
</html>

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