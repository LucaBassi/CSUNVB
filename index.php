<?php
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'admin':
            adminHomePage();
            break;
        case 'shiftend':
            shiftEndHomePage();
            break;
        case 'todolist':
            todoListHomePage($_GET);
            break;
        case 'drugs':
            drugHomePage();
            break;

        case 'selctedItem':
            search();
            break;

        case 'base':
            base();
            break;

        case 'modificationItem' :
            modificationItem($_GET);
            break;

        case 'toggleItem' :
            toggleItem();
            break;

        case 'updatedItem' :
            updatedItem($_GET);
            break;

        case 'adminPage' :
            adminPage($_GET);
            break;

        case 'delItem' :
            delteAnItem();
            break;

        case 'resetAllTasks' :
            resetAllTasks($_GET);
            break;

        case 'download' :
            download();
            break;

        default: // unknown action
            require_once 'view/home.php';
            break;
    }
} else {
    require_once 'view/home.php';
}
?>
