<?php
Skihat::import('applications.application_request', SKIHAT_PATH_LIBRARY);

class ApplicationRequestTest extends PHPUnit_Framework_TestCase {
    public function initial() {
        $appRequest = new ApplicationRequest();
        $appRequest->initialize(array('testGet' => 'g1', 'testGet1' => 'g2'), array('testPost' => 'p3', 'testPost1' => 'p4'));
        return $appRequest;
    }
    public function testQuery() {
        $appRequest = $this->initial();
        $this->assertEquals('g1', $appRequest->query('testGet'));
        $this->assertEquals(['testGet' => 'g1', 'testGet1' => 'g2'], $appRequest->queryAll());
    }
    public function testForm() {
        $appRequest = $this->initial();
        $this->assertEquals('p3', $appRequest->form('testPost'));
    }
    public function testModule() {
        $appRequest = $this->initial();
        $this->assertEquals('testModule', $appRequest->module('testModule'));
    }
}