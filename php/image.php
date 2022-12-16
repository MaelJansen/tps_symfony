<?php
    $dsn = "mysql:dbname=etu_majansen;host=info-titania";
    $user = "majansen";
    $password = "fmm3fKRZ";
    $pdo = new PDO($dsn, $user, $password);

    $p = $_GET["id"];
    $sql = "SELECT poster FROM series WHERE id=$p";
    $query = $pdo->prepare($sql);
    $query->execute();
    $poster = $query->fetch();
    header('Content-Type: image/png');
    echo $poster[0];
?>