<h1>Table de multiplication</h1>
<table>
    <?php
    $taille = 10;
    for($i=1; $i<$taille; $i++){
        echo "<tr>";
        for($j= 1; $j<$taille; $j++){
            if($i ==1 || $j==1){
                echo "<th>";
                echo $i*$j; 
                echo "</th>";
            }else {
                    echo "<td>";
                    echo "<a href=\"multiplication.php?i=".$i."&j=".$j."\">".$i*$j."</a>"; 
                    echo "</td>";
                }
            }
        }
    ?>

</table>
