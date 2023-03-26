<?php

/*
 * Menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;

    echo "To-do List" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}