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
    
    public function all(){
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
        $callArray = $query->fetchAll();
        $callList = [];

        foreach($callArray as $call){
            $callItem = new Call($call["id"],$call["room"],$call["issue"],$call["dateTime"],$call["area"]);
            array_push($callList, $callItem);
        }
        
        return $callList;
    }
}