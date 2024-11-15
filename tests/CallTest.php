<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\Call;

Class CallTest extends TestCase {
    public function testIfOK() {
        $this->assertEquals(1,1);
    }

    public function testGetAreaCorrectly() {
        $newCall = new Call(null, "932", "Test numero 1", null, "abcd");
        $resultGetArea = $newCall->getArea();
        $this->assertEquals("abcd",$resultGetArea);
    }

    public function testGetRoomCorrectly() {
        $newCall = new Call(null, "542", "Test numero 2", null, "efgh");
        $resultGetRoom = $newCall->getRoom();
        $this->assertEquals("542",$resultGetRoom);
    }

    public function testGetIssueCorrectly() {
        $newCall = new Call(null, "710", "Test numero 3", null, "ijkl");
        $resultGetIssue = $newCall->getIssue();
        $this->assertEquals("Test numero 3",$resultGetIssue);
    }
}