<?php
$_GET['id'];
$id = $_GET['id'];
require 'database.php';

$sql = "SELECT * FROM superheroes WHERE id = $id";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div class='container'>
    <h4 class="display-4">Superheroes</h4>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Alignment</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Identity</th>
                <th>Citizenship</th>
                <th>Occupation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($database_gegevens as $superheroes) : ?>
                <tr>
                    <td> <?php echo $superheroes['ID'] ?> </td>
                    <td> <?php echo $superheroes['Title'] ?> </td>
                    <td> <?php echo $superheroes['Alignment'] ?> </td>
                    <td> <?php echo $superheroes['Gender'] ?> </td>
                    <td> <?php echo  $superheroes['Height'] ?> </td>
                    <td> <?php echo $superheroes['Weight'] ?> </td>
                    <td> <?php echo $superheroes['Identity'] ?> </td>
                    <td> <?php echo $superheroes['Citizenship'] ?> </td>
                    <td> <?php echo $superheroes['Occupation'] ?> </td>
                    <td>

                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
</body>

</html>