<?php
ob_start();

$title = "CSU-NVB - Tâches hebdomadaires";
?>


<div>

    <a href=index.php?action=todolist&base=saint-loup>
        <button type="submit" name="saint-loup" value="saint">saint-loup</button>
    </a>

    <a href=index.php?action=todolist&base=payerne>
        <button type="button" name="payerne" value="payerne">payerne</button>
    </a>

    <a href=index.php?action=todolist&base=yverdon>
        <button type="button" name="yverdon" value="yverdon">yverdon</button>
    </a>

    <a href=index.php?action=todolist&base=valee-de-joux>
        <button type="button" name="valee" value="valee">valee</button>
    </a>

    <a href=index.php?action=todolist&base=specificite>
        <button type="button" name="specificite" value="specificite">specificite</button>
    </a>
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
