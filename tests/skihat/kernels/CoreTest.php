<?php
class CoreTest extends PHPUnit_Framework_TestCase {
    public function testCamelUpper() {
        $this->assertEquals("aA", camel_upper("a_a"));
    }
    public function testCamelLower() {
        $this->assertEquals("a", camel_lower("A"));
    }
    public function testPascal() {
        $this->assertEquals("Abc", pascal("abc"));
    }
    public function testArrayKeyValue() {
        $arr = array('a' => 123);
        $this->assertEquals(123, array_key_value($arr, 'a'));
    }
    public function testArrayKeyPop() {
        $arr = array('a' => 'abc', 1 => 'abcd');
        $this->assertEquals('abc', array_key_value($arr, 'a'));
        $this->assertEquals('abcd', array_key_value($arr, 1));
    }
    public function testArrayKeyFilter() {
        $arr = array('a' => 'abc');
        $this->assertEquals(array('a' => 'cbabc'), array_key_filter($arr, array($this, 'callbackFilter')));
    }
    public function testArrayAppend() {
        $first = array('a' => '1');
        $second = array('2');
        $this->assertEquals(array('a' => '1', 0 => '2'), array_append($first, $second));
    }
    public function testArrayJoinStr() {
        $first = array('a' => '1');
        array_join_str($first, 'a', '2');
        $this->assertEquals('12', $first['a']);
    }
    public function testEnableCached() {
        $this->assertTrue(enable_cached());
    }

    public function callbackFilter($value) {
        return 'cb'.$value;
    }
}