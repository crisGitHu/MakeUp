<?php

    $database = new PDO('sqlite:Database/MakeUp.db3');
    $statement = $database->query("SELECT * FROM sombras");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($rows);

?>