<?php

namespace App;

use App\Controller\MainController;

class Router {
    public static function route($uri) {

        switch ($uri) {
            case '/':
                $mainController = new MainController();

                $mainController->index();
                break;            
            
            default:
                http_response_code(404);
                echo "404 Not Found";
                
        }
    }
}