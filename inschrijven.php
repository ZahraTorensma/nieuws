<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inschrijven</title>
</head>
<body>
<div id="wrapper">
    <h1>Inschrijven</h1>
    <h4><a href="index.html">Terug naar home</a></h4>
    <br>
    <form method="post" action="process_inschrijven.php">
        <table>
            <tr>
                <td>Voornaam: *</td>
                <td>
                    <input type="text" name="voornaam" required/>
                </td>
            </tr>
            <tr>
                <td>Tussenvoegsel: </td>
                <td>
                    <input type="text" name="tussenvoegsel"/>
                </td>
            </tr>
            <tr>
                <td>Achternaam: *</td>
                <td>
                    <input type="text" name="achternaam" required/>
                </td>
            </tr>
            <tr>
                <td>E-mail: *</td>
                <td>
                    <input type="email" name="mail" required/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Inschrijven"/>
                </td>
            </tr>

        </table>

    </form>
</div>
</body>
</html>