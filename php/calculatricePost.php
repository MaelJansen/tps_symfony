<h1>Calculatrice</h1>

<form method="post">
    <input type="text" name="n1"/>
    +
    <input type="text" name="n2"/>
    <input type="submit" value="Calculer" />
</form>

<?php
    $res = 0;
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $res = $n1 + $n2;
    echo("<p>Resultat = ".$res."</p>");
?>