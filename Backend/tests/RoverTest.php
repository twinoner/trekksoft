<?php

use PHPUnit\Framework\TestCase;

require_once 'Rover.php'; // Include your Rover class

class RoverTest extends TestCase {
    public function testMove() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['R', 'M', 'L', 'M', 'R']);
        
        $this->assertEquals('1 1 E', $rover->getPosition());
    }
    
    public function testMoveForward() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['M']);
        
        $this->assertEquals('0 1 N', $rover->getPosition());
    }

    public function testTurnLeft() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['L']);
        
        $this->assertEquals('0 0 W', $rover->getPosition());
    }

    public function testTurnRight() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['R']);
        
        $this->assertEquals('0 0 E', $rover->getPosition());
    }

    public function testInvalidCommand() {
        $rover = new Rover(0, 0, 'N');

        // Using an invalid command ('X')
        $rover->move(['X']);
        
        $this->assertEquals('0 0 N', $rover->getPosition());
    }

    public function testCombinedCommands() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['R', 'M', 'M', 'L', 'M']);
        
        $this->assertEquals('2 1 N', $rover->getPosition());
    }

    public function testOutOfBounds() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['M', 'M', 'M']); // Move 3 steps forward
        
        // The rover should stay within bounds (assumed 5x5 grid)
        $this->assertEquals('0 3 N', $rover->getPosition());
    }

    public function testFails() {
        $rover = new Rover(0, 0, 'N');
        $rover->move(['M', 'M', 'M']); // Move 3 steps forward
        
        // The rover should stay within bounds (assumed 5x5 grid)
        $this->assertNotEquals('1 4 W', $rover->getPosition());
    }
}

