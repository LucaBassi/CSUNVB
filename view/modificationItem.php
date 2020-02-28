<?php
/**
 * ${PROJET_NAME} - modificationItem.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 27.02.2020 14:07
 */
?>
<form method="post" action="index.php?action=modificationItem">
    <input type="hidden" value="<?=  $itemSearch ['id'] ?>" name="idItem">
    <label>date :</label>
    <input type="date" name="date">
    <label>base :</label>
    <input type="text" name="base">
    <label>nightjob :</label>
    <input type="text" name="nightjob">
    <label>description :</label>
    <textarea name="description"></textarea>
    <label>acknowledged_by :</label>
    <input type="text" name="acknowledged_by">
    <label>type :</label>
    <input type="text" name="type">
    <label>value :</label>
    <input type="text" name="value">
    <input type="submit">
</form>

