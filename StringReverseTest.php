<?php 

use PHPUnit\Framework\TestCase;
require 'StringReverse.php';

class StringReverseTest extends TestCase {
    
    private $reverse;
 
    protected function setUp() : void
    {
        $this->reverse = new StringReverse();
    }
 
    protected function tearDown() : void
    {
        $this->reverse = NULL;
    }
 
    public function testReverseWordsText()
    {
        $result = $this->reverse->reverseWordsText('Привет! Давно не виделись.');
        $this->assertEquals('Тевирп! Онвад ен ьсиледив.', $result);
    }
}
