<?php 
require_once('db.php');
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
    <h1>Registratie<h1>
  </div>

  <form method="POST" action="registered.php">
    <h2 class="registration__ask--required">Wat wil je als gebruikersnaam?</h2>
  <div class="registration__input">
    <input class="input" type="text" name="username" required>
  </div>

   <h2 class="registration__ask--required">Wat wil je als wachtwoord?</h2>
  <div class="registration__input">
    <input class="input" type="password" name="password" required>
  </div>

  <h2 class="registration__ask--required">Hoe oud ben je?</h2>
  <div class="registration__input">
    <input class="input" type="text" name="age" required>
  </div>

  <h2 class="registration__ask--required">Waar ben je verslaafd aan?</h2>

  <div class="checkbox registration__input--addiction row">
    <div class="col-xs-6 col-sm-6 col-lg-3"> 
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionAlcohol" value="alcohol"/>Alcohol</option>
      </label>
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionSD" value="softdrugs">(soft)Drugs</option>
      </label>
    </div>

    <div class="col-xs-6 col-sm-6 col-lg-3">  
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionHD" value="harddrugs">(hard)Drugs</option>
      </label>
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionGaming" value="game">Gamen</option>
      </label>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-lg-3">
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionMedication" value="medicine">Medicijnen</option>
      </label>
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionSmoking" value="smoke">Roken</option>
      </label>
    </div>

    <div class="col-xs-6 col-sm-6 col-lg-3">
      <label class="label">
        <input type="checkbox" class="option-input checkbox" name="addictionOther" value="other">Anders</option>
      </label>
    </div>
  </div>

  <div class="registration__title">
    <h3>Groepsindeling</h3>
  </div>

  <div class="checkbox registration__radio row">

    <div class="registration__radiogroup col-xs-12 col-sm-12 col-lg-4">
      <img class="group_a" src="img/relieve1.png">
      <label class="label2">
        Ik kan het beste praten met mensen met dezelfde verslaving ongeacht wat hun leeftijd is.
        <br> <input type="radio" class="option-input radio" name="group" value="a" required/>
      </label>
    </div>

    <div class="registration__radiogroup col-xs-12 col-sm-12 col-lg-4">
      <img class="group_b" src="img/relieve2.png">
      <label class="label2">
        Ik kan het beste praten met mensen met dezelfde leeftijd ongeacht wat hun verslaving is.
        <br> <input type="radio" class="option-input radio" name="group" value="b"/>
      </label>
    </div>

    <div class="registration__radiogroup col-xs-12 col-sm-12 col-lg-4">
      <img class="group_c" src="img/relieve3.png">
      <label class="label2">
        Ik kan het beste praten met mensen met dezelfde verslaving binnen mijn leeftijdscatagorie.
        <br> <input type="radio" class="option-input radio" name="group" value="c"/>
      </label>
    </div>
  </div>


  <div class="registration__submit">
    <input class="submit" type="submit" value="Ga verder" name="submit" id="submit">
  </div>
  </form>

  
  </section>

  <script src="js/main.min.js" type="text/javascript"></script>
</body>

</html>

