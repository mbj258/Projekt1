<!DOCTYPE html>

<html>

<head>
<meta charset = "utf-8">
  <title>Front page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

try {
$DB = new PDO('oci:dbname=//localhost:1521/dbwc', xgp298, 123);

} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
}
?>


<!-- Sign up button -->

<div style='float: right;'>
  <form action="sign_up.php">
    <a href="sign_up.php"> <input type="submit" value="Registrer"> </a>
  </form>
</div>

<!-- Log in button -->

<div style='float: right;'>
  <form action="log_in.php">
    <a href="log_in.php"> <input type="submit" value="Log ind"> </a>
  </form>
</div>


<!-- Header -->

    <div class="top_part">
      <a href="badminventon.php" style="text-decoration:none"><img src="http://img.diytrade.com/cdimg/1910604/26033303/0/1337848169/12pcs_Shuttlecocks_Badminton_Sports_Training_Tournament.jpg" alt="logo" /></a> </br>
      <h1> Badminton Projekt </h1>
    </div>


<!-- Navbar -->

<div id="navbar">
        <ul>
            <li><a href="badminventon.php">Hjem</li></a>
            <li>Profil</li>
            <li>Grupper</li>
            <li>Events</li>
            <li>Billeder</li>
        </ul>
    </div>
<br>





<!-- HTML for SEARCH BAR -->
    <div id="tfheader">
        <form id="tfnewsearch" method="get" action="http://www.google.com">
                <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
        </form>
    <div class="tfclear"></div>
    </div>



</body>


</meta charset>

</html>
