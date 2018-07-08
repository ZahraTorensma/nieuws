<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Process Afmelden</h1>
<p>joe doeii</p>
<h4><a href="index.html">Terug naar home</a></h4>
<br>

<?php

//$mail = $_POST['mail'];
$mail = mysqli_real_escape_string($dbc, trim($_POST['mail']));

$dbc = mysqli_connect('localhost','root','root','23519_bap_nieuwsbrief') or die('Error connecting to MySQL server.');
$query = "DELETE FROM nieuwsbrief WHERE mail='$mail'";
$result = mysqli_query($dbc, $query) or die('Error querying database.');
mysqli_close($dbc);

?>

</body>
</html>