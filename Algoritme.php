<?php

/**
  $db_username = "xgp298";
  $db_password = "123";
  $db = "oci:dbname=//localhost:1521/dbwc";
*/

$db_username = "dqc356";
$db_password = "dbx2014";
$db = "oci:dbname=//localhost:1521/dbwc";
  
try {
  $conn = new PDO($db,$db_username,$db_password);
} catch(Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$sql00 = "SELECT *
          FROM Brugere";

$sqlSpillere = "SELECT Navn, Strength
                FROM Brugere";

$spillerNavne=array();
$spillerStyrke=array();

foreach ($conn -> query ($sqlSpillere) as $col){
  $spillerNavne[]=$col[0];
  $spillerStyrke[]=$col[1];
}


function printSchema(){

  echo "
  <table border=\"1\" style=\"width:300px\">
  <tr>
  <th> Navn </th>
  <th> Email </th>
  <th> Kon </th>
  <th> Tlf </th>
  <th> Adresse </th>
  <th> Styrke </th>
  </tr>";
foreach ($conn -> query ($sql00) as $col){
  echo "
  <tr>
  <td>$col[0] </td>
  <td>$col[1] </td>
  <td>$col[2] </td>
  <td>$col[3] </td> 
  <td>$col[4] </td>
  <td>$col[5] </td>
  </tr>";
  }
echo "</table>";

}

  //function bestOfFour($playerOne, $playerTwo, $playerThree, $playerFour) {
function bestOfFour() {
    //FUNKTIONJ
    //Jacob Jacob_Andersen9@hotmail.com m 26270810  Spindestr?de 22 2
    //Tobias  Tobias@hotmail.com  m 23410412  Gangstatawn 42  3
    //Emil  Emil@hotmail.com  m 23410412  Gangstatawn 42  1
    //Sylvester Syl@hotmail.com m 23410412  Gangstatawn 42  4

  echo"$spillerNavne[0]";


  $playerOneName = $spillerNavne[0];
  $playerTwoName = $spillerNavne[1];
  $playerThreeName = $spillerNavne[2];
  $playerFourName = $spillerNavne[3];

  $playerOneStrength = $spillerStyrke[0];
  $playerTwoStrength = $spillerStyrke[1];
  $playerThreeStrength = $spillerStyrke[2];
  $playerFourStrength = $spillerStyrke[3];

  $oneVsTwo   = abs($playerOneStrength-$playerTwoStrength) + abs($playerThreeStrength-$playerFourStrength);
  $oneVsThree = abs($playerOneStrength-$playerThreeStrength) + abs($playerTwoStrength-$playerFourStrength);
  $oneVsFour  = abs($playerOneStrength-$playerFourStrength) + abs($playerTwoStrength-$playerThreeStrength);

  if($oneVsTwo <= $oneVsThree && $oneVsTwo <= $oneVsFour){
  echo"<td> $playerOneName [$playerOneStrength] vs $playerTwoName [$playerTwoStrength]</td>
       <td> $playerThreeName [$playerThreeStrength] vs $playerFourName [$playerFourStrength]</td>";
  }
  if($oneVsThree <= $oneVsTwo && $oneVsThree <= $oneVsFour){
  echo"<td> $playerOneName [$playerOneStrength] vs $playerThreeName [$playerThreeStrength]</td>
       <td> $playerTwoName [$playerTwoStrength] vs $playerFourName [$playerFourStrength]</td>";
  }
  if($oneVsFour <= $oneVsTwo && $oneVsFour <= $oneVsThree){
  echo"<td> $playerOneName [$playerOneStrength] vs $playerFourName [$playerFourStrength]</td></td>
       <td> $playerTwoName [$playerTwoStrength] vs $playerThreeName [$playerThreeStrength]";
  }
}

bestOfFour();

?>
