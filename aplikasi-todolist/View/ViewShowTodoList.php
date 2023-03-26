<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../Helper/Input.php";
require_once "../View/ViewShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
function viewShowTodoList()
{
    while (true)
    {
        showTodoList();

        echo " -*- MENU -*- " . PHP_EOL;
        echo "1. Tambah To-do". PHP_EOL;
        echo "2. Hapus To-do". PHP_EOL;
        echo "x. Keluar". PHP_EOL;

        $pilihan = input("Pilih : ");

        if ($pilihan == "1"){
            viewAddTodoList();
        } elseif ($pilihan == "2"){
            viewRemoveTodoList();
        } elseif ($pilihan == "x"){
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;
}