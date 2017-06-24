<?php
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
  <link rel="stylesheet" href="hint.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Inloggen</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h2 class="registration__ask--required">Vul hier jouw gebruikersnaam in</h2>
        
        <div class="registration__input">
            <input class="input" type="text" name="username" required>
        </div>

        <h2 class="registration__ask--required">Vul hier jouw wachtwoord in</h2>
        <div class="registration__input">
            <input class="input" type="password" name="password" required>
        </div>

        <div class="registration__submit">
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
            echo "<p>Invalid username/password combination</p>";
        } else {
            echo "Hoppa, je bent ingelogd!";
            // redirect to: header('location:index.php');
        }
    }
?>      

    <script src="js/main.min.js" type="text/javascript"></script>
</body>
</html>