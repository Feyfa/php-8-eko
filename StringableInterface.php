<?php 

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}\n";
}

class Person
{
    // di php 8 untuk menggunakan magic function __tostring, tidak perlu lagi menggunakan implements Stringable lagi
    public function __toString(): string
    {
        return "Person";
    }
}

sayHello(new Person());