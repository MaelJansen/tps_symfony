<body style="
            background-color: Gainsboro;
            display: flex;
            flex-direction: column;
            align-items: center;">
    <h1>Tout les TDs php</h1>
    <div class="Contenu" style="display: flex;
            flex-direction: row;">
        <div class="TDS" style="margin-right: 10vw">
            <h3>Les TDs<h3>
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
                <a href="calendrier.php">calendrier</a>
            </li>
        </div>
        <div class="Res">
            <h3>Table de multiplication</h3>
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
                                if ($i == $_GET["i"]){
                                    echo "<mark>
                                    <a href=\"multiplication.php?i=".$i."&j=".$j."\">".$i*$j."</a>
                                    </mark>";
                                }else if($j == $_GET["j"]) {
                                    echo "<mark> <a href=\"multiplication.php?i=".$i."&j=".$j."\">".$i*$j."</a> </mark>";
                                }
                                else {
                                    echo "<a href=\"multiplication.php?i=".$i."&j=".$j."\">".$i*$j."</a>";
                                }
                                echo "</td>";
                            }
                        }
                    }
                ?>

            </table>
        </div>
    </div>
</body>



