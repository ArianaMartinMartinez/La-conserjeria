<?php

namespace App\Controllers;

use App\Models\Call;

class CallController {
    
    public function __construct(){

        if(isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(){
        $call = new Call();
    }

    public function delete($id) {
        $callDelete = new Call;
        $call = $callDelete->findById($id);
        $call->destroy();

        $this->index();
    }
}