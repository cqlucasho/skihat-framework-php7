<?php
Skihat::import('loggers.logger', SKIHAT_PATH_KERNEL);

class LoggerTest extends PHPUnit_Framework_TestCase {
    public function testEngine() {
        # 写入资源管理配置信息。
        Skihat::write('kernels/loggers', array(
            'default' => array(
                SKIHAT_IOC_PATHS => SKIHAT_PATH_KERNEL,
                SKIHAT_IOC_CLASS => 'loggers.engines.file_logger_engine'
            )
        ));

        Logger::initialize();
        //print_r(Logger::engine('default'));
    }
    public function testEngines() {
        //print_r(Logger::engines());
    }
    public function testWrite() {
        //Logger::write('test', 'this is test');
    }
}