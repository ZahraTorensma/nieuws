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
<h1>Process Mailen</h1>
<h4><a href="index.html">Terug naar home</a></h4>
<br>

<?php



    $password = $_POST['password'];

    //$subject =$_POST['subject'];
    $subject = mysqli_real_escape_string($dbc, trim($_POST['subject']));
    $message =$_POST['message'];

    if ($password=='XXX(niet mn echte natuurlijk'){


        $dbc = mysqli_connect('XXX') or die('Error connecting to MySQL server.');
        $query = "SELECT * FROM newz";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');

        while($row = mysqli_fetch_array($result)){
            $mail = $row['mail'];

            $to = $mail;
            $from =  'XXX';

            mail($to,$subject,$message,'From: ' . $from) or die('Error mailing.');
            echo 'gemaild naar ' . $to . '; ';
        }

    } else{
        echo 'het wachtwoord is niet goed';
    }

?>
</body>
</html>
