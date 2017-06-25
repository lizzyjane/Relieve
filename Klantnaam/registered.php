<?php 
require_once('db.php');

//registration
if (!empty($_POST["submit"])) {

  // array all addictions
  $addictions = array();
  if( isset($_POST["addictionAlcohol"]) && $_POST["addictionAlcohol"] != "") {
    array_push($addictions, $_POST["addictionAlcohol"]);
  }
  if( isset($_POST["addictionSD"]) && $_POST["addictionSD"] != "") {
    array_push($addictions, $_POST["addictionSD"]);
  }
  if( isset($_POST["addictionHD"]) && $_POST["addictionHD"] != "") {
    array_push($addictions, $_POST["addictionHD"]);
  }
  if( isset($_POST["addictionGaming"]) && $_POST["addictionGaming"] != "") {
    array_push($addictions, $_POST["addictionGaming"]);
  }
  if( isset($_POST["addictionMedication"]) && $_POST["addictionMedication"] != "") {
    array_push($addictions, $_POST["addictionMedication"]);
  }
  if( isset($_POST["addictionSmoking"]) && $_POST["addictionSmoking"] != "") {
    array_push($addictions, $_POST["addictionSmoking"]);
  }
  if( isset($_POST["addictionOther"]) && $_POST["addictionOther"] != "") {
    array_push($addictions, $_POST["addictionOther"]);
  }

  // converting array to string
  $addiction = join(',', $addictions);

  //username, password, age, addictiondate, group
  if( isset($_POST["username"]) && $_POST["username"] != "") {
    $username = $_POST["username"];
  }
  if( isset($_POST["password"]) && $_POST["password"] != "") {
    $password = $_POST["password"];
  }
  if( isset($_POST["age"]) && $_POST["age"] != "") {
    $age = $_POST["age"];
  }
  if( isset($_POST["group"]) && $_POST["group"] != "") {
    $group = $_POST["group"];
  }

  $password = md5($password);


  $required = [$username, $password, $age, $addiction, $group];

  foreach($required as $req) {
      if (empty($req)) {
        echo "data:" . $req;
        $message = "U heeft niet alle gegevens ingevuld.";
        $valid = false; 
      }
    }

      $sql = "INSERT INTO `relieve` (`username`, `password`, `age`, `addiction`, `group`) 
      VALUES ('$username', '$password', '$age', '$addiction', '$group');";

      if ($conn->query($sql) === TRUE) {
        echo '<h2 class="registration__ask">U bent geregistreerd! U kunt nu inloggen</h2>';
        echo '<form class="formcenter" action="login.php"><input type="submit" value="Inloggen"/></form>';
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

	$conn->close();
	}

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
</body>
</html>