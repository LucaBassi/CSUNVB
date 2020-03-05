<?php
/**
 * ${PROJET_NAME} - modificationItem.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 27.02.2020 14:07
 */
?>
<form method="post" action="index.php?action=updatedItem">
      <input type="text" value="<?= $itemSearch["id"] ?>" name="idItem"><br>
    <label>date :</label><br>
    <input type="date" value="<?= $itemSearch["date"] ?>" name="date"><br>
    <label>base :</label><br>
    <input type="text" value="<?= $itemSearch["base"] ?>" name="base"><br>
    <label>nightjob :</label><br>
    <input type="text" value="<?= $itemSearch["nightjob"] ?>" name="nightjob"><br>
    <label>description :</label><br>
    <textarea  name="description"><?= $itemSearch["description"] ?></textarea><br>
    <label>acknowledged_by :</label><br>
    <input type="text" value="<?= $itemSearch["acknowledged_by"] ?>" name="acknowledged_by"><br>
    <label>type :</label><br>
    <input type="text" value="<?= $itemSearch["type"] ?>" name="type"><br>
    <label>value :</label><br>
    <input type="text" value="<?= $itemSearch["value"] ?>" name="value"><br>
    <button type="submit">Valider</button>

</form>

