<?php
// Fungsi Faktorial menggunakan for loop

function factorialLoop(int $value): int {
    $total = 1;

    for ($i = 1; $i <= $value; $i++){
        // $total = $total * $i;
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1*2*3*4*5);

// Menggunakan Recursive Function
// Function memanggil function-nya sendiri
function factorialRecursive(int $value): int {
    if ($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(5));

// Percobaan Recursive - Memory Overload
function loop(int $value){
    if ($value == 0){
        echo "End loop" . PHP_EOL;
    }else{
        echo "Loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

// Normal
loop(5);

// Error
loop(3000000);
// Loop ke-333203
// Fatal error: Allowed memory size of 536870912 bytes exhausted (tried to allocate 262144 bytes)