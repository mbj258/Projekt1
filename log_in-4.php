<!DOCTYPE html>

<html>
<head>
<meta charset = "utf-8"/>
  <title>Log in page</title>
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


<!-- Sign up button-->

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

<form action="log_in.php" method="post">

<!-- Header -->
    <div class="top_part">
      <a href="front_page.php"><img src="http://img.diytrade.com/cdimg/1910604/26033303/0/1337848169/12pcs_Shuttlecocks_Badminton_Sports_Training_Tournament.jpg" alt="logo" /></a> </br>
      <h1> Badminton Projekt</h1>
    </div>




<!-- Navbar -->

<div id="navbar">
        <ul>
            <li><a href="front_page.php">Hjem</li></a>
            <li>Profil</li>
            <li>Grupper</li>
            <li>Events</li>
            <li>Billeder</li>
        </ul>
    </div>
<br>

<!-- Log in box -->
<fieldset>
    <legend>Personlig Info</legend>
    <table cellpadding="3">
      <tr><td><strong>Brugernavn (email)</strong></td><td><input type="text" name="username"></td></tr>
      <tr><td><strong>Kodeord</strong></td><td><input type="password" name="pwd"></td></tr>
    </table>
    </fieldset>
    


    <!-- Error handling -->
    <?php
      if(array_key_exists('cumulativeErrorMessage', $_POST) && $_POST['cumulativeErrorMessage'] != '') {
    ?>
    <fieldset style="color: #ff0000;">
        <legend>There were errors</legend>
        <?php echo $_POST['cumulativeErrorMessage']?>
    </fieldset>
    <?php
      }
    ?>
    <br/>
    <!-- Log in button-->
    <input type="submit" value="Log in">

    <!-- Redirection -->
    <input type="hidden" name="errorUrl" value="log_in.php">
    <input type="hidden" name="successUrl" value="front_page.php">

</form>
</body>
</html>