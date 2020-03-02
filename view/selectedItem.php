<?php
ob_start();
?>
<div class="row m-2">
    <h1>Tâche selectionné</h1>
</div>
<?php
    ?>
    <div>
        <?php

        echo $itemSearch ['id'];
        echo $itemSearch ['date'];
        echo $itemSearch ['base'];
        echo $itemSearch ['nightjob'];
        echo $itemSearch ['description'];
        echo $itemSearch ['acknowledged_by'];
        echo $itemSearch ['type'];
        echo $itemSearch ['value'];
        ?>
    </div>
    <form action="index.php?action=modificationItem" method = post>
        <input type="hidden" value="<?=  $itemSearch ['id'] ?>" name="idItem">
        <button type="submit">Modifier</button>
    </form>
    <?php

$content = ob_get_clean();
require "gabarit.php";
?>
