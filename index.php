<?php
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

$action = $_GET['action'];

switch ($action)
{
    case 'admin':
        adminHomePage();
        break;
    case 'shiftend':
        shiftEndHomePage();
        break;
    case 'todolist':
        todoListHomePage();
        break;
    case 'drugs':
        drugHomePage();
        break;
    case 'selctedItem':
        search();
        break;
    case 'modificationItem' :
        modificationItem();
        break;

    case 'adminPage' :
        adminPage();
        break;

    case 'delItem' :
        delteAnItem();
        break;

    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
