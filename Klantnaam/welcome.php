<?php 
require('db.php');

session_start(); 

$logged_username = $_SESSION['user']['username']; 
$group = $_SESSION['user']['group'];
$addiction = $_SESSION['user']['addiction'];
$age = $_SESSION['user']['age'];

?>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Relieve</title>
  <link rel="icon" href="" type="image/x-icon"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <section class="header">
    <div class="wrap">
      <div class="col-lg-12">
        <div class="relieve__logo">
          <img class="relieve__imglogo" src="img/relieve_logo.png" alt="relieve_logo">
        </div>
      </div>
    </div>
  </section>

  <section class="registration">
  <div class="registration__title">
    <h1>Welkom bij Relieve, <?php echo $logged_username; ?>!<h1>
    <h3><?php

    if ($group == 'a') {
      echo "Je hebt aangegeven in een groep geplaatst te willen worden met mensen die dezelfde verslaving hebben ongeacht wat hun leeftijd is.";
    } 
    // zelfde leeftijd, andere verslaving
    elseif ($group == 'b') {
      echo "Je hebt aangegeven in een groep geplaatst te willen worden met mensen die binnen jouw leeftijdscatagorie vallen met andere verslavingen. ";

      if  ($age < 25) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep waar de maximale leeftijd 30 jaar is.";
      }

      elseif ($age >= 25 && $age <= 30) {
        echo "Omdat je " . $age . " jaar bent, val je binnen twee groepen. De keuze is aan jou. Wil je geplaatst worden bij een groep waar de maximale leeftijd 30 jaar is, of wil je liever bij een groep waar de leeftijden tussen de 25 en 45 zijn?";

        echo '<br><br><form class="formcenter" action=""><input type="submit" value="Groep: maximaal 30 jaar"/></form>';
        echo '<form class="formcenter" action=""><input type="submit" value="Groep: tussen de 25 en 45 jaar"/></form>';

      }

      elseif ($age > 30 && $age < 40) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep waar de leeftijden tussen de 25 en 45 zijn.";
      }

      elseif ($age >= 40 && $age <= 45) {
        echo "Omdat je " . $age . " jaar bent, val je binnen twee groepen. De keuze is aan jou. Wil je geplaatst worden bij een groep waar de leeftijden tussen de 25 en 45 zijn, of wil je liever bij een groep waar de minimale leeftijd 40 is (geen maximale leeftijd)?";

        echo '<br><br><form class="formcenter" action=""><input type="submit" value="Groep: tussen de 25 en 45 jaar"/></form>';
        echo '<form class="formcenter" action=""><input type="submit" value="Groep: minimaal 40 jaar"/></form>';
      }

      elseif ($age > 45) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep waar de minimale leeftijd 40 is (geen maximale leeftijd)";
      }
    }
    // zelfde verslaving en zelfde leeftijd. 
    else {
      echo "Je hebt aangegeven in een groep geplaatst te willen worden met mensen die dezelfde verslaving hebben binnen jouw leeftijdscatagorie.";

      if  ($age < 25) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep met mensen die dezelfde verslaving hebben en waar de maximale leeftijd 30 jaar is.";
      }

      elseif ($age >= 25 && $age <= 30) {
        echo "Omdat je " . $age . " jaar bent, val je binnen twee groepen. De keuze is aan jou. Wil je geplaatst worden bij een groep waar de maximale leeftijd 30 jaar is (met mensen die dezelfde verslaving hebben), of wil je liever bij een groep waar de leeftijden tussen de 25 en 45 zijn (met mensen die dezelfde verslaving hebben )?";

        echo '<br><br><form class="formcenter" action=""><input type="submit" value="Groep: maximaal 30 jaar"/></form>';
        echo '<form class="formcenter" action=""><input type="submit" value="Groep: tussen de 25 en 45 jaar"/></form>';
      }

      elseif ($age > 30 && $age < 40) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep met mensen die dezelfde verslaving hebben en waar de leeftijden tussen de 25 en 45 zijn.";
      }

      elseif ($age >= 40 && $age <= 45) {
        echo "Omdat je " . $age . " jaar bent, val je binnen twee groepen. De keuze is aan jou. Wil je geplaatst worden bij een groep met mensen die dezelfde verslaving hebben en waar de leeftijden tussen de 25 en 45 zijn, of wil je liever bij een groep met mensen die dezelfde verslaving hebben en waar de minimale leeftijd 40 is (geen maximale leeftijd)?";

        echo '<br><br><form class="formcenter" action=""><input type="submit" value="Groep: tussen de 25 en 45 jaar"/></form>';
        echo '<form class="formcenter" action=""><input type="submit" value="Groep: minimaal 40 jaar"/></form>';
      }

      elseif ($age > 45) {
        echo "Omdat je " . $age . " jaar bent, wordt je geplaatst in een groep met mensen die dezelfde verslaving hebben en waar de minimale leeftijd 40 is (geen maximale leeftijd)";
      }
    }

    ?></h3>

    <form class="formcenter" action="logout.php">
      <input type="submit" value="Log uit"/> 
    </form>

  </div>

  <script src="js/main.min.js" type="text/javascript"></script>
</body>
</html>