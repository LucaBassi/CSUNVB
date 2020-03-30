<?php
ob_start();
$rows = 0; // Column count

$title = "CSU-NVB - Tâches hebdomadaires";
?>


<style>

    /* DivTable.com */
    .divTable {
        display: table;
        width: 100%;
    }

    .divTableRow {
        display: table-row;
        width: 130%;
    }

    .divTableHeading {
        background-color: #EEE;
        display: table-header-group;
    }

    .divTableCell, .divTableHead {
        border: 1px solid #999999;
        display: table-cell;
        padding: 30px 10px;
    }

    .divTableHeading {
        background-color: #EEE;
        display: table-header-group;
        font-weight: bold;
    }

    .divTableFoot {
        background-color: #EEE;
        display: table-footer-group;
        font-weight: bold;
    }

    .divTableBody {
        display: table-row-group;
        width: 130%;
    }


    .divTableCell .btn-holder {
        justify-content: flex-end;
        display: flex;

    }
</style>
<?php
$date = getdate();
?>
<div class="divTable">
    <?php foreach ($results as $result) { ?>
        <?php foreach ($result as $auj => &$todo) { ?>
            <?php
            if ($auj == 'lundi') {
                $day = 'Monday';
            }
            if ($auj == 'mardi') {
                $day = 'Tuesday';
            }
            if ($auj == 'mercredi') {
                $day = 'Wednesday';
            }
            if ($auj == 'jeudi') {
                $day = 'Thursday';
            }
            if ($auj == 'vendredi') {
                $day = 'Friday';
            }
            if ($auj == 'samedi') {
                $day = 'Saturday';
            }
            if ($auj == 'dimanche') {
                $day = 'Sunday';
            }
            ?>
            <?php
            if ($day == $date['weekday']):
                ?>
                <div class="divTableHeading">
                    <div class="divTableRow">
                        <div class="divTableHead">Journée en cours</div>
                    </div>
                </div>
                <?php foreach ($todo as $values) { ?>
                <div class="divTableCell">
                    <?php foreach ($values as $key => &$value) { ?>
                        <?= $value ?>
                        <br>
                    <?php } ?>
                    <button class="btn-holder">Détails</button>
                </div>
            <?php } ?>
            <?php endif ?>
        <?php } ?>
    <?php } ?>
</div>

<br>
<br>
<br>
<br>
<div class="divTable">
    <?php foreach ($results as $result) { ?>
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
                    <button class="btn-holder">Détails</button>
                </div>
            <?php } ?>
        <?php } ?>

    <?php } ?>
</div>
<br>
<br>
<br>
<form method="post" action="index.php?action=adminPage">
    <button>
        Administrer les taches
    </button>
</form>
<button type="button" href="view/newTask">
    Ajouter une tache
</button>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>
