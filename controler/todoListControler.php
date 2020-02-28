<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/todoListModel.php';

function todoListHomePage()
{
    require_once "model/todoListModel.php";
    $taches = readTodoListItems();
    require_once 'view/todoListHome.php';

}

function search()
{
    $id = $_POST['idItem'];
    require_once 'model/todoListModel.php';
    $itemSearch = getSelectedItem($id);
    require_once 'view/selectedItem.php';

}

function modificationItem()
{
    require_once "view/modificationItem.php";
    $tableauModification [0] = $_POST['id'];
    $tableauModification [1] = $_POST['date'];
    $tableauModification [2] = $_POST['base'];
    $tableauModification [3] = $_POST['nightjob'];
    $tableauModification [4] = $_POST['description'];
    $tableauModification [5] = $_POST['acknowledged_by'];
    $tableauModification [6] = $_POST['type'];
    $tableauModification [7] = $_POST['value'];
    replacementItem($tableauModification);
}

function adminPage()
{
    require_once "model/todoListModel.php";
    $taches = readTodoListItems();
    require_once 'view/adminPage.php';

}


function delteAnItem()
{
    require_once "model/todoListModel.php";
    $id=$_POST["id"];
    delteItem($id);
    todoListHomePage();


    require_once 'view/adminPage.php';

}
?>
