<?php 

class Example
{
    // bisa memberikan beberapa tipe data
    public string|int|bool $data;
}

$example = new Example();

$example->data = "data";
var_dump($example->data);

$example->data = 123;
var_dump($example->data);

$example->data = true;
var_dump($example->data);



function sampleFunction(array|string $data): string|array
{
    if(is_string($data))
        return "ini adalah string";
    else if(is_array($data))
        return ['message' => 'ini adalah array'];
}

var_dump(sampleFunction("asd"));
var_dump(sampleFunction([]));