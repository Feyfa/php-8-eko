<?php 

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last\n";
}

sayHello(first: "Eko", middle: "Kurniawan", last: "Khanedy");