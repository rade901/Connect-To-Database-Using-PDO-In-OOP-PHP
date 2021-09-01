<?php
require 'dbc.php';
$sql = 'SELECT * FROM records';
$statment = $connection->prepare($sql);
$statment->execute();
$records = $statment->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning-PDO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Ime</th>
            <th>Prezime</th>
        </tr>
        <?php foreach($records as $record):?>
        <tr>
            <td><?= $record->Korisnik_ID;?></td>
            <td><?= $record->Korisnik_Ime;?></td>
            <td><?= $record->Korisnik_prezime;?></td>
        </tr>
        <?php endforeach;?>
    </table>

</body>

</html>