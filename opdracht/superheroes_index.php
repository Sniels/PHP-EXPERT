<?php

require 'database.php';
require 'menu.php';

$sql = "SELECT * FROM superheroes";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'header.php'; ?>

<body>
    <div class="container">
        <h4 class="display-4">Superheroes</h4>
        <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($database_gegevens as $hero) : ?>
                    <tr>
                        <td><?php echo $hero['ID'] ?></td>
                        <td><?php echo $hero['Title'] ?></td>
                        <td><?php echo $hero['Alignment'] ?></td>
                        <td>
                            <a href="superheroes_show.php?id=<?php echo $hero['ID'] ?>">Show</a>
                        </td>
                        <td>
                            <a href="superheroes_edit.php?id=<?php echo $hero['ID'] ?>">Edit</a>
                        </td>
                        <td>
                            <a href="superheroes_delete.php?id=<?php echo $hero['ID'] ?>">Delete</a>
                        </td>
                    </tr>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>