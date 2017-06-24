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
  if( isset($_POST["addictiondate"]) && $_POST["addictiondate"] != "") {
    $addictiondate = $_POST["addictiondate"];
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


      $sql = "INSERT INTO `relieve` (`username`, `password`, `age`, `addiction`, `addictiondate`, `group`) 
      VALUES ('$username', '$password', '$age', '$addiction', '$addictiondate', '$group');";

      if ($conn->query($sql) === TRUE) {
        echo "U bent geregistreerd! U kunt" . <a href="login.php">hier</a> .  "inloggen";
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

	$conn->close();
	}

	echo "Welkom bij Relieve, " . "" . $username . "" . "!" ;
	 
	 if ($group == 'a') {
	 	echo "je zit in group A";
	 } 
	 elseif ($group == 'b') {
	 	echo "Je zit in group B";
	 }
	 else {
	 	echo "Je zit in group C";
	 }

	 
	 // zelfde verslaving
	 if ($group == 'a') {
	 	echo "je zit in group A";
	 } 

	 // zelfde leeftijd
	 elseif ($group == 'b') {
	 	
	 	if ($age <= 30) {
	 		echo "leeftijd onder 25.";
	 	}

	 	elseif ($age >= 25 && $age <= 45) {
	 		echo "leeftijd tussen 25 en 45";
	 	}

	 	elseif ($age >= 40) {
	 		echo "leeftijd boven 40";
	 	}
	 }

	 // verslaving en leeftijd
	 else {
	 	echo "Je zit in group C";
	 }

?>