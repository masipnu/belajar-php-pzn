<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TO-DO" . PHP_EOL;

    $todo = input("To-do");

    if ($todo == "x"){
        echo "Batal menambah to-do" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}