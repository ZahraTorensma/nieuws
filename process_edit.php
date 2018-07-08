1<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Edit</title>
</head>
<body>
<h1>Process Edit</h1>
<h4><a href="index.html">Terug naar home</a></h4>

<?php

    $id = $_POST['id'];
    //$voornaam = $_POST['voornaam'];
    $voornaam = mysqli_real_escape_string($dbc, trim($_POST['voornaam']));
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mail = $_POST['mail'];

?>
<form method="post" action="process_edit2.php">
    <input type="hidden" name="id" value="<?php echo $id;?>"/>

    <p>Voornaam: </p>
    <input type="text" name="voornaam" value="<?php echo $voornaam;?>"/>
    <br>
    <p>Tussenvoegsel: </p>
    <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel;?>"/>
    <br>
    <p>Achternaam: </p>
    <input type="text" name="achternaam" value="<?php echo $achternaam;?>"/>
    <br>
    <p>Mail: </p>
    <input type="text" name="mail" value="<?php echo $mail;?>"/>
    <br>
    <input type="submit" name="submit" value="submit"/>


</form>
</body>
</html>