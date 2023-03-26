<?php

require_once "../Model/TodoList.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/AddTodoList.php";

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