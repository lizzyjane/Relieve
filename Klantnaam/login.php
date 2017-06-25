<?php
require('db.php');

if (!isset($_POST['submit'])){
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

    <div class="registration__title">
        <h1>Inloggen</h1>
    </div>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h2 class="registration__ask--required">Vul hier jouw gebruikersnaam in</h2>
        
        <div class="registration__input">
            <input class="input" type="text" name="username" required>
        </div>

        <h2 class="registration__ask--required">Vul hier jouw wachtwoord in</h2>
        <div class="registration__input">
            <input class="input" type="password" name="password" required>
        </div>

        <div class="registration__submit--login">
            <input type="submit" name="submit" value="Login" />
        </div>
        
    </form>

<?php
    } else {
        require_once("db.php");
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        # check connection
        if ($mysqli->connect_errno) {
            echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
            exit();
        }
     
        $username = $_POST['username'];
        $password = md5 ($_POST['password']);
     
        $sql = "SELECT * from relieve WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
        $result = $mysqli->query($sql);

        if (!$result->num_rows == 1) {
            // login unsuccessfull
            echo "<p>Invalid username/password combination</p>";
        } else {
            session_start(); 
            // logged in
            $_SESSION['user'] = $result->fetch_assoc();
            header( 'Location: welcome.php' );
        }

    }
?>      

    <script src="js/main.min.js" type="text/javascript"></script>
</body>
</html>