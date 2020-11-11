<?php
    echo $_GET['id'];
        $id = $_GET['id'];
        require 'database.php';

        $sql = "DELETE FROM superheroes WHERE id = :ph_id";
        $stmt = $db_conn->prepare($sql);
        $stmt->bindParam(":ph_id", $id );

        $stmt->execute();
        header('location:superheroes_index.php');
