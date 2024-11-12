<?php

namespace App\Controllers;

use App\Models\Call;

class CallController {
    
    public function __construct(){
        $this->index();
    }

    public function index(){
        $call = new Call();
    }
}