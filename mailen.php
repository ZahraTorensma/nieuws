<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mailen</title>
</head>
<body>
<h1>Mailen</h1>
<h4><a href="index.html">Terug naar home</a></h4>
<br>

<div id="wrapper">
<form method="post" action="process_mailen.php">
    <p>Bericht: </p>
    <textarea rows="20" cols="50" name="message">Vul hier je bericht in.</textarea>
    <p>Onderwerp: </p>
    <input class="maill" type="text" name="subject"/>
<br>
    <p>Wachtwoord: </p>
    <input class="maill" type="password" name="password"/>
<br>
<br>
    <input class="maill" type="submit" name="submit" value="mailen"/>

</form>
</div>

</body>
</html>