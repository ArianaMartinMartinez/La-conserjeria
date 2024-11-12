<?php

namespace App\Controllers;

use App\Models\Call;
use App\Core\View;

class CallController {
    
    public function __construct(){
        if(isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        $this->index();
    }

    public function index(){
        $call = new Call();
    }

    public function create() {
        new View("createCall");
    }

    public function store(array $request) {
        $newCall = new Call(null, $request["room"], $request["issue"], $request["dateTime"], $request["area"]);
        $newCall->save();

        $this->index();
    }
}