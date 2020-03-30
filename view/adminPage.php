<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>

<?php


?>

<?php
ob_start();
$rows = 0; // Column count


$title = "CSU-NVB - Tâches hebdomadaires";
?>



<?php
$date = getdate();
?>

<br>
<br>
<br>
<br>
<div class="divTable">
    <?php foreach ($taches

                   as $result) { ?>


        <?php foreach ($result as $auj => &$todo) { ?>
            <?php foreach ($result as $auj => &$todo) { ?>
                <div class="divTableHeading">
                    <div class="divTableRow">
                        <div class="divTableHead"><?= $auj ?></div>
                    </div>
                </div>
                <?php foreach ($todo as $values) { ?>
                    <div class="divTableCell">
                    <?php foreach ($values as $key => &$value) { ?>
                        <?= $value ?>
                        <br>
                    <?php } ?>

                    <div>


                        <a href="index.php?action=delItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">

                            <button class="btn-holder">Supprimer</button>
                        </a>

                        <a href="index.php?action=modificationItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                            <button class="btn-holder">Modifier</button>
                        </a>

                        <a href="index.php?action=selctedItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                            <button class="btn-holder"> Détails</button>
                        </a>

                    </div>
                <?php } ?>
            <?php } ?>

        <?php } ?>
        </div>
        <br>
        <br>
        <br>


    <?php } ?>

    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>
