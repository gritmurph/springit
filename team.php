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
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
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
    <h1>Team Name</h1>
</header>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="#">About</a>
  <a href="#">Link</a>
  <a href="#" style="float:right">Link</a>
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
