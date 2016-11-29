<?php
Skihat::import('boots.config', SKIHAT_PATH_APP);
require_once('admin.php');

class ModelTest extends PHPUnit_Framework_TestCase {
    public function init() {
        return new Admin(array('id' => 1, 'name' => 'test'));
    }
    public function testGet() {
        $appModel = $this->init();
        $this->assertEquals(1, $appModel->id);
    }
    public function testOriginalProp() {
        $appModel = $this->init();
        $this->assertEquals('test', $appModel->originalProp('name'));
    }
    public function testOriginalProps() {
        $appModel = $this->init();
        $this->assertEquals(['id' => 1, 'name' => 'test'], $appModel->originalProps());
    }
    public function testCurrentProps() {
        $appModel = $this->init();
        $this->assertEquals(['id' => 1, 'name' => 'test'], $appModel->originalProps());
    }
    public function testChangeProps() {
        $appModel = $this->init();
        $appModel->changeProps(['id' => 2]);
        $this->assertEquals(['id' => 1, 'name' => 'test'], $appModel->originalProps());
        $this->assertEquals(['id' => 2, 'name' => 'test'], $appModel->currentProps());
    }
    public function testAddError() {
        $appModel = $this->init();
        $appModel->addError('test', ['type' => 'error', 'msg' => 'this is test error']);
        return $appModel;
    }
    public function testErrors() {
        $appModel = $this->testAddError();
        //print_r($appModel->allErrors());die();
    }
    public function testError() {
        $appModel = $this->testAddError();
        $this->assertEquals(['type' => 'error', 'msg' => 'this is test error'], $appModel->error('test'));
    }
    public function testClearErros() {
        $appModel = $this->testAddError();
        $this->assertInternalType('object', $appModel->clearErrors());
        return $appModel;
    }
    public function testErrorsAgain() {
        $appModel = $this->testClearErros();
        $this->assertEmpty($appModel->allErrors());
    }
}