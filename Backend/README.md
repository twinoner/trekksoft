
![alt text](https://www.trekksoft.com/hs-fs/hubfs/TrekkSoft%20logo.png?width=1600&name=TrekkSoft%20logo.png "Trekksoft")

# Instructions
I've used just the basic PHP server: php -S localhost:8888 or any other method that you seem fit.

The frontend it's just a basic form and one can add multiple Rovers.

## Run tests
To run tests just stay on (or go to) the Backend directory and run the command `vendor/bin/phpunit`

# Backend Interview Challenge

## Learning Competencies
- Challenge understanding.
- Implement Object Oriented Design, DDD, patterns and best practices.
- Implementing robust testing is important.
- Manipulate Input/Output correctly.


## The challenge

A squad of robotic discovery rovers are to be landed by SpaceX on an specific area on Mars. This area, which is curiously rectangular, must be navigated by the rovers so that their on-board webcams and detectors can get a complete view of the surrounding terrain.
A rover’s position and location is represented by a combination of x and y coordinates and a letter representing one of the four cardinal compass points. The area is divided up into a grid to simplify the navigation. An example position might be 0, 0, N, which means the rover is in the bottom left corner and facing North.
In order to control a rover, SpaceX sends a simple string of letters as a message. The possible letters are ‘R’, ‘L’ and ‘M’. ‘R’ and ‘L’ make the rover spin 90 degrees left or right respectively, without moving from its current spot. ‘M’ means move forward one grid point, and maintain the same heading.

---


## INPUT:
The first line of input is the upper-right coordinates of the area, the lower-left coordinates are assumed to be 0,0. The rest of the input is information pertaining to the rovers that have been deployed. Each rover has two lines of input.The first line gives the rover’s position, and the second line is a series of instructions telling the rover how to explore the area. The position is made up of two integers and a letter separated by spaces, corresponding to the x and y co-ordinates and the rover’s orientation. Each rover will be finished sequentially, which means that the second rover won’t start to move until the first one has finished moving.

## OUTPUT
The output for each rover should be its final co-ordinates and heading.

---

## Setup
1. Download the repository.
2. Make the corresponding modifications.
3. Create a pull request to review the challenge.

## Input Cheat Sheet
The output for each rover should be its final co-ordinates and heading.

# Test Input:
```
5 5
1 2 N
LMLMLMLMM
3 3 E
MMRMMRMRRM
```

# Expected Output:
```
1 3 N
5 1 E
```