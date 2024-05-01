<?php 

#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank
{

}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    protected $min;
    protected $max;
    
    public function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;
    
    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    
    $properties = $class->getProperties();

    foreach($properties as $property)
    {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);

    if(count($attributes) > 0) 
    {
        // isInitialized
        // digunakan untuk mengecek apakah property sudah di berikan value atau tidak
        if(!$property->isInitialized($object)) 
            throw new Exception("Property $property->name is null");

        // getValue()
        // digunakan untuk mengambil value dari property, dalam hal ini di cek apakah samadengan null
        else if($property->getValue($object) === null)
            throw new Exception("Property $property->name is null");
        
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if(!$property->isInitialized($object) || $property->getValue() === null) 
        return;

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);

    foreach($attributes as $attribute)
    {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);

        if($valueLength < $length->min)
            throw new Exception("Property $property->name is too short");
        else if($valueLength > $length->max)
            throw new Exception("Property $property->name is too long");
    }

}

$request = new LoginRequest();
$request->username = 'Eko';
$request->password = 'rahasia';
validate($request);