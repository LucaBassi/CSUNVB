<?php
ob_start();

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
    }

    .divTableHeading {
        background-color: #EEE;
        display: table-header-group;
    }

    .divTableCell, .divTableHead {
        border: 1px solid #999999;
        display: table-cell;
        padding: 3px 10px;
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
    }
</style>

<div class="divTable">
    <div class="divTableHeading">
        <div class="divTableRow">
            <div class="divTableHead">Lundi</div>
            <div class="divTableHead">Mardi</div>
            <div class="divTableHead">Marcredi</div>
            <div class="divTableHead">Jeudi</div>
            <div class="divTableHead">Vendredi</div>
            <div class="divTableHead">Samedi</div>
            <div class="divTableHead">Dimanche</div>
        </div>
    </div>
    <div class="divTableBody">
        <div class="divTableRow">
<?php
foreach ($results as $result) {
foreach ($result as $todo) {
    ?>
    <div   class="divTableCell">
    <?php
foreach ($todo as $values) {
foreach ($values as $key => &$value) {
?>


            <?= $value ?>
    <br>
<!--            <div class="divTableCell">$1</div>
            <div class="divTableCell">3</div>
            <div class="divTableCell">$3</div>
        </div>
        <div class="divTableRow">
            <div class="divTableCell">Banana</div>
            <div class="divTableCell">$1.5</div>
            <div class="divTableCell">2</div>
            <div class="divTableCell">$3</div>
        </div>
        <div class="divTableRow">
            <div class="divTableCell">Ananas</div>
            <div class="divTableCell">$2</div>
            <div class="divTableCell">1</div>
            <div class="divTableCell">$2</div>
        </div>-->






    <?php } ?>

    <form action="index.php?action=selctedItem" method=post>
        <input type="hidden" value="<?/*= $result ['id'] */ ?>" name="idItem">
        <input type="hidden" value="<?/*= $result ['base'] */ ?>" name="base">
        <button type="submit"> Voir</button>
    </form>
    <br>
    <?php

    }
    ?> </div> <?php
    }
?> </div> <?php
    }
    ?>





        <div class="divTableFoot">
            <div class="divTableRow">
                <div class="divTableCell">Sum</div>
                <div class="divTableCell">&nbsp;</div>
                <div class="divTableCell">6</div>
                <div class="divTableCell">$7</div>
            </div>
        </div>
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
