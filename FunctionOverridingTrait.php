<?php 

trait SampleTrait
{
    public abstract function sampleFunction(string $msg): string;
}

class SampleClass
{
    use SampleTrait;

    // tidak bisa melakukan ini, karena di dalam trait parameter nya adalah string
    public function sampleFunction(int $msg): string
    {
        return "msg : $msg";
    }
}