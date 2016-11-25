<?php
class CacheTest extends PHPUnit_Framework_TestCase {
    public function testEngines() {
        //print_r(Cache::engines());die();
    }
    public function testEngine() {
        $this->assertInstanceOf(FileCacheEngine::class, Cache::engine('default'));
    }
    public function testWrite() {
        Cache::write('test', 'this is test');
    }
    public function testRead() {
        $this->assertEquals('this is test', Cache::read('test'));
    }
    public function testDelete() {
        Cache::delete('test');
        print_r(Cache::read('test'));
    }
}