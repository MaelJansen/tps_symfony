<h1>calendrier</h1>

<?php
    $annee = $_GET['annee'];
    $mois =  $_GET['mois'];
?>

<tr>
    <th>
    <a <?php $annee+=1;?> href=<?php echo("calendrier.php?annee=".$annee."&mois=".$mois); ?>>
    <input type="submit" value="+">
    </a>        
    <?php echo($annee) ?>
    <a <?php $annee=$annee-1;?> href=<?php echo("calendrier.php?annee=".$annee."&mois=".$mois); ?>>
    <input type="submit" value="-">
    </a>        

    <th>
        <form method="get">
            <input type="submit" value='+' />
            <?php echo($mois) ?> 
            <input type="submit" value="-" /></th>
        <form>
</tr>