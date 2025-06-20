<?php

namespace Tests;

use App\MainController;
use PHPUnit\Framework\TestCase;

class MainControllerTest extends TestCase {
    public function testIndex() {
        $main = new MainController();
        $result = $main->index();
        $expectedResult = "Hello, World!";

        $this->assertEquals($expectedResult, $result);
    }
}