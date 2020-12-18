<?php

require 'database.php';

$sql = "SELECT * FROM phpexpert";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($database_gegevens);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
<div class='container'>
<table class='table'>
    <thead>
        <tr>
            <th>id</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($database_gegevens as $phpexpert): ?>
            <tr>
                <td><?php echo $phpexpert['id']?></td>
                
                
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</body>
</html>
