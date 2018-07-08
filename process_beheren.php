<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process</title>
</head>
<body>
<h1>Process Beheren</h1>
<h4><a href="index.html">Terug naar home</a></h4>
<br>

<?php

    $password = $_POST['password'];

    if ($password=='23519!'){

        $dbc = mysqli_connect('localhost','root','root','23519_bap_nieuwsbrief') or die('Error connecting to MySQL server.');
        $query = "SELECT * FROM nieuwsbrief";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');

        echo'<table>';
        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
           // $voornaam = $row['voornaam'];
            $voornaam = mysqli_real_escape_string($dbc, trim($_POST['voornaam']));
            $tussenvoegsel = $row['tussenvoegsel'];
            $achternaam = $row['achternaam'];
            $mail = $row['mail'];

            echo'<tr>';
                echo'<td>' . $row['id'] . '</td>';
                echo'<td>' . $row['voornaam'] . '</td>';
                echo'<td>' . $row['tussenvoegsel'] . '</td>';
                echo'<td>' . $row['achternaam'] . '</td>';
                echo'<td>' . $row['mail'] . '</td>';


            echo'<td>';
                echo '<form method="post" action="process_edit.php">';
                    echo '<input type="hidden" name="id" value="' . $id . '"/> ';
                    echo '<input type="hidden" name="voornaam" value="' . $voornaam . '"/> ';
                    echo '<input type="hidden" name="tussenvoegsel" value="' . $tussenvoegsel . '"/> ';
                    echo '<input type="hidden" name="achternaam" value="' . $achternaam . '"/> ';
                    echo '<input type="hidden" name="mail" value="' . $mail . '"/> ';

            echo '<input type="submit" name="submit" value="edit"/>';
                echo '</form>';
            echo'</td>';

            echo'<td>';
            echo '<form method="post" action="process_delete.php">';
            echo '<input type="hidden" name="id" value="' . $id . '"/> ';
            echo '<input type="hidden" name="voornaam" value="' . $voornaam . '"/> ';
            echo '<input type="hidden" name="tussenvoegsel" value="' . $tussenvoegsel . '"/> ';
            echo '<input type="hidden" name="achternaam" value="' . $achternaam . '"/> ';
            echo '<input type="hidden" name="mail" value="' . $mail . '"/> ';
            echo '<input type="submit" name="submit" value="delete"/>';
            echo '</form>';
            echo'</td>';

            echo'</tr>';

        }

        echo'</table>';

        mysqli_close($dbc);


    } else{
        echo 'het wachtwoord is niet goed';

    }

?>

</body>
</html>