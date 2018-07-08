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
<h1>Process Delete</h1>
<h4><a href="index.html">Terug naar home</a></h4>

<?php

$id = $_POST['id'];
//$voornaam = $_POST['voornaam'];
$voornaam = mysqli_real_escape_string($dbc, trim($_POST['voornaam']));
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mail = $_POST['mail'];


$dbc = mysqli_connect('localhost','root','root','23519_bap_nieuwsbrief') or die('Error connecting to MySQL server.');
$query = "DELETE FROM nieuwsbrief";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

echo 'Het is gedelete. Doei.';
mysqli_close($dbc);

?>



</form>
</body>
</html>