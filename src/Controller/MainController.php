<?php

namespace App\Controller;

use App\View;

class MainController {
    public function index() {
        
        $data = [
            "result" => "Hello, World!"
        ];

        View::render('MainView', $data);
    }

}

