<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class SampleTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals("Hello from Jenkins Pipeline!", sayHello());
    }
}
