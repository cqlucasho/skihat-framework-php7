<?php
Skihat::import('medias.media', SKIHAT_PATH_KERNEL);

class MediaTest extends PHPUnit_Framework_TestCase {
    public function testEngines() {
        //print_r(Media::engines());
    }
    public function testEngine() {
        //print_r(Media::engine('default'));
    }
    public function testFiles() {
        //print_r(Media::files());
    }
}