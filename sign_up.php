<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sign up page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

try {
$DB = new PDO('oci:dbname=//localhost:1521/dbwc', xgp298, 123);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}


// SQL statement to insert users

$sql = "INSERT INTO USERS (Name, Sex, Email, Phone, Address, Lvl, pwd) 
        VALUES ('firstname' 'lastname','Male','username', 'Phone', 'Address', 'Lvl', 'pwd')";

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


<!-- Form begins-->

<form action="sign_up.php" method="post">

<!-- Header -->
    <div class="top_part">
      <a href="front_page.php"><img src="http://img.diytrade.com/cdimg/1910604/26033303/0/1337848169/12pcs_Shuttlecocks_Badminton_Sports_Training_Tournament.jpg" alt="logo"/></a> </br>
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

<!-- First box -->
<div id = "firstTable">
<fieldset>
    <legend>Personlig Info</legend>
    <table cellpadding="3">
      <tr><td width="150px"><input type ="radio" class="radio" name ="Sex" value="Woman">Kvinde<br>
      <input type ="radio" name ="Sex" value="Man">Mand
      <tr><td><strong>Email*:</strong></td><td><input type="text" name="username"></td></tr>
      <tr><td><strong>Fornavn*:</strong></td><td><input type="text" name="firstname"></td></tr>
      <tr><td><strong>Efternavn*:</strong></td><td><input type="text" name="lastname"></td></tr>
      <tr><td><strong>Kodeord*:</strong></td><td><input type="password" name="pwd"></td></tr>
      <tr><td><strong>Bekræft kodeord*:</strong></td><td><input type="password" name="confirmPwd"></td></tr>
    </table>
</fieldset>

<!-- Second box -->
<fieldset>
    <legend>Yderligere info</legend>
    <table cellpadding="3">
        <tr><td width="150px"><strong>Telefon Nummer:</strong></td><td><input type="text" name="phonenumber"></td></tr>
        <tr><td><strong>Gadenavn:</strong></td><td><input type="text" name="streetname"></td></tr>
        <tr><td><strong>Nummer:</strong></td><td><input type="text" name="streetnumber"></td></tr>
        <tr><td><strong>Etage:</strong></td><td><input type="text" name="floor"></td></tr>
        <tr><td><strong>By:</strong></td><td><input type="text" name="cityname"></td></tr>
        <tr><td><strong>Postnummer:</strong></td><td><input type="text" name="zipcode"></td></tr>
    </table>
    </fieldset>

<!-- Terms and Conditions -->
<fieldset style="text-align: center">
    <legend>Vilkår & betingelser</legend>

    <textarea disabled cols="50" rows="5" class="lock">Du en nub</textarea>
    <br/>
    Jeg er enig i vilkår & betingelser <input type="checkbox" name="agreeWithTerms" value="Y">
    <br/><br/>
    
    <!-- Error catching -->
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

    <!-- Submit button -->
    <input type="submit" value="Registrer">

    <!-- Redirection -->
    <input type="hidden" name="errorUrl" value="sign_up.php?ID=error">
    <input type="hidden" name="successUrl" value="front_page.php?ID=Name.Email">

</form>
</body>
</html>