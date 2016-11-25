<?php
class SkihatTest extends PHPUnit_Framework_TestCase {
    public function testWrite() {
        Skihat::write('test', 'test1');
        $this->assertEquals('test1', Skihat::read('test'));
    }
    public function testDebug() {
        Skihat::debug('err', 'thisiserr');
        //print_r(Skihat::debugLines('err'));
    }
    public function testLocate() {
        //print_r(Skihat::locate('controllers.filters.security_filter', SKIHAT_PATH_LIBRARY));
    }
    public function testImport() {
        //print_r(Skihat::import('kernels.caches.engines.file_cache_engine', SKIHAT_PATH_LIBRARY));
    }
    public function testUsing() {
        Skihat::import('kernels.caches.cache', SKIHAT_PATH_LIBRARY);
        $this->assertEquals('FileCacheEngine', Skihat::using('kernels.caches.engines.file_cache_engine'));
        //print_r(Skihat::using('kernels.caches.engines.file_cache_engine#FileCacheEngine'));
    }
    public function testIoc() {
        $this->assertInstanceOf(FileCacheEngine::class, Skihat::ioc('kernels.caches.engines.file_cache_engine', SKIHAT_PATH_LIBRARY));
    }
}