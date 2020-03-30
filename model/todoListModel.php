<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/


/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 * done
 * @param $base
 * @return
 */
function readTodoListItems($base)
{
    $datas = json_decode(file_get_contents("model/dataStorage/todos.json"), true);
    $index = 0;

    foreach ($datas as $baseData) {
        foreach ($baseData as $key => &$val) {
            if ($key == $base) {
                // $yes = $data[1];
                // $baseData[$base] == 'saint-loup';
                $data = $val;
                $index++;
            }
        }
    }
    $index = 0;
    return $data;
}


/**
 * Retourne un item précis, identifié par son id
 * ...
 * DONE
 * @param $base
 * @param $id
 * @param $day
 * @return
 */
function readTodoListItem2($base, $id, $day)
{
    $contents = readTodoListItems($base);
    foreach ($contents as $content) {
        foreach ($content as $kesDay => &$valueList) {

            foreach ($content[$day] as $value)
                if ($kesDay == $day && $value["id"] == $id) {
                    $searchTotal = $value;
                }

        }
    }
    return $searchTotal;
}


/**
 * TODO Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateTodoListItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function replacementItem($tableauModification, $id)
{
    $reads = readTodoListItems();
    $compteur = 0;
    $compteur2 = 0;
    $compteur3 = 0;
    foreach ($reads as $value) {
        if ($value ['id'] == $id) {
            $reads[$compteur] = $tableauModification;
        }
        $compteur++;
    }


    /*$items = getTodoListItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveTodoListItem($items);*/
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */

function delteItem($id)
{
    $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);
    $index = 0;
    foreach ($data as $value) {
        if ($value ['id'] == $id) {
            unset($data[$index]);
            $newData = array_values($data);
            file_put_contents("model/dataStorage/todos.json", json_encode($newData));


            //  $searchTotal = $value;
        }
        $index++;
    }
    // return $searchTotal;
//    return $data;
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoListItem($item)
{
    $items = getTodoListItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveTodoListItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


function updateItem($id, $tableauModification)
{
    $data = readTodoListItems();
    $index = 0;
    foreach ($data as $value) {
        if ($value ['id'] == $id) {
            $data[$index] = $tableauModification;
            $newData = array_values($data);
            file_put_contents("model/dataStorage/todos.json", json_encode($newData));


            //  $searchTotal = $value;
        }
        $index++;
    }
    // return $searchTotal;
//    return $data;
}


?>
