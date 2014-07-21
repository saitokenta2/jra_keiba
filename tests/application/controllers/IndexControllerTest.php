<?php

require_once 'Zend/Application.php';
require_once 'Zend/Test/PHPUnit/ControllerTestCase.php';

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    public function setUp()
    {
        /* Setup Routine */
         $this->application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );
        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
   }

    public function appBootstrap()
    {
        $this->application->bootstrap();
    }

    public function tearDown()
    {
        /* Tear Down Routine */
    }
     public function testich() {
         $this->assertTrue(true,1111111);
         $this->dispatch("/");
         $this->assertAction("test");
     }
}

