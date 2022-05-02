<?php
// require_once('PHPUnit/Framework/TestCase.php');
// include("vendor/autoload.php");
// i guess i use @ to direct the stuff in indexFuelQuery to these specific test functions
declare(strict_types=1);



class TestfuelCodeCoverageTest extends \PHPUnit\Framework\TestCase
{


    public function testThatStringMatch()
    {

        $string1 = 'testting';
        $string2 = 'testting';



        $this->assertSame($string1, $string2);
    }
}




exit; // @codeCoverageIgnore