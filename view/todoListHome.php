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
        echo $result ['id'];
        echo $result ['date'];
        echo $result ['base'];
        echo $result ['nightjob'];
        echo $result ['description'];
        echo $result ['acknowledged_by'];
        echo $result ['type'];
        echo $result ['value'];
        ?>
        <form action="index.php?action=selctedItem" method=post>
            <input type="hidden" value="<?= $result ['id'] ?>" name="idItem">
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
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
