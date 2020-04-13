<?php
/**
 * ${PROJET_NAME} - modificationItem.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 27.02.2020 14:07
 */
?>
<?php
ob_start();
?>
<br>
<br>
<div>

    <form method="post" action="index.php?action=updatedItem" onsubmit="return validate(this)">

        <table class='table table-bordered' style="width: 97%">
            <input type="hidden" value="<?= $itemSearch["id"] ?>" name="idItem"><br>
            <input type="hidden" value="<?= $itemSearch["base"] ?>" name="base"><br>
            <input type="hidden" value="<?= $_GET['day'] ?>" name="day">
            <input type="hidden" value="<?= $itemSearch["value"] ?>" name="value">

            <tr>
                <td>Travail de nuit</td>
                <td><input type='text' value="<?= $itemSearch["nightjob"] ?>" name="nightjob" class='form-control'
                           required></td>
            </tr>

            <tr>
                <td>Fait par :</td>
                <td><input type='text' value="<?= $itemSearch["acknowledged_by"] ?>" name="acknowledged_by"
                           class='form-control' required></td>
            </tr>

            <tr>
                <td>Type</td>
                <td><label>
                        <input type='text' value="<?= $itemSearch["type"] ?>" name="type" class='form-control' required>
                    </label>
                </td>
            </tr>

            <tr>
                <td>Description<i class="icon-pencil"></i></td>
                <td><textarea type='text' name="description" class='form-control'
                              required><?= $itemSearch["description"] ?></textarea></td>
            </tr>
            <tr>
                <td>Nouvelle taches</td>
                <td>
                    <div id="newlink">
                        <div class="feed">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
              <p id="addnew">
                        <a class="btn btn-dark" href="javascript:add_feed()">Add New </a>
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" value="<?= $_GET['day'] ?>" name="day">
                    <input type="hidden" value="<?= $itemSearch["base"] ?>">
                    <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Enrengister
                    </button>
                    <a href="index.php?action=todolist&base=<?= $itemSearch["base"] ?>"
                       class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>
                        &nbsp; Retour aux tâches</a>
                </td>
            </tr>

        </table>
    </form>
</div>

<script type="text/javascript">
    function validate(frm) {
        var ele = frm.elements['feedurl[]'];
        if (!ele.length) {
            alert(ele.value);
        }
        for (var i = 0; i < ele.length; i++) {
            alert(ele[i].value);
        }
        return true;
    }

    function add_feed() {
        var div1 = document.createElement('div');
        // Get template data
        div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
        // append to our form, so that template data
        //become part of form
        document.getElementById('newlink').appendChild(div1);
    }
</script>

<style>
    .feed {
        padding: 5px 0
    }
</style>

<!-- Template. This whole data will be added directly to working form above -->
<div id="newlinktpl" style="display:none">
    <div class="feed">
        <textarea class='form-control' type="text" name="tache[]" value="" size="50"></textarea>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
