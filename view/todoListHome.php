<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>
</div>
<?php
/*foreach()
    {
        $dataJson = 'todos.json';

    }*/
foreach ($taches as $value) {
    ?>
    <div>
        <?php
        echo $value ['id'];
        echo $value ['date'];
        echo $value ['base'];
        echo $value ['nightjob'];
        echo $value ['description'];
        echo $value ['acknowledged_by'];
        echo $value ['type'];
        echo $value ['value'];
        ?>
        <form action="index.php?action=selctedItem" method=post>
            <input type="hidden" value="<?= $value ['id'] ?>" name="idItem">
            <input type="submit">
        </form>
    </div>
    <?php
}

?>
<br>
<br>
<br>
<form method="post" action="index.php?action=adminPage">
    <button>
        Supprimer une tâche
    </button>
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
