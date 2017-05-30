<?php
use dapsych0\piglatin\PigLatin;

class PigLatinTest extends PHPUnit_Framework_TestCase
{
    /** @var PigLatin $pigLatin */
    protected $pigLatin;

    protected function setUp() {
        $this->pigLatin = new PigLatin();
    }

    /**
     * Vowel Tests
     */
    public function testWordBeginningWithA() {
        $this->assertEquals('are-way', $this->pigLatin->translateWord('are'));
    }

    public function testWordBeginningWithE() {
        $this->assertEquals('eat-way', $this->pigLatin->translateWord('eat'));
    }

    public function testWordBeginningWithI() {
        $this->assertEquals('interest-way', $this->pigLatin->translateWord('interest'));
    }

    public function testWordBeginningWithO() {
        $this->assertEquals('omelet-way', $this->pigLatin->translateWord('omelet'));
    }

    public function testWordBeginningWithU() {
        $this->assertEquals('upward-way', $this->pigLatin->translateWord('upward'));
    }

    /**
     * Consonant Tests
     */
    public function testWordBeginningWithB() {
        $this->assertEquals('anana-bay', $this->pigLatin->translateWord('banana'));
    }

    public function testWordBeginningWithC() {
        $this->assertEquals('all-cay', $this->pigLatin->translateWord('call'));
    }

    /**
     * Consonant Cluster Tests
     */
    public function testWordBeginningWithCh() {
        $this->assertEquals('eers-chay', $this->pigLatin->translateWord('cheers'));
    }

    public function testWordBeginningWithSh() {
        $this->assertEquals('esh-shay', $this->pigLatin->translateWord('shesh'));
    }

    public function testWordBeginningWithSm() {
        $this->assertEquals('ile-smay', $this->pigLatin->translateWord('smile'));
    }

    public function testWordBeginningWithStr() {
        $this->assertEquals('ing-stray', $this->pigLatin->translateWord('string'));
    }

    public function testWordBeginningWithTh() {
        $this->assertEquals('anks-thay', $this->pigLatin->translateWord('thanks'));
    }

    public function testWordBeginningWithSt() {
        $this->assertEquals('upid-stay', $this->pigLatin->translateWord('stupid'));
    }

    /**
     * String Tests
     */
    public function testString() {
        $expected = 'are-way ou-yay ee-fray or-fay unch-lay ext-nay eek-way';
        $this->assertEquals($expected, $this->pigLatin->translate('are you free for lunch next week'));
    }

    public function testString2() {
        $expected = 'ich-whay ay-day o-day ou-yay ant-way o-tay o-gay';
        $this->assertEquals($expected, $this->pigLatin->translate('which day do you want to go'));
    }
}