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
            <h3>Calendrier</h3>
        <?php

$days = ['lun', 'mar', 'mer', 'jeu', 'ven', 'sam', 'dim'];

$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$fisrtDayTimstamp = mktime(12, 0, 0, $month, 1, $year);
$firstDateOfWeek = date('w', $fisrtDayTimstamp) -1;
if ($firstDateOfWeek < 0) $firstDateOfWeek = 6;
$day = 1 - $firstDateOfWeek;

$precMonth = $month-1;
$precYear = $year;
if ($precMonth == 0){
    $precMonth = 12;
    $precYear -= 1;
}

$nextMonth = $month+1;
$nextYear = $year;
if ($nextMonth > 12) {
    $nextMonth = 1;
    $nextYear += 1;
}
?>

<h1>
    <a href="calendrier.php?month=<?= $precMonth ?>&year=<?= $precYear ?>">
        &larr;
    </a>
    <?= $year ?> / <?= $month ?>
    <a href="calendrier.php?month=<?= $nextMonth ?>&year=<?= $nextYear ?>">
        &rarr;
    </a>
</h1>

<table>
    <tr>
        <?php foreach ($days as $dayName) { ?>
            <th>
                <?= $dayName; ?>
            </th>
        <?php } ?>
    </tr>

    <?php do { ?>
    <tr>
        <?php foreach ($days as $dayName) { ?>
            <?php
            $currentDay = mktime(12, 0, 0, $month, $day, $year);
            $dayNumber = date('d', $currentDay);
            $day += 1;

            $style = '';
            if (date('m', $currentDay) != $month){
                $style = 'opacity:0.2';
            }
            if (date('d', $currentDay) == date('d') && 
                date('m', $currentDay)== date('m') &&
                date('Y', $currentDay) == date('Y')){
                $style = 'background-color:SandyBrown';
            }
            ?>
            <td style="<?= $style ?>">
                <?= $dayNumber; ?>
        </td>
        <?php } ?>
    </tr>
    <?php } while ($day > 0 && date('m', $currentDay) == $month); ?>
</table>

</body>