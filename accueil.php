<h1>Page d'acceuil</h1>

<?php
    $annee = date('Y');
    $mois =  date('F');
?>

<p>Les TDs<p>
<li>
    <a href="multiplication.php">Multiplication</a>
</li>
<li>
    <a href="calculatriceGet.php">Calculatrice formulaire GET</a>
</li>
<li>
    <a href="calculatricePost.php">Calculatrice formulaire POST</a>
</li>
<li>
    <a href=<?php echo("calendrier.php?annee=".$annee."&mois=".$mois); ?>>calendrier</a>
</li>