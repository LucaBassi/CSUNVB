<?php
ob_start();

$title = "CSU-NVB - Tâches hebdomadaires";
?>

<?php
$index = 0;



foreach ($results  as $result){
    ?>
    <div>
        <?php

        echo $result["lundi"][0]["id"];
        echo $result ["lundi"]['date'];
        echo $result ["lundi"]['base'];
        echo $result ["lundi"]['nightjob'];
        echo $result ["lundi"]['description'];
        echo $result ["lundi"]['acknowledged_by'];
        echo $result ["lundi"]['type'];
        echo $result ["lundi"]['value'];
        ?>
        <form action="index.php?action=selctedItem" method=post>
            <input type="hidden" value="<?= $result ['id'] ?>" name="idItem">
            <input type="hidden" value="<?= $result ['base'] ?>" name="base">
            <button type="submit"> Voir</button>
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
