<?php 

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    // if($user !== null) 
    // {
    //     if($user->address !== null) 
    //     {
    //         return $user->address->country;
    //     }
    // }
    // return null;

        
    // jika user tidak null maka lanjutkan operasi nya, jika null berhenti dan return null
    // jika address tidak null maka lanjutkan operasi nya, jika null berhenti dan return null
    return $user?->address?->country;
}

$address = new Address();
$address->country = null;

$user = new User();
$user->address = $address;

var_dump(getCountry($user));
