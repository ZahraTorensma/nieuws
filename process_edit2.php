<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Edit 2</title>
</head>
<body>
<h1>Process Edit2</h1>
<h4><a href="index.html">Terug naar home</a></h4>

<?php

    $id = $_POST['id'];
   // $voornaam = $_POST['voornaam'];
    $voornaam = mysqli_real_escape_string($dbc, trim($_POST['voornaam']));
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mail = $_POST['mail'];


$dbc = mysqli_connect('XXX') or die('Error connecting to MySQL server.');
    $query = "UPDATE newz
              SET voornaam='$voornaam',tussenvoegsel='$tussenvoegsel',achternaam='$achternaam',mail='$mail'
              WHERE id='$id'";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    mysqli_close($dbc);

    echo 'Het is gelukt of niet.';

?>

</body>
</html>
