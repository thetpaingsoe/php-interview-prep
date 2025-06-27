<?php

namespace App;

class View {
    public static function render($template, $data = []) {
        extract($data);
        include __DIR__ . "/View/{$template}.php";
    }
}
