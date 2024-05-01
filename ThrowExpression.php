<?php 

function sayHello(?string $name)
{
    if($name === null) 
    {
        throw new Exception('Tidak Boleh Null');
    }

    echo "Hello $name\n";
}

function sayHelloExpression(?string $name)
{
    // ?? digunakan untuk langsung memilih, jika $name tidak null langsung gunakan $name, tetapi jika null maka gunakan throw new Exception
    // throw sekarang seuah expression bukan lagi statement
    $result = $name ?? throw new Exception('name tidak boleh null');

    echo $result . PHP_EOL;
}

sayHelloExpression(null);