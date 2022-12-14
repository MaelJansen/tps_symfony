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
            <h3>Calculatrice</h3>

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
        </div>
    </div>
</body>
