<?php
    echo "<a href=\"index.html\">Acceuil</a>";

    $dsn = "mysql:dbname=etu_majansen;host=info-titania";
    $user = 'majansen';
    $password = 'fmm3fKRZ';
    $pdo = new PDO($dsn, $user, $password);

    echo("<H1>Base de données</H1>");

    echo("<H1></H1>");
    echo("<H3>Tout les titres de series commençants par la lettre l :</H3>");

    $sql = "SELECT title FROM series WHERE title LIKE 'L%'";
    $query = $pdo->query($sql);
    foreach ($query as $row){
        echo 'Nom : '.$row['title']."\n";
        echo "</br>";
    }
?>