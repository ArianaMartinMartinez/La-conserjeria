<?php

namespace App\Models;

use App\Database;

class Call{
    
    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $dateTime;
    public string $area;

    public $database;
    public $table = 'problems';
        
    public function __construct($id=null, $room='', $issue='', $dateTime=null, $area=''){
        $this->id = $id; 
        $this->room = $room;
        $this->issue = $issue;
        $this->dateTime = $dateTime;
        $this->area = $area;

        if(!$this->database){
            $this->database = new Database();
        }
    }
}