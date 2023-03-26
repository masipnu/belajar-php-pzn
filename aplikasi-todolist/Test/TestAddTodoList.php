<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");

var_dump($todoList);