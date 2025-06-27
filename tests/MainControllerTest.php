<?php

namespace Tests;

use App\Controller\MainController;
use Mockery;
use PHPUnit\Framework\TestCase;

class MainControllerTest extends TestCase {
    
    public function testIndex_success() {

        Mockery::mock('alias:App\View')
            ->shouldReceive("render")
            ->once()
            ->with(
                'MainView', 
                [
                    "result" => "Hello, World!"
                ]
                );

        $main = new MainController();
        $main->index();

        $this->assertTrue(true);
    }
}