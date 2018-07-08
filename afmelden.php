<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afmelden</title>
</head>
<body>

<div id="wrapper">
    <h1>Afmelden</h1>
    <h4><a href="index.html">Terug naar home</a></h4>
<br>
    <form method="post" action="process_afmelden.php">
        <table>
            <tr>
                <td>E-mailadres: </td>
                <td>
                    <input type="email" name="mail" required/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Afmelden"/>
                </td>
            </tr>
</div>
</body>
</html>