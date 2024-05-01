<?php 

// syarat agar bisa menggunakan named argument adalah
// di semua parameter nya itu harus diberikan nilai default nya
function sayHello(string $first = "", string $middle = "", string $last = ""): void
{
    echo "Hello $first $middle $last\n";
}

// without named argument
// misal saya ingin $first = 'Muhammad" dan $last = "jidan"
// ini tidak bisa dilakukan jika tanpa menggunakan named argument
// sayHello('Muhammad', 'Jidan');

// with named argument
// dengan menggunakan named argument bisa melakukan hal yang diatas, dan tidak memperhatikan urutannya
sayHello(first: "Eko", middle: "Kurniawan", last: "Khanedy");
sayHello(first: 'Muhammad', last: 'Ganteng');