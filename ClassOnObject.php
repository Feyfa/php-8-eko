<?php 

class Jidan
{

}

$jidan = new Jidan();

// ini semua digunakan untuk mendapatkan nama class nya dalam string
var_dump($jidan::class); // php 8 
var_dump(Jidan::class);
var_dump(get_class($jidan));