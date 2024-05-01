<?php 

function validate(string $value)
{
    if(trim($value) === '')
        throw new Exception('KOSONG ASTAGFIRULLAH');
}

try
{
    validate('');
}
// di php 8, di catch itu tidak perlu menampilkan pesan dari exception, bahkan Exception nya bisa tidak digunakan
// disini saya hanya menampikan pesan sederhana saja yaitu string "Invalid\n" 
catch(Exception)
{
    echo "Invalid\n";
}