<?php
class Rover {
    public $x;
    public $y;
    public $direction;

	public function __construct($x = 0, $y = 0, $direction = "N") {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
    }

    public function move($instructions) {
		
        $directions = ['N', 'E', 'S', 'W'];
        foreach ($instructions as $instruction) {

			$currentDirectionIndex = array_search($this->direction, $directions);

			if ($instruction === 'L') {
				$newDirectionIndex = ($currentDirectionIndex - 1 + 4) % 4;
				$this->direction = $directions[$newDirectionIndex];
			} elseif ($instruction === 'R') {
				$newDirectionIndex = ($currentDirectionIndex + 1) % 4;
            $this->direction = $directions[$newDirectionIndex];
            } elseif ($instruction === 'M') {
                if ($this->direction === 'N') {
                    $this->y++;
                } elseif ($this->direction === 'E') {
                    $this->x++;
                } elseif ($this->direction === 'S') {
                    $this->y--;
                } elseif ($this->direction === 'W') {
                    $this->x--;
                }
            }
        }
    }

    public function getPosition() {
        return $this->x . ' ' . $this->y . ' ' . $this->direction;
    }
}