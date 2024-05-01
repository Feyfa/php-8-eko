<?php 


class ParentClass
{
    public function method(string $name)
    {

    }
}

class ChildClass extends ParentClass
{
    // ini error, karena di ParentClass itu parameter nya int, jadi tidak boleh beda
    public function method(int $name)
    {
        
    }
}