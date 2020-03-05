<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

//require_once 'model/todoListModel.php';

function todoListHomePage()
{
    require 'model/todoListModel.php';
    $results = readTodoListItems();


    require_once 'view/todoListHome.php';

}

function search()
{
    $id = $_POST["idItem"];
    require_once 'model/todoListModel.php';
    $itemSearch = readTodoListItem2($id);
    require_once 'view/selectedItem.php';

}

function modificationItem()
{

    $id = $_POST["idItem"];
    require_once 'model/todoListModel.php';
    $itemSearch = readTodoListItem2($id);
    require_once "view/modificationItem.php";
/*
    require_once "view/modificationItem.php";
    $tableauModification [0] = $_POST['id'];
    $tableauModification [1] = $_POST['date'];
    $tableauModification [2] = $_POST['base'];
    $tableauModification [3] = $_POST['nightjob'];
    $tableauModification [4] = $_POST['description'];
    $tableauModification [5] = $_POST['acknowledged_by'];
    $tableauModification [6] = $_POST['type'];
    $tableauModification [7] = $_POST['value'];
    replacementItem($tableauModification);*/
}


function updatedItem(){
    $id= (int)$_POST["idItem"];
    $tableauModification ['id'] = $_POST["idItem"];
    $tableauModification ['date'] = $_POST['date'];
    $tableauModification ['base'] = $_POST['base'];
    $tableauModification ['nightjob'] = $_POST['nightjob'];
    $tableauModification ['description'] = $_POST['description'];
    $tableauModification ['acknowledged_by'] = $_POST['acknowledged_by'];
    $tableauModification ['type'] = $_POST['type'];
    $tableauModification ['value'] = $_POST['value'];

    require_once "model/todoListModel.php";

    updateItem($id,$tableauModification);
adminPage();


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
    $id = $_POST["id"];
    delteItem($id);
    // todoListHomePage();
    adminPage();

    require_once 'view/adminPage.php';

}


function download()
{
    $id=$_POST['idItem'];
    require_once 'model/todoListModel.php';
    $itemToDownload = readTodoListItem2($id);
   // require 'model/todoListModel.php';
    $results = readTodoListItems();
    require_once 'pdf.php';
    printer($results);


    require_once 'view/todoListHome.php';

}

?>
