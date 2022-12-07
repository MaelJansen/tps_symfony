<h1>Calculatrice GET</h1>

<form method="GET">
    <input type="text" name="n1"/>
    +
    <input type="text" name="n2"/>
    <input type="submit" value="Calculer" />
<?php
if (isset($_GET['n1'])and isset($_GET['n2'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $res = $n1 + $n2;
    echo("<p>Reusltat = ".$res);

}else
echo("<p>Pas de nombre</p>");