<?php
    echo "<a href=\"index.html\">Acceuil</a>";

    if (isset($_GET['l'])){
        $n1 = $_GET['l'];
        $dsn = "mysql:dbname=etu_majansen;host=info-titania";
        $user = 'majansen';
        $password = 'fmm3fKRZ';
        $pdo = new PDO($dsn, $user, $password);

        echo("<H1></H1>");
        echo("<H3>Tout les titres de series commençants par la lettre ".$n1." :</H3>");

        $sql = "SELECT title, id FROM series WHERE title LIKE '".$n1."%'";
        $query = $pdo->query($sql);
        foreach ($query as $row){
            echo 'Nom : '.$row['title']."\n";
            echo '<img src="image.php?id='.$row['id'].'">';
            echo "</br>";
        }
        echo"</br>";
        echo"<a href='index.php'>retour</a>";
    } else {
        echo"<H1>Base de données des series</H1>";
        echo"<form method='GET'>";
        echo"<label for='l'>Entrer la première lettre de votre serie</label>";
        echo"<input type='text' name='l'>";
        echo"<input type='submit' value='Ok'>";
        echo"</form>";
    }
?>