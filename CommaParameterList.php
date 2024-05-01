<?php 

function sayHello(string $first, string $last)
{
    echo "Hello $first $last\n";
}

// comma parameter list artinya boleh menambahkan koma di akhir argument, ini tidak akan error, sebenarnya tujuannya hanya untu kode kita lebih flexsibel, mirip seperti array di php
sayHello(
    "Muhamamd",
    "Jidan",
);


function sum(...$args)
{
    $total = 0;
    foreach($args as $arg)
    {
        $total += $arg;
    }
    return $total;
}
$result = sum(
    1,
    2,
    3,
    4,
    5,
);
var_dump($result);
