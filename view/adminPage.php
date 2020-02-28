<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>

<?php

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
        <form action="index.php?action=delItem" method=post>
            <input type="hidden" value="<?= $value ['id'] ?>" name="id">
            <button type="submit" placeholder="Supprimer">Supprimer</button>
        </form>
    </div>

    <?php
}
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
