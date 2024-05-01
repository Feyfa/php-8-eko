<?php 

// ===============================================================
// TANPA MENGGUNAKAN MATCH EXPRESSION
// $value = "D";
// $result = "";

// switch($value)
// {
//     case "A" :
//     case "B" :
//     case "C" :
//         $result = "Anda Lulus";
//         break;
//     case "D" :
//         $result = "Anda Tidak Lulus";
//         break;
//     case "E" :
//         $result = "Mungkin Anda Salah Jurusan";
//         break;
//     default :
//         $result = "Nilai Apa Itu";
// }

// echo $result . PHP_EOL;
// ===============================================================





// ===============================================================
// DENGAN MENGGUNAKAN MATCH EXPRESSION
$value = "C";
$result = match($value)
{
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda Salah Jurusan",
    default => "Nilai Apa Itu"
};
echo $result . PHP_EOL;





$nilai = 75;
$hasil = match(true)
{
    $nilai >= 80 => 'A',
    $nilai >= 70 => 'B',
    $nilai >= 60 => 'C',
    $nilai >= 50 => 'D',
    default => 'E'
};
echo $hasil . PHP_EOL;





$name = "Mrs. Eko";
$sapa = match(true) 
{
    str_contains($name, "Mr.") => 'Hello Sir',
    str_contains($name, "Mrs.") => 'Hello Mam',
    default => 'Hello Aja'
};
echo $sapa . PHP_EOL;
// ===============================================================






