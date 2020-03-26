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



      <?php

            foreach ($results as $result) {
            foreach ($result as $day => &$todo) :
                ?>

                    <?php
                    foreach ($todo as $values) {
                        ?>
                    <div class="divTableCell">
                        <?php
                    foreach ($values as $key => &$value) {
                        ?>

                        <?= $value ?>
                        <br>
                    <?php } ?>

                    <?php if( $day =='lundi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>

                    <?php if( $day =='mardi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>
                    <?php if( $day =='mercredi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>

                    <?php if( $day =='jeudi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>
                    <?php if( $day =='vendredi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>

                    <?php if( $day =='samedi'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                    <?php } ?>
                    <?php if( $day =='dimanche'){ ?>
                        <form action="index.php?action=selctedItem" method=post>
                            <input type="hidden" value="<?= $result["lundi"][0]["id"]?>" name="idItem">
                            <input type="hidden" value="<?= $result["lundi"][0]["base"]?>" name="base">
                            <input type="hidden" value="<?= $day?>" name="day">
                            <button type="submit"> Voir</button>
                        </form>
                            </div>
                <?php } ?>
                </div>
            <?php } ?>
         </div>  </div>
            <?php endforeach; ?>
        </div>
            <?php } ?>

            }
            ?>
        </div>
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
