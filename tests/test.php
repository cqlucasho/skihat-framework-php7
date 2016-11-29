<?php
use PHPUnit\Framework;
require_once(dirname(__DIR__).'/app/boots/startup.inc');

class TestSuites extends PHPUnit_Framework_TestSuite {
    public function __construct(){
        $this->addTestFile('skihat/kernels/CoreTest.php');
        $this->addTestFile('skihat/kernels/SkihatTest.php');
        //$this->addTestFile('skihat/kernels/ValidatorsTest.php');
        $this->addTestFile('skihat/kernels/caches/CacheTest.php');
        //$this->addTestFile('skihat/kernels/databases/DatabaseTest.php');
        $this->addTestFile('skihat/kernels/loggers/LoggerTest.php');
        $this->addTestFile('skihat/kernels/medias/MediaTest.php');
        $this->addTestFile('skihat/kernels/messages/MessageTest.php');
        //$this->addTestFile('skihat/kernels/securities/SecurityTest.php');
        $this->addTestFile('skihat/applications/ApplicationRequestTest.php');
        $this->addTestFile('skihat/models/ModelTest.php');
    }

    //注意此处设置为static
    public static function suite() {
        //最后一定得返回PHPUnit_Framework_TestSuite对像
        return new self();
    }
}