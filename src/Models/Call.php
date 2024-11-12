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

    public function findById($id) {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table} WHERE id={$id}");
        $result = $query->fetchAll();

        return new Call($result[0]["id"], $result[0]["room"], $result[0]["issue"], $result[0]["dateTime"], $result[0]["area"]);
    }

    public function destroy() {
        $query = $this->database->mysql->query("DELETE FROM {$this->table} WHERE id={$this->id}");
    }
}