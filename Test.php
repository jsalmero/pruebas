<?php
class MathTest extends PHPUnit_Framework_TestCase
{
    public $value1;
    public $value2;

    protected function setUp()
    {
        $this->value1 = 2;
        $this->value2 = 3;
    }
public function testPass()
{
    $this->assertTrue($this->value1 + $this->value2 == 5);
}
}
?>


