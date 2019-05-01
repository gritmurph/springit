<!DOCTYPE html>
<html>
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
<p>

This website shows you how a certain NFL team did in a chosen game situation. For example, you can check 
whether the Cincinnati Bengals got more yards running the ball or passing the ball on 2nd and 10 from their 
own 30 yardline in the 2nd quarter. 
<br>
<br>
Statistics displayed given a team and a situation:
<br>
<br>
Shows whether a run or a pass gained the most yards, and how many yards that was.
<br>
Shows whether a run or a pass gained the least yards, and how many yards that was.
Shows the average number of yards on a run.
<br>
Shows the average number of yards on a pass.
<br>
Shows the average number of yards in that situation.
  

</p>

</body>
</html>
