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

  <?php

  //define variables and set to empty values
  $name = $email = $gender = $pass1 = $pass2 = "";
  $nameErr = $emailErr = $genderErr = $pass1Err = $pass2Err = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
      $nameErr = "Navn skal indtastes";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email skal indtastes";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Køn skal angives";
    } else {
      $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["pass1"])) {
      $pass1Err = "Angiv venligst et kodeord";
    } else {
      $pass1 = test_input($_POST["pass1"]);
    }

    if (empty($_POST["pass2"])) {
      $pass2Err = "Bekræft venligst kodeord";
    } else {
      $pass2 = test_input($_POST["pass2"]);
    }
    
    if ($pass1 != $pass2) {
      $passErr = "Kodeord matcher ikke";
    } else {

    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

<!-- Form begins-->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<!-- First box -->
<div id = "firstTable">
<fieldset>
    <legend>Personlig Info</legend>
    <table cellpadding="3">
      <tr><td><strong>Navn:</strong></td><td><input type="text" name="name" value=<?php echo $name;?>></td><td><span class="error">* <?php echo $nameErr;?></span>
</td></tr>
      <tr><td><strong>Email:</strong></td><td><input type="text" name="email" value=<?php echo $email;?>></td><td><span class="error">* <?php echo $emailErr;?></span>
</td></tr>
      <tr><td width="150px"><input type ="radio" class="radio" name ="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Kvinde
                            <input type ="radio" class="radio" name ="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Mand</td><td><span class="error">* <?php echo $genderErr;?></span>
</td></tr>
      <tr><td><strong>Kodeord:</strong></td><td><input type="password" name="pass1" value=<?php echo $pass1;?>></td><td><span class="error">* <?php echo $pass1Err;?></span>
</td></tr>
      <tr><td><strong>Bekræft kodeord:</strong></td><td><input type="password" name="pass2" value=<?php echo $pass2;?>></td><td><span class="error">* <?php echo $pass2Err;?></span>
</td></tr>
      <tr><td><span class="error"><?php echo $passErr;?></span></td></tr>
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

    <textarea disabled cols="50" rows="5" class="lock">Vilkår her</textarea>
    <br/>
    Jeg er enig i vilkår & betingelser <input type="checkbox" name="agreeWithTerms" value="Y">
    <br/><br/>
</fieldset>

    <!-- Submit button -->
<<<<<<< HEAD
<<<<<<< HEAD:sign_up-1.php
    <input type="submit" value="Registrer">
</form>
=======
    <input type="submit" name ="Registrer" value="Registrer">
>>>>>>> e847cad373c337b52992edd15a1b6ba82780b25a:sign_up.php

=======
    <input type="submit" name ="Registrer" value="Registrer">
>>>>>>> e847cad373c337b52992edd15a1b6ba82780b25a

<<<<<<< HEAD:sign_up-1.php
</div></form></li></ul></div>
=======

<<<<<<< HEAD
=======

>>>>>>> e847cad373c337b52992edd15a1b6ba82780b25a
<?php
$sex = $_POST['Sex'];
$username = $_POST['username'];
$firstname = $_POST['username'];
$lastname = $_POST['username'];
$pwd = $_POST['username'];
$confirmPwd = $_POST['username'];


if ($_POST['Registrer']) {
if (isset($_POST['agreeWithTerms'])) {
	if (isset($sex)) {
		if (isset($username)){
			if (isset($firstname)){
				if (isset($lastname)){
					if (isset($pwd)){
						if (isset($confirmPwd)){
	try {
		$DB->beginTransaction();
		$DB->exec("INSERT INTO USERS (Name, Password, Sex, Email, Phone, Address, Lvl) 
				   VALUES ('$firstname $lastname', '$pwd', '$sex','$username', '$phonenumber', '$Address', '$lvl'");
		$DB->commit();
		echo "Velkommen i klubben!";
		} catch(Exception $e) {
          echo $e->getMessage();
          $DB->rollback();
		}
	}
	else {echo "Husk Bekræftning af kodeord!";}
	}
	else {echo "Husk kodeord!";}
	}
	else {echo "Husk Efternavn!";}
	}
	else {echo "Husk Fornavn!";}
	}
	else {echo "Husk Email!";}
	}
	else {echo "Er du mand eller kvinde?";}
	}
	else {echo "Husk at erklære dig enig i vilkår og betingelser";}
}

?>
</form>




<<<<<<< HEAD
>>>>>>> e847cad373c337b52992edd15a1b6ba82780b25a:sign_up.php
=======
>>>>>>> e847cad373c337b52992edd15a1b6ba82780b25a
</body>
</html>