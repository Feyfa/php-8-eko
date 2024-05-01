<?php 

// mixed = array|bool|callable|int|float|null|object|resource|string
function testMixed(mixed $param) : mixed
{
    if(is_array($param))
        return [];
    else if(is_string($param))
        return "string";
    else if(is_int($param))
        return 0;
    else    
        return null;
}

var_dump(testMixed([1,2,3]));
var_dump(testMixed('sss'));
var_dump(testMixed(1));
var_dump(testMixed(true));
var_dump(testMixed(new stdClass()));