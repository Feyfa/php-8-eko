<?php 

class Manager
{
    private function test(): void
    {

    }
}

class VicePresident extends Manager
{
    // ini tidak dianggap override, karena di class Manager function test() itu visibility nya adalah private
    public function test(string $name): string
    {
        return "Hello $name";
    }
}

$vc = new VicePresident();
echo $vc->test('Jidan') . PHP_EOL;