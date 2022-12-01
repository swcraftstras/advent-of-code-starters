<?php

require_once 'Day01.php';

use PHPUnit\Framework\TestCase;

class Day01Test extends TestCase
{

    public function testPart_01_sample()
    {
        $partOne = partOne(getInput("input-sample.txt"));

        $this->assertEquals(24000, $partOne);
    }
    
    public function testPart_01()
    {
        $partOne = partOne(getInput());

        $this->assertEquals(42, $partOne);
    }

    public function testPart_02()
    {
        $partTwo = partTwo(getInput());

        $this->assertEquals(42, $partTwo);
    }



}

function getInput($fileName= "input.txt")
{
    $delimiter = "\n";
    $useIncludePath=true;
    return explode($delimiter, trim(file_get_contents( $fileName,$useIncludePath)));
}

?>
